<?php
/**
 * Created by PhpStorm.
 * User: TanPham
 * Date: 24/10/14
 * Time: 14:22
 */

class SubjectsController extends HomeController {

    /**
     * Load all subject
     */
    public function actionIndex() {
        $model = new Subject();

        $order = 'id';
        $direction='DESC';
        $this->pageTitle = 'Subject Manager';
        if(isset($_REQUEST['order']))
        {
            $order = $_REQUEST['order'];
            $direction = $_REQUEST['direction'];
        }
        Yii::app()->session['order']=$order;
        Yii::app()->session['direction']=$direction;
        $this->render('index', array('items' => $model->listAllItem($order,$direction)));
    }

    /**
     * Add new subject
     */
    public function actionInsert() {

        $this->pageTitle = 'Subject Insert';
        $model_class = new Subject();
        //submit for insert
        if(isset($_POST["bsubmit"]))
        {
            //insert
            $model_class->setScenario("register");
            $model_class->attributes =  $_POST["Subject"];
            //register
            if($model_class->validate())
            {
                $model_class->insertNew($_POST["Subject"]);
                $this->redirect(array('subjects/index'));
            }else
            {
                $this->render('insert',  array('model'=>$model_class));
            }

        }else
        {
            $this->render('insert',  array('model'=>$model_class));
        }

    }

    public function actionDelete() {
        if(isset($_REQUEST["id"]))
        {
            $model_class = new Subject();
            $model_class->deleteSubject($_REQUEST["id"]);
            $this->redirect(array('subjects/index'));
        }else
            if(isset($_REQUEST["box_subjects"]))
            {
                $model_class = new Subject();
                foreach($_REQUEST["box_subjects"] as $valId){
                   $model_class->deleteSubject($valId);
                }
                $this->redirect(array('subjects/index'));
            }

    }
    public function actionList() {
        $model = new Subject();

        $order = 'id';
        $direction='DESC';
        $this->pageTitle = 'Subject Manager';
        if(isset($_REQUEST['order']))
        {
            $order = $_REQUEST['order'];
            $direction = $_REQUEST['direction'];
        }
        Yii::app()->session['order']=$order;
        Yii::app()->session['direction']=$direction;

        $this->render('list',  array());

    }
    public function actionAjax() {
        $model = new Subject();

        if(isset($_REQUEST['is_insert']))
        {
            //insert
            $model->setScenario("register");
            $model->attributes =  $_POST["Subject"];
            $model->insertNew($_POST["Subject"]);
            echo $_REQUEST['guid'];
            return;
        }


        $order = 'id';
        $direction='DESC';
        $this->pageTitle = 'Subject Manager';
        if(isset($_REQUEST['order']))
        {
            $order = $_REQUEST['order'];
            $direction = $_REQUEST['direction'];
        }
        Yii::app()->session['order']=$order;
        Yii::app()->session['direction']=$direction;
      //  $this->render('list', array('items' => $model->listAllItem($order,$direction)));
$arr_value=array();
      $items =  $model->listAllItem($order,$direction);
        foreach($items['models'] as $value)
        {
            $arrChild = array();
            $arrChild[]= $value['id'];
            $arrChild[]= $value['name'];
            $arrChild[]= $value['description'];
            $arr_value[] =$arrChild;

        }

        $this->layout=false;
        $this->layout = '';
        echo   CJavaScript::jsonEncode($arr_value );
        Yii::app()->end();




    }
    public function actionEdit() {
        $model_class = new Subject();
        $this->pageTitle = 'Subject Edit';
        if( isset($_POST["bsubmit"]) )
        {
            // get value
            $model_class->attributes =  $_POST["Subject"];
            $model_class->id = $_POST["Subject"]["id"];
            $model_class->name = $_POST["Subject"]["name"];
            $model_class->description = $_POST["Subject"]["description"];

            $model_class->setScenario("register");
            $model_class->attributes =  $_POST["Subject"];
            //update
            if($model_class->validate())
            {
                $model_class->updateSubject($_POST["Subject"]);
                $this->redirect(array('subjects/index'));
            }else
            {
                $this->render('edit',  array('model'=>$model_class));
            }


        }else{
            $model_class=   $model_class->findByPk($_REQUEST["id"]);
            if($model_class == null){
                $this->redirect(array('subjects/index'));
            }
            $this->render('edit',  array('model'=>$model_class));
        }
    }


} 