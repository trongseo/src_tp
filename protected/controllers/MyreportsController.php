<?php
Yii::app()->theme = 'user-theme';
class MyreportsController extends UsersController {

    public function actionIndex() {

        $this->pageTitle = "Reports Manager";
        $model = new TUserExam();
        $id_user =  Yii::app()->session['id_user'] ;
        $this->render('index', array('items' =>$model->getReportListByUser($id_user)));
    }

    public function actionLoad() {
        $this->pageTitle = 'View Report';
        if(isset($_REQUEST["id_user"]))
        {
            $id_user=$_REQUEST["id_user"];
            $id_exam=$_REQUEST["id_exam"];
            $modelTakeTest= new TakeTest();
            $dataArrInfoTest = $modelTakeTest->infoTest($id_user,$id_exam);
            $oneRow =  $dataArrInfoTest[0];
            //
            if($oneRow['start_time']=='0000-00-00 00:00:00')
            {

            }else
            {
                $data_AnswerExamOfUser =   $modelTakeTest->getAnswerExamOfUser($id_user,$id_exam);
                Yii::app()->session['data_AnswerExamOfUser'] =$data_AnswerExamOfUser;
            }
            // $dataTest = $modelTakeTest->getFullExamTest($id_user,$id_exam);$arrnow['rnow'];
            $dataTest = $modelTakeTest->getQuestionExamTest($id_user,$id_exam);
            $data_AnswerExamOfUser =   $modelTakeTest->getAnswerExamOfUser($id_user,$id_exam);
            Yii::app()->session['data_AnswerExamOfUser'] =$data_AnswerExamOfUser;
            $this->render('load', array( 'oneRow'=>$oneRow,'dataTest'=>$dataTest));
        }

    }

    public function getAnswer($id_question)
    {
        $dataTest= Yii::app()->session['data_AnswerExamOfUser'];
        foreach($dataTest as $value)
        {
            if($id_question==$value['id_question'])
            {
                return $value['id_answer'];
            }
        }
        return 0;
    }
} 