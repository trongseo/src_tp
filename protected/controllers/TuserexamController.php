<?php

class TuserexamController extends HomeController
{

	public function actionCreate()
	{
        $this->pageTitle = 'Exam of users create';
        $model_class = new TUserExam();
        //submit for insert
        if(isset($_POST['TUserExam']))
        {
            //insert
            $model_class->setScenario("register");
            $model_class->attributes=$_POST['TUserExam'];
            //register
            if($model_class->validate())
            {

                $model_class->insert();
                if(isset($_POST["bsubmit2"]) )
                {
                    $this->redirect(array('tuserexam/create'));
                }else
                {
                    $this->redirect(array('questions/index'));
                }
            }else
            {
                $this->render('create',  $this->loadDataInsert($model_class));
            }

        }else
        {
            //Khoi tao cho insert
            $this->render('create',  $this->loadDataInsert($model_class));
        }

    }
    private function  loadDataInsert($model) {
        //$business_class = $this->cast('QuestionBanks',$business_class);
//load data combobox
        $businessUser = new User();
        $data_id_user =$businessUser->getDataForCombo() ;
        $arr_data_id_user = array();
        $arr_data_id_user[''] ="--empty--";
        foreach ($data_id_user as $value) {
            $arr_data_id_user[$value['id']] = $value['email'].'-'.$value['full_name'];
        }

        //$arr_data_id_exam
        $businesExam = new Exam();
        $data_id_exam =$businesExam->getDataForCombo() ;
        // var_dump($listBusiness);exit();
        $arr_data_id_exam = array();
        $arr_data_id_exam[''] ="--empty--";
        foreach ($data_id_exam as $value) {
            $arr_data_id_exam[$value['id']] = $value['subject'];
        }


        return  array('arr_data_id_user'=>$arr_data_id_user,'model'=>$model,'arr_data_id_exam'=>$arr_data_id_exam );
    }


    /**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $this->pageTitle = 'Exam of users update';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TUserExam']))
		{
			$model->attributes=$_POST['TUserExam'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
        if(isset($_REQUEST["id"]))
        {
            $model_class = new TUserExam();
            $model_class->deleteUserExam($_REQUEST["id"]);
            $this->redirect(array('tuserexam/index'));
        }else
            if(isset($_REQUEST["box_exams"]))
            {

                $model_class = new TUserExam();

                foreach($_REQUEST["box_exams"] as $valId){
                    $model_class->deleteUserExam($valId);
                }
                $this->redirect(array('tuserexam/index'));
            }
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->pageTitle = 'Exam of users';
        $model = new TUserExam();
        $m_id_user='';
        $m_id_exam='';

        //load data combobox
        $businessUser = new User();
        $data_id_user =$businessUser->getDataForCombo() ;
        $arr_data_id_user = array();
        $arr_data_id_user[''] ="--empty--";
        foreach ($data_id_user as $value) {
            $arr_data_id_user[$value['id']] = $value['email'].'-'.$value['full_name'];
        }

        //$arr_data_id_exam
        $businesExam = new Exam();
        $data_id_exam =$businesExam->getDataForCombo() ;
        // var_dump($listBusiness);exit();
        $arr_data_id_exam = array();
        $arr_data_id_exam[''] ="--empty--";
        foreach ($data_id_exam as $value) {
            $arr_data_id_exam[$value['id']] = $value['subject'];
        }
        if(isset($_GET["TUserExam"]))
        {
            $userExam= $_GET["TUserExam"];
            $m_id_user = $userExam['id_user'];
            $m_id_exam = $userExam['id_exam'];
            $result_Search = $model->search($m_id_user,$m_id_exam);
            $this->render('index', array('m_id_user'=>$m_id_user,'m_id_exam'=>$m_id_exam,'model'=>$model,'items' => $result_Search,'arr_data_id_user'=>$arr_data_id_user,'model'=>$model,'arr_data_id_exam'=>$arr_data_id_exam));
        }else
        {
            $this->render('index', array('m_id_user'=>$m_id_user,'m_id_exam'=>$m_id_exam,'model'=>$model,'items' => $model->listAllItem(),'arr_data_id_user'=>$arr_data_id_user,'model'=>$model,'arr_data_id_exam'=>$arr_data_id_exam));
        }
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TUserExam('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TUserExam']))
			$model->attributes=$_GET['TUserExam'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TUserExam the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TUserExam::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TUserExam $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tuser-exam-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
