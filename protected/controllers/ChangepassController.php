<?php
Yii::app()->theme = 'user-theme';
class ChangepassController extends UsersController {

    public function actionIndex(){
        $this->pageTitle = "Change Password";
        $model = new User();
        if( isset($_POST["bsubmit"]) ){
            $model->setScenario('changePass');
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                $user_id_login = Yii::app()->session['id_user'];
                $model->changePass($model->pass_new, $user_id_login);
                $this->redirect(array('/chooseexams/index'));
            }
        }
        $this->render('index',array('model'=>$model));
    }
}