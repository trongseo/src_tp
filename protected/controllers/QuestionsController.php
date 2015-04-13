<?php

class QuestionsController extends HomeController {


    public function actionIndex() {
        $model_class = new QuestionBanks();
        $this->pageTitle = 'Question Bank';
        //  $this->render('signup', array('model' => $model, 'listBusiness' => $business_class->listCats(1), 'listProvinces' => $province_class->listProvinceByCountry('VND')));
        $business_class = new QuestionType();
        $model = new QuestionType('QuestionType');
        $data_bussiness = array();
        $listBusiness =$business_class->listAllItem() ;
        $m_question_type_id=0;
        $data_bussiness[0] ="All";
        foreach ($listBusiness as $value) {
            $data_bussiness[$value['m_question_type_id']] = $value['name'];
        }
        $order = 'id';
        $direction='DESC';
        if(isset($_REQUEST['order']))
        {
            $order = $_REQUEST['order'];
            $direction = $_REQUEST['direction'];
        }
        //  echo $_POST["QuestionType"];

        if(isset($_GET["QuestionType"]))
        {
            $QuestionType= $_GET["QuestionType"];
            $m_question_type_id = $QuestionType['id'];
            Yii::app()->session['m_question_type_id'] =  $QuestionType['id'];
            $resutlSearch =    $model_class->search($m_question_type_id,$order,$direction);
            $this->render('index', array('m_question_type_id'=>$m_question_type_id,'model'=>$model,'items' => $resutlSearch,'data_bussiness'=>$data_bussiness ));
        }else
        {
            $this->render('index', array('m_question_type_id'=>$m_question_type_id,'model'=>$model,'items' => $model_class->listAllItem($order,$direction),'data_bussiness'=>$data_bussiness ));
        }

    }
    public function actionInsert() {
        $this->pageTitle = 'Question Bank Insert';
        //  echo $this->guid();
        $model_class = new QuestionBanks();
        $dataAnswerTest =  array();
        $dataAnswerTest[1]="";
        $dataAnswerTest[2]="";
        $dataAnswerTest[3]="";
        $dataAnswerTest[4]="";
        //submit for insert
        if( isset($_POST["bsubmit"])||isset($_POST["bsubmit2"]) )
        {
            //insert
            $model_class->setScenario("register");
            $model_class->attributes =  $_POST["QuestionBanks"];
            $dataAnswerTest[1]= $_POST["answer_text"]["1"];
            $dataAnswerTest[2]= $_POST["answer_text"]["2"];
            $dataAnswerTest[3]= $_POST["answer_text"]["3"];
            $dataAnswerTest[4]= $_POST["answer_text"]["4"];
            //register
            if($model_class->validate())
            {

                $id_insert= $model_class->insertNew($_POST["QuestionBanks"]);
                $model_answer = new MAnswer();
                $post_right = $_POST["QuestionBanks"]["id_answer"];
                $id_true_answer= $model_answer->insertAllAnswer($post_right,$id_insert, $_POST["answer_text"]);
                $model_class->updateTrueAnswer($id_true_answer,$id_insert);
                if(isset($_POST["bsubmit2"]) )
                {
                    $this->redirect(array('questions/insert'));
                }else
                {
                    $this->redirect(array('questions/index'));
                }
            }else
            {
                $this->render('insert',  $this->loadDataInsert($model_class,$dataAnswerTest));
            }

        }else
        {
            //Khoi tao cho insert
            $this->render('insert',  $this->loadDataInsert($model_class,$dataAnswerTest));
        }

    }
    private function  loadDataInsert($model,$dataAnswerTest) {
        //$business_class = $this->cast('QuestionBanks',$business_class);
//load data combobox
        $business_class = new QuestionType();
        $listBusiness =$business_class->listAllItem() ;
        // var_dump($listBusiness);exit();
        $data_bussiness = array();
        $data_bussiness[''] ="--empty--";
        foreach ($listBusiness as $value) {
            $data_bussiness[$value['m_question_type_id']] = $value['name'];
        }
        //$data_id_level
        $data_id_level = array();
        $data_id_level[''] ="--empty--";
        $business_MYCONST = new MYCONST();
        $list =$business_MYCONST->getList("question_level") ;

        foreach ($list as $value) {
            $data_id_level[$value['const_value']] = $value['const_text'];
        }

        //$data_question_second
        $data_question_second = array();
        $data_question_second[''] ="--empty--";
        $list =$business_MYCONST->getList("question_second") ;
        foreach ($list as $value) {
            $data_question_second[$value['const_value']] = $value['const_text'];
        }
        return  array('dataAnswerTest'=>$dataAnswerTest,'data_question_second'=>$data_question_second ,'model'=>$model,'data_bussiness'=>$data_bussiness ,'data_id_level'=>$data_id_level);
    }

    public function actionDelete() {

        if(isset($_REQUEST["id"]))
        {
            $model_class = new QuestionBanks();
            $model_class->deleteQuestion($_REQUEST["id"]);
            $this->redirect(array('questions/index'));
        }else
        if(isset($_REQUEST["box_questions"]))
        {
            $model_class = new QuestionBanks();

            foreach($_POST["box_questions"] as $valId){
                $model_class->deleteQuestion($valId);
            }
            $this->redirect(array('questions/index'));
        }

    }
    public function actionEdit() {
        $this->pageTitle = 'Question Bank Edit';
        $model_class = new QuestionBanks();
        if(isset($_REQUEST["id"]))
        {
            $idquestion = $_REQUEST["id"];
            $model_answer = new MAnswer();
            $all_answer =  $model_answer->loadAnswerFromQuestion($idquestion);
            $isFirst = 1;
            $rdo_value = array();
            $intUp = 1;
            foreach ($all_answer as $value) {
                $rdo_value[$intUp] = $value['id'];
                $intUp++;
            }

            if( isset($_POST["bsubmit"])||isset($_POST["bsubmit2"]) )
            {
                $model_class->attributes =  $_POST["QuestionBanks"];
                $model_class->id_answer = $_POST["QuestionBanks"]["id_answer"];
                $model_class->id_question_type = $_POST["QuestionBanks"]["id_question_type"];
                $model_class->id_level = $_POST["QuestionBanks"]["id_level"];
                $model_class->second = $_POST["QuestionBanks"]["second"];
                $model_class->id = $_POST["QuestionBanks"]["id"];
                $model_class->content = $_POST["QuestionBanks"]["content"];
                //var_dump($model_class->attributes, $_POST["QuestionBanks"] );exit();

                //insert
                $model_class->setScenario("register");
                $model_class->attributes =  $_POST["QuestionBanks"];
                $dataAnswerTest[1]= $_POST["answer_text"]["1"];
                $dataAnswerTest[2]= $_POST["answer_text"]["2"];
                $dataAnswerTest[3]= $_POST["answer_text"]["3"];
                $dataAnswerTest[4]= $_POST["answer_text"]["4"];
                //register
                if($model_class->validate())
                //if(false==true)
                {

                    $id_insert= $model_class->UpdateBanks($_POST["QuestionBanks"]);
                    $post_right = $_POST["QuestionBanks"]["id_answer"];
                    $id_true_answer= $model_answer->updateAllAnswer($post_right,$id_insert, $_POST["answer_text"]);
                    $model_class->updateTrueAnswer($id_true_answer,$id_insert);
                    if(isset($_POST["bsubmit2"]) )
                    {
                        $this->redirect(array('questions/insert'));
                    }else
                    {
                        $this->redirect(array('questions/index'));
                    }

                }else
                {
                    $isFirst=0;
                    $this->render('edit',  $this->loadDataUpdate($model_class,$dataAnswerTest,$isFirst,$rdo_value));
                }

            }else
            {
                //update

                $model_class=   $model_class->findByPk($_REQUEST["id"]);
                $this->render('edit',  $this->loadDataUpdate($model_class,$all_answer,$isFirst,$rdo_value));
            }

        }

    }
    private function  loadDataUpdate($model,$all_answer,$isFirst,$rdo_value) {
        //$business_class = $this->cast('QuestionBanks',$business_class);
//load data combobox
        $business_class = new QuestionType();
        $listBusiness =$business_class->listAllItem() ;
        // var_dump($listBusiness);exit();
        $data_bussiness = array();
        $data_bussiness[''] ="--empty--";
        foreach ($listBusiness as $value) {
            $data_bussiness[$value['m_question_type_id']] = $value['name'];
        }
        //$data_id_level
        $data_id_level = array();
        $data_id_level[''] ="--empty--";
        $business_MYCONST = new MYCONST();
        $list =$business_MYCONST->getList("question_level") ;

        foreach ($list as $value) {
            $data_id_level[$value['const_value']] = $value['const_text'];
        }

        //$data_question_second
        $data_question_second = array();
        $data_question_second[''] ="--empty--";
        $list =$business_MYCONST->getList("question_second") ;
        foreach ($list as $value) {
            $data_question_second[$value['const_value']] = $value['const_text'];
        }
        $answer_text = array();
        $intUp = 1;
        if($isFirst==0)
        {
            $answer_text=$all_answer;
        }else
        {
            foreach ($all_answer as $value) {
                $answer_text[$intUp] = $value['content'];
                $intUp++;
            }
        }



//        $rdo_value = array();
//        $intUp = 1;
//        foreach ($all_answer as $value) {
//            $rdo_value[$intUp] = $value['id'];
//            $intUp++;
//        }

        return  array('rdo_value'=>$rdo_value,'data_question_second'=>$data_question_second ,'model'=>$model,'answer_text'=>$answer_text ,'data_bussiness'=>$data_bussiness ,'data_id_level'=>$data_id_level);
    }


	public function actionView($id) {
        $model_class = new Customers();

        $this->render('view', array('item' => $model_class->detailRecord($id)));
	}

}