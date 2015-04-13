<?php
Yii::app()->theme = 'user-theme';
class TaketestController extends UsersController {


    public function actionDoTest() {

       // Yii::app()->session['id_user'] = '1';
        Yii::app()->session['id_exam'] = $_REQUEST['id_exam'];

        $id_user =  Yii::app()->session['id_user'];
        $id_exam =  Yii::app()->session['id_exam'];
        $modelTakeTest= new TakeTest();
        $dataArrInfoTest = $modelTakeTest->infoTest($id_user,$id_exam);
        $oneRow =  $dataArrInfoTest[0];
        $this->pageTitle = $oneRow["subject"];
        Yii::app()->session['finish_time']=$oneRow['finish_time'];

        if($oneRow['start_time']=='0000-00-00 00:00:00')
        {

            $data_num_easy =   $modelTakeTest->getQuestionRandom($oneRow['num_easy'],1,$oneRow['id_question_type']);//easy
            $data_num_normal =   $modelTakeTest->getQuestionRandom($oneRow['num_normal'],2,$oneRow['id_question_type']);//normal
            $data_num_hard =   $modelTakeTest->getQuestionRandom($oneRow['num_hard'],3,$oneRow['id_question_type']);//hard
            $modelTakeTest->insertQuestionUser($data_num_easy,$data_num_normal,$data_num_hard,$id_exam,$id_user,$oneRow['tid']);
        }

        $arrnow =  $modelTakeTest->getMysqltime($id_user,$id_exam,$oneRow['finish_time']);
        if($oneRow['start_time']!='0000-00-00 00:00:00')
        {

            //cho submit tre hon 5giay co the do loi cham network
            if( $arrnow['rnow']<=0)
            {

                $modelTakeTest->updateFinishTime($oneRow['tid']);
                $this->redirect(array('taketest/result&id_user='.$oneRow['id_user'].'&id_exam='.$id_exam));
            }
        }

        if( isset($_REQUEST['bsubmit']) ||isset($_REQUEST['ajaxsave']) )
        {
            // var_dump($dataArrInfoTest);
            $modelTakeTest= new TakeTest();
            $dataTest = $modelTakeTest->getQuestionExamTest($id_user,$id_exam);
            $arrUpdateAnswer =array();

            foreach($dataTest as $value)
            {
                if (array_key_exists('id_question'.$value['id_question'], $_REQUEST))
                {
                    $arrayOne = array($_REQUEST['id_question'.$value['id_question']],$value['id_question'], $id_user);
                    $arrUpdateAnswer[]=$arrayOne;
                }

            }
           // $t_user_exam_id
            $modelTakeTest->updateUserAnswerQuestion($arrUpdateAnswer,$oneRow['tid']);
            if(isset($_REQUEST['ajaxsave']))
            {
                Yii::app()->end();
                return;
            }else
            {
                $this->redirect(array('taketest/result&id_user='.$oneRow['id_user'].'&id_exam='.$id_exam));
                return;
            }

        }
        //
        if($oneRow['start_time']!='0000-00-00 00:00:00')
        {
            $data_AnswerExamOfUser =   $modelTakeTest->getAnswerExamOfUser($id_user,$id_exam);
            Yii::app()->session['data_AnswerExamOfUser'] =$data_AnswerExamOfUser;
        }

        $dataTest = $modelTakeTest->getQuestionExamTest($id_user,$id_exam);

        $this->render('dotest', array( 'oneRow'=>$oneRow,'remain_second'=>$arrnow['rnow'],'dataTest'=>$dataTest));

    }
    public function actionAjaxGetNow()
    {
        $id_user =  Yii::app()->session['id_user'];
        $id_exam =  Yii::app()->session['id_exam'];
        $modelTakeTest= new TakeTest();
        $finishTime =  Yii::app()->session['finish_time'];
        $arrOne =  $modelTakeTest->getMysqltime($id_user,$id_exam,$finishTime);

        echo $arrOne['rnow'];
        return $arrOne['rnow'];
    }
    public function getAnswer($id_question)
    {

        $dataTest= Yii::app()->session['data_AnswerExamOfUser'];
        if(isset($dataTest))
        foreach($dataTest as $value)
        {
           if($id_question==$value['id_question'])
           {
              return $value['id_answer'];
           }
        }
        return 0;
    }

    public function actionResult(){

            $id_user = $_REQUEST["id_user"];
            $id_exam = $_REQUEST["id_exam"];

            $model_class = new TakeTest();
            $model = $model_class->getResultTest($id_user,$id_exam);
            $this->pageTitle = "Test Result";
            $work_time = $this->secondsToTime($model['workTime']);
            $score = $model_class->getScore($id_exam,$id_exam);
            $this->render('result',array('models'=>$model,'work_time'=>$work_time,'score'=>$score));

    }

    function secondsToTime($seconds)
    {
        // extract minutes
        $divisor_for_minutes = $seconds % (60 * 60);
        $minutes = floor($divisor_for_minutes / 60);

        // extract the remaining seconds
        $divisor_for_seconds = $divisor_for_minutes % 60;
        $seconds = ceil($divisor_for_seconds);


        return $obj = $minutes .' minutes '.' '.$seconds.' seconds';

    }
}