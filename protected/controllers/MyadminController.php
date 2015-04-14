<?php
Yii::app()->theme = 'admin-template';
class MyadminController extends CController {


    public function actionIndex() {

        $this->pageTitle = 'Change Info';
        $this->render('index',  array('model'=>""));
    }

}