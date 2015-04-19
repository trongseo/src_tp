<?php
Yii::app()->theme = 'admin-green';
class AdminchungController extends CController {


    public function actionEdit() {
        $guid_id = $_REQUEST["guid"];
        $data = CommonDB::GetDataRowKeyGuid("aaachung",$guid_id);
        $this->pageTitle = $data["aaatitle"];
        $this->render('edit',  array('hsTable'=>$data));
    }


    public function actionAjaxupdate() {
        Yii::app()->theme = '';
        if( isset($_POST['bsubmit'])) {

            $guid_id=$_REQUEST["aaachung_guid"];//luon luon co hidden field
            $queryIn ="Update  aaachung set mo_ta_dai=:mo_ta_dai where aaachung_guid=:aaachung_guid";
            $hsTable="";

            $hsTable["aaachung_guid"]=$guid_id ;
            $hsTable["mo_ta_dai"]=$_REQUEST["mo_ta_dai"] ;
            CommonDB::runSQL($queryIn,$hsTable);
            echo "1";

        }
    }
    public function actionLienHe() {
        $this->pageTitle = "Danh sách liên hệ";
        $query="Select * from lienhe order by date_create desc";
        $data = CommonDB::GetAll($query,[]);
        $this->render('lienhe',  array('data'=>$data));

    }
    public function actionXoalienhe() {
        $lienhe_guid = $_REQUEST["lienhe_guid"];
        $query=" delete from lienhe  where lienhe_guid=:lienhe_guid ";
        $hs["lienhe_guid"]=$lienhe_guid;
        CommonDB::runSQL($query,$hs);
        echo "1";
    }



    public function actionDondathang() {
        $this->pageTitle = "Danh sách đơn đặt hàng";
        $query="Select hinh_dai_dien,ma_sp, dondathang_guid,hoten,email,dienthoai,fax,diachi,tieude,noidung from dondathang,san_pham where dondathang.san_pham_guid=san_pham.san_pham_guid
          order by dondathang.date_create desc";
        $data = CommonDB::GetAll($query,[]);
        $this->render('dondathang',  array('data'=>$data));

    }
    public function actionDondathangDelete() {
        $dondathang_guid = $_REQUEST["dondathang_guid"];
        $query=" delete from dondathang  where dondathang_guid=:dondathang_guid ";
        $hs["dondathang_guid"]=$dondathang_guid;
        CommonDB::runSQL($query,$hs);
        echo "1";
    }



}