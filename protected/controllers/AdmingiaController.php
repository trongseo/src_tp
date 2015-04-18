<?php
Yii::app()->theme = 'admin-green';
class AdmingiaController extends CController {


    public function actionIndex() {

        $this->pageTitle = 'Danh sách sản phẩm';
        $this->render('index',  array('model'=>""));
    }

    public function actionAjaxdelete() {
        Yii::app()->theme = '';

        $guid_id = $_REQUEST["guid_id"];
        $query=" delete from san_pham_price  where san_pham_price_guid=:san_pham_price_guid ";
        $hs["san_pham_price_guid"]=$guid_id;
        CommonDB::runSQL($query,$hs);
        echo "1";
    }
    public function actionLoadallprice() {
        Yii::app()->theme = '';
        $san_pham_guid=$_REQUEST["san_pham_guid"];

        $query=" SELECT san_pham_price_guid,a.san_pham_guid,a.color_id,sp_price,aa.`size_text`,aaa.color_name FROM san_pham_price a ,`m_size` aa ,m_color aaa
 WHERE a.`color_id`=aaa.color_id AND a.`m_size_guid`=aa.`m_size_guid` and a.san_pham_guid='$san_pham_guid' order by a.date_create";
        $data = CommonDB::GetAll($query,[]);
        $this->render('giasanphamlist',array('data'=>$data));


    }
    public function actionGiasanpham() {
        $san_pham_guid = $_REQUEST["san_pham_guid"];
        $ma_sp = CommonDB::GetDataRowKeyGuid("san_pham",$san_pham_guid)["ma_sp"];
        $sp_price="";
        $hsTable["san_pham_price_guid"]='' ;
        $hsTable["san_pham_guid"]=$san_pham_guid ;
        $hsTable["color_id"]='' ;
        $hsTable["m_size_guid"]='' ;
        $hsTable["sp_price"]='' ;
        $san_pham_price_guid="";
        $hsTable["mo_ta_dai"]="";
        if( isset($_GET["guid"]) ){
            $san_pham_price_guid = $_GET["guid"];
            $hsTable=CommonDB::GetDataRowKeyGuid("san_pham_price",$san_pham_price_guid);

        }
        $this->pageTitle = "Cập nhật giá sản phẩm ";
        $datam_size = CommonDB::GetAll("Select * from m_size order by date_create ",[]);
        $dataColor = CommonDB::GetAll("Select * from m_color ",[]);
        $this->render('giasanpham',array('san_pham_guid'=>$san_pham_guid,'hsTable'=>$hsTable,'datam_size'=>$datam_size,'ma_sp'=>$ma_sp,'dataColor'=>$dataColor));
    }
    public function actionAjaxGiasanpham() {
        $color_id=$_GET["color_id"];
        $m_size_guid=$_GET["m_size_guid"];
        $san_pham_guid=$_REQUEST["san_pham_guid"];
        $hsTable=CommonDB::GetAll ("select * from san_pham_price where san_pham_guid='".$san_pham_guid."' and color_id='".$color_id."' and m_size_guid='".$m_size_guid."' ",[]);
        if(count($hsTable)==0){echo "";};
        echo json_encode($hsTable);
    }
    public function actionAjaxGiasanphamguid() {
        $san_pham_price_guid = $_GET["guid"];
        $hsTable=CommonDB::GetAll("select * from san_pham_price where san_pham_price_guid='".$san_pham_price_guid."'",[]);
        if(count($hsTable)==0){echo "";};
        echo json_encode($hsTable);
    }
    public function actionAjaxupdate() {
        Yii::app()->theme = '';
        if( isset($_POST['bsubmit'])) {

            $guid_id=$_REQUEST["san_pham_price_guid"];//luon luon co hidden field
            $queryIn ="Update  san_pham_price set san_pham_guid=:san_pham_guid,color_id=:color_id,m_size_guid=:m_size_guid,sp_price=:sp_price where san_pham_price_guid=:san_pham_price_guid";
            $hsTable="";
            if($guid_id==""){

                $guid_id = Common::guid();
                CommonDB::runSQLInsert("san_pham_price",$guid_id);
            }
            $hsTable["san_pham_price_guid"]=$guid_id ;
            $hsTable["san_pham_guid"]=$_REQUEST["san_pham_guid"] ;
            $hsTable["color_id"]=$_REQUEST["color_id"] ;
            $hsTable["m_size_guid"]=$_REQUEST["m_size_guid"] ;
            $hsTable["sp_price"]=$_REQUEST["sp_price"] ;
            CommonDB::runSQL($queryIn,$hsTable);
            echo "1";

        }
    }

}