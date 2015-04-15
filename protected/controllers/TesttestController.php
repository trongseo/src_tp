<?php
Yii::app()->theme = '';
class TesttestController extends CController {

    public  function  checkImageFile($ctrName){
        $max_file_size = 1024*2000; // 200kb
        // Check filesize
        if($_FILES[$ctrName]['size'] > $max_file_size){
            return "Lỗi upload > 2MB";
        }

        // Check for errors
        if($_FILES[$ctrName]['error'] > 0){
          return "Lỗi upload.";
        }

        if(!getimagesize($_FILES[$ctrName]['tmp_name'])){
            return "Lỗi upload (không tìm thấy)";
        }

        return "";

    }
     public  function  actionUploadImage(){

         if( isset($_POST['submit']) && isset($_FILES["uploaded_image"]["name"]) && ($_FILES["uploaded_image"]["name"]!="") ) {
            $strResult = $this->checkImageFile("uploaded_image");
            if($strResult !=""){
            echo $strResult;exit();

            }
             $image = new SimpleImage();

             $image->load($_FILES['uploaded_image']['tmp_name']);
             $image->save('Fullpicture2.jpg');

             $image->resizeToWidth(1024); $image->save('1024picture2.jpg');
             $image->maxarea(450,450); $image->save('450450picture2.jpg');

             $image->resizeToWidth(133);
             $image->save('133picture2.jpg');
            // $image->output();
             //$image->scale(50);

         }else{
         $this->render('uploadimage', array( 'oneRow'=>''));
         }

     }
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
        $inputList ='';
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
                $dls ='$'.$column_name;
                $strHs .=$dl."[\"$column_name\"]=$dls ;\n";
                $me=$dl.'["'.$column_name.'"]';
                $inputList .='<input type="text" value="'.$me.'" name="'.$column_name.'" id="'.$column_name.'">\n';
            }
        }
        $columnList=rtrim($columnList, ",");
        $columnListPara=rtrim($columnListPara, ",");
        $queryInsert ="insert into ".$tableName."($columnList) values($columnListPara)";

        //echo $columnList,$columnListPara;
        var_dump( $queryInsert, $strHs,$inputList);
        //CommonDB::runSQL($queryInsert,$hsTestData);
    }

}