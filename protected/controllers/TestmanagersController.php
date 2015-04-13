<?php

class TestmanagersController extends  HomeController {

    public function actionIndex() {

        $model = new Exam();
        $this->pageTitle = 'Exam Manager';
        $modelQuestion = new QuestionType('QuestionType');
        //load data combobox
        $business_class = new QuestionType();
        $listBusiness =$business_class->listAllItem() ;
        $m_question_type_id=0;
        $data_bussiness = array();
        $data_bussiness[0] ="All";
        foreach ($listBusiness as $value) {
            $data_bussiness[$value['m_question_type_id']] = $value['name'];
        }
        if(isset($_GET["QuestionType"]))
        {
            $QuestionType= $_GET["QuestionType"];
            $m_question_type_id = $QuestionType['id'];
            $result_Search = $model->search($m_question_type_id);
            $this->render('index', array('m_question_type_id'=>$m_question_type_id,'model'=>$modelQuestion,'items' => $result_Search,'data_bussiness'=>$data_bussiness ));
        }else
        {
            $this->render('index', array('m_question_type_id'=>$m_question_type_id,'model'=>$modelQuestion,'items' => $model->listAllItem(),'data_bussiness'=>$data_bussiness ));
        }


    }

    public function actionInsert() {
        $this->pageTitle = 'Exam Insert';
        $model_class = new Exam();
        //submit for insert
        if(isset($_POST["bsubmit"]))
        {
            //insert
            $model_class->setScenario("register");
            $model_class->attributes =  $_POST["Exam"];
            //register
            if($model_class->validate())
            {
                $model_class->insertNew($_POST["Exam"]);
                $this->redirect(array('testmanagers/index'));
            }else
            {
                $this->render('insert',  $this->loadData($model_class));
            }

        }else
        {
            //Khoi tao cho insert
            $this->render('insert',  $this->loadData($model_class));
        }

    }

    public function actionDelete() {

        if(isset($_REQUEST["id"]))
        {
            $model_class = new Exam();
            $model_class->deleteExam($_REQUEST["id"]);
            $this->redirect(array('testmanagers/index'));
        }else
            if(isset($_REQUEST["box_exams"]))
            {
                $model_class = new Exam();

                foreach($_REQUEST["box_exams"] as $valId){
                    $model_class->deleteExam($valId);
                }
                $this->redirect(array('testmanagers/index'));
            }else if(isset($_REQUEST["all"])){
                $this->redirect(array('testmanagers/index'));
            }
    }

    public function actionEdit() {
        $this->pageTitle = 'Exam Edit';
        $model_class = new Exam();
        if( isset($_POST["bsubmit"]) )
        {
            // get value
            $model_class->attributes =  $_POST["Exam"];
            $model_class->id = $_POST["Exam"]["id"];
            $model_class->finish_time = $_POST["Exam"]["finish_time"];
            $model_class->subject = $_POST["Exam"]["subject"];
            $model_class->id_question_type = $_POST["Exam"]["id_question_type"];
            $model_class->num_easy = $_POST["Exam"]["num_easy"];
            $model_class->num_normal = $_POST["Exam"]["num_normal"];
            $model_class->num_hard = $_POST["Exam"]["num_hard"];
            $model_class->note = $_POST["Exam"]["note"];

            $model_class->setScenario("register");
            $model_class->attributes =  $_POST["Exam"];
            //update
            if($model_class->validate())
            {
                $model_class->updateExam($_POST["Exam"]);
                $this->redirect(array('testmanagers/index'));
            }else
            {
                $this->render('edit',  $this->loadData($model_class));
            }


        }else{
            $model_class=   $model_class->findByPk($_REQUEST["id"]);
            if($model_class == null){
                $this->redirect(array('testmanagers/index'));
            }
            $this->render('edit', $this->loadData($model_class));
        }
    }

    private function  loadData($model) {
        $business_class = new QuestionType();
        $listBusiness =$business_class->listAllItem() ;

        //$data_bussiness
        $data_bussiness = array();
        $data_bussiness[''] ="--empty--";
        foreach ($listBusiness as $value) {
            $data_bussiness[$value['m_question_type_id']] = $value['name'];
        }
        //$data_number
        $data_number = array();
        $list = array("0","1","2","3","4","5","6","7","8","9","10");
        $i =0;
        foreach ($list as $value) {
            $data_number[$i] = $value;
            $i++;
        }

        //$data_question_second
        $data_finish_time = array();
        $data_finish_time[''] ="--empty--";
        $business_MYCONST = new MYCONST();
        $list =$business_MYCONST->getList("exam_finish_time") ;
        foreach ($list as $value) {
            $data_finish_time[$value['const_value']] = $value['const_text'];
        }
        return  array('data_finish_time'=>$data_finish_time,'model'=>$model,'data_bussiness'=>$data_bussiness ,'data_number'=>$data_number);
    }
} 