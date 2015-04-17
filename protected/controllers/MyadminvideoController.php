<?php
Yii::app()->theme = 'admin-green';
class MyadminvideoController extends CController {


    public function actionIndex() {

        $this->pageTitle = 'Danh sách video';
        $this->render('index',  array('model'=>""));
    }


    public function actionVideoList() {



        $query="Select * from video_list ";
        $data = CommonDB::GetAll($query,[]);
        $hsTable["san_pham_loai_guid"]="";
        $datasan_pham_loai_guid = CommonDB::GetAll("Select * from san_pham_loai ",[]);
        $this->render('videolist',array('hsTable'=>$hsTable,'data'=>$data,'datasan_pham_loai_guid'=>$datasan_pham_loai_guid));



    }
    public function actionVideoedit() {


        $hsTable["video_list_guid"]='' ;
        $hsTable["text_embed"]='' ;
        $hsTable["mo_ta"]='' ;
        $hsTable["mo_ta_ngan"]='' ;
        if( isset($_GET["guid"]) ){
                $guid = $_GET["guid"];
            $hsTable=CommonDB::GetDataRowKeyGuid("video_list",$guid);
            $hsTable["video_list_guid"]=$guid ;
            $hsTable["ma_sp"]=CommonDB::GetDataRowKeyGuid("san_pham",$hsTable["san_pham_guid"])["ma_sp"] ;
        }else{
            $hsTable["ma_sp"]=CommonDB::GetDataRowKeyGuid("san_pham",$_REQUEST["san_pham_guid"])["ma_sp"] ;
            $hsTable["san_pham_guid"]=$_REQUEST["san_pham_guid"];
        }
        $this->pageTitle = "Cập nhật tài liệu kỹ thuật ";
        //$video_list = CommonDB::GetAll("Select * from video_list order by date_create ",[]);
        $this->render('videoedit',array('hsTable'=>$hsTable));
    }
    public function actionAjaxVideoSave() {
        if( !isset($_POST['bsubmit'])) {return;}
        //$hsTable["ma_sp"]=CommonDB::GetDataRowKeyGuid("san_pham",$_REQUEST["san_pham_guid"])["ma_sp"] ;
        $video_list_guid=$_REQUEST["video_list_guid"] ;
        if($video_list_guid==""){
            $video_list_guid = CommonDB::guid();
            CommonDB::runSQLInsert("video_list",$video_list_guid);
        }
        $hsTable["video_list_guid"]=$video_list_guid ;
        $hsTable["san_pham_guid"]=$_REQUEST["san_pham_guid"] ;
        $hsTable["text_embed"]=$_REQUEST["text_embed"] ;
        $hsTable["mo_ta"]=$_REQUEST["mo_ta"] ;
        $hsTable["mo_ta_ngan"]=$_REQUEST["mo_ta_ngan"];
       $sqlUpdate="update video_list set san_pham_guid=:san_pham_guid,text_embed=:text_embed,
       mo_ta=:mo_ta,mo_ta_ngan=:mo_ta_ngan  where video_list_guid=:video_list_guid";
       CommonDB::runSQL($sqlUpdate,$hsTable);
        echo "ok";
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