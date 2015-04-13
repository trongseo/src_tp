<?php
Yii::app()->theme = '';
class ActiveController extends  CController{

    public function actionIndex(){
        $model_class = new User();
        $guid = 0;
        if(isset($_REQUEST["code"])){
            $guid = $_REQUEST["code"];
        }
        $result= $model_class->activationNewUser($guid);

        $this->render('active',  array('result'=>$result));
    }
} 