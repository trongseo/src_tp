<?php
Yii::app()->theme = 'user-theme';
class ChooseexamsController extends UsersController {

    public function actionIndex() {
        $this->pageTitle = "Take a Test";
        $model = new Exam();
        $this->render('index', array('items' => $model->getExamForUser(Yii::app()->session['id_user'])));

    }
} 
