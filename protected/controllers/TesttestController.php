<?php
Yii::app()->theme = '';
class TesttestController extends CController {


    public function actionIndex() {

        $tableName = "san_pham";
       $this->insertGen($tableName);
    }
    public  function insertGen($tableName){
        //
        $curdb  = explode('=', Yii::app()->db->connectionString);
        $dbName =  $curdb[2];

        $mysq=" SELECT column_name,data_type FROM information_schema.columns
              WHERE table_schema = '$dbName' AND table_name='$tableName'
            ORDER BY table_name,ordinal_position ";
        $result =  CommonDB::GetAll($mysq,[]);
        //var_dump($result);

        //tao insert
        $columnList ="";
        $columnListPara ="";
        $hsTestData=[];
        $removeColmn="date_create,date_update";
        $strHs="";
        foreach($result as $value){
            $column_name =  $value["column_name"];
            if(strpos($removeColmn,$column_name)===false){
                $columnList .=$column_name.",";
                $columnListPara .=":".$column_name.",";
                $hsTestData[$column_name]=CommonDB::guid();
                $dl ='$hsTable';
                $strHs .=$dl."[\"$column_name\"]='xxx' \n";
            }
        }
        $columnList=rtrim($columnList, ",");
        $columnListPara=rtrim($columnListPara, ",");
        $queryInsert ="insert into ".$tableName."($columnList) values($columnListPara)";

        //echo $columnList,$columnListPara;
        var_dump( $queryInsert, $strHs);
        //CommonDB::runSQL($queryInsert,$hsTestData);
    }

}