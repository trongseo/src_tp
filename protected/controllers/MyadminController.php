<?php
Yii::app()->theme = 'admin-green';
class MyadminController extends CController {


    public function actionIndex() {

        $this->pageTitle = 'Danh sách sản phẩm';
        $this->render('index',  array('model'=>""));
    }

    public function actionHinhsanpham() {

        $this->pageTitle = "Up hình sản phẩm ";
        $dataColor = CommonDB::GetAll("Select * from m_color ",[]);
        $this->render('hinhsanpham',array('dataColor'=>$dataColor));
    }
    public function actionSanphamedit() {

        $this->pageTitle = "Cập nhật sản phẩm ";
       $datasan_pham_loai_guid = CommonDB::GetAll("Select * from san_pham_loai ",[]);
        $this->render('sanphamedit',array('datasan_pham_loai_guid'=>$datasan_pham_loai_guid));
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