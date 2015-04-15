<?php
Yii::app()->theme = 'admin-green';
class MyadminController extends CController {


    public function actionIndex() {

        $this->pageTitle = 'Danh sách sản phẩm';
        $this->render('index',  array('model'=>""));
    }

    public function actionHinhsanpham() {

        $this->pageTitle = "Up hình sản phẩm ";

        $this->render('hinhsanpham',array('model'=>""));
    }

    public function actionChangepassword() {

        $this->pageTitle = "Đổi mật khẩu ";
        $model = new User();
        if( isset($_POST["bsubmit"]) ){
            $model->setScenario('changePass');
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                $user_id_login = Yii::app()->session['id_user'];
                $model->changePass($model->pass_new, $user_id_login);
                $this->redirect(array('/myadmin/index'));
            }
        }
        $this->render('changepassword',array('model'=>$model));
    }

}