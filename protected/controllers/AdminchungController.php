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

}