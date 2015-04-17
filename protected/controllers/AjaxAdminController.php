<?php
Yii::app()->theme = '';
class AjaxadminController extends CController {


    public function actionIndex() {

        $this->pageTitle = 'Danh sách sản phẩm';
        $this->render('index',  array('model'=>""));
    }
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
    public function actionUploadImage() {

        if( isset($_POST['bsubmit']) && isset($_FILES["uploaded_image"]["name"]) && ($_FILES["uploaded_image"]["name"]!="") ) {
            $strResult = $this->checkImageFile("uploaded_image");
            if($strResult !=""){
                echo $strResult;exit();

            }
            $guid_id_insert = Common::guid();
            $image = new SimpleImage();
            $guid_id=$_REQUEST["san_pham_guid"];
            $colorId=$_REQUEST["color_id"];
            $image->load($_FILES['uploaded_image']['tmp_name']);
            $imageName =$colorId.'_'.$guid_id.date('m_d_Y_hisa').'.jpg';
            $imageNameicon_="icon_".$imageName;
            define("image_folder","item_image/");
            $image->save(image_folder.$imageName);

//            $image->resizeToWidth(1024); $image->save('1024picture2.jpg');
//            $image->maxarea(450,450); $image->save('450450picture2.jpg');

            $image->resizeToWidth(133);
            $image->save(image_folder.$imageNameicon_);
            $queryIn="insert into san_pham_hinh(san_pham_hinh_guid,san_pham_guid,image1,so_thu_tu,tooltip,is_daidien,color_guid_id)
             values(:san_pham_hinh_guid,:san_pham_guid,:image1,:so_thu_tu,:tooltip,:is_daidien,:color_guid_id)";
            $hsTable["san_pham_hinh_guid"]=$guid_id_insert;
            $hsTable["san_pham_guid"]=$guid_id;
            $hsTable["image1"]=$imageName;
            $hsTable["so_thu_tu"]='0';
            $hsTable["tooltip"]='';
            $hsTable["is_daidien"]='0';
            $hsTable["color_guid_id"]=$colorId ;
           CommonDB::runSQL($queryIn,$hsTable);
            // $image->output();
            //$image->scale(50);

        }
    }
    public function actionSanphamedit() {

        if( isset($_POST['bsubmit'])) {

            //update image
            if( isset($_FILES["uploaded_image"]["name"]) && ($_FILES["uploaded_image"]["name"]!="")  ){
                $strResult = $this->checkImageFile("uploaded_image");
                if($strResult !=""){
                    echo $strResult;exit();return;

                }

            }

            $guid_id=$_REQUEST["san_pham_guid"];
            $queryIn ="Update  san_pham set ma_sp=:ma_sp,san_pham_loai_guid=:san_pham_loai_guid,mo_ta_dai=:mo_ta_dai where san_pham_guid=:san_pham_guid";
            $hsTable="";
            if($guid_id==""){
                $hsTable["mo_ta_ngan"]="" ; $hsTable["ten_sp"]="" ;
                $guid_id = Common::guid();
                $queryIn="insert into san_pham(san_pham_guid,ma_sp,ten_sp,san_pham_loai_guid,mo_ta_ngan,mo_ta_dai)
                    values(:san_pham_guid,:ma_sp,:ten_sp,:san_pham_loai_guid,:mo_ta_ngan,:mo_ta_dai)";
            }
            $ma_sp=$_REQUEST["ma_sp"];

//            $image->resizeToWidth(1024); $image->save('1024picture2.jpg');
//            $image->maxarea(450,450); $image->save('450450picture2.jpg');


            $hsTable["san_pham_guid"]=$guid_id ;
            $hsTable["ma_sp"]=$ma_sp ;

           // $hsTable["hinh_dai_dien"]=$imageName ;
            $hsTable["san_pham_loai_guid"]=$_REQUEST["san_pham_loai_guid"];

            $hsTable["mo_ta_dai"]=$_REQUEST["mo_ta_dai"];
//            var_dump($hsTable);
            CommonDB::runSQL($queryIn,$hsTable);

            //update image
            if( isset($_FILES["uploaded_image"]["name"]) && ($_FILES["uploaded_image"]["name"]!="")  ){
                $strResult = $this->checkImageFile("uploaded_image");
                if($strResult !=""){
                    echo $strResult;exit();return;
                }
            }
            if( isset($_FILES["uploaded_image"]["name"]) && ($_FILES["uploaded_image"]["name"]!="")  ){
                $image = new SimpleImage();
                $image->load($_FILES['uploaded_image']['tmp_name']);
                $imageName ='daidien_'.$guid_id.date('m_d_Y_hisa').'.jpg';
                $imageNameicon_="icon_".$imageName;
                define("image_folder","item_image/");
                $image->save(image_folder.$imageName);

                $image->resizeToWidth(133);
                $image->save(image_folder.$imageNameicon_);
                $queryIn ="Update  san_pham set hinh_dai_dien=:hinh_dai_dien where san_pham_guid=:san_pham_guid";
                $hsTableImage["san_pham_guid"]=$guid_id ;
                $hsTableImage["hinh_dai_dien"]=$imageName ;
                CommonDB::runSQL($queryIn,$hsTableImage);
            }


            // $image->output();
            //$image->scale(50);

        }
    }

    public function actionDeleteSanPham() {
        $guid_id=$_REQUEST["guid_id"];
        $query = "delete from san_pham where san_pham_guid='".$guid_id."' ";
        CommonDB::runSQL($query,[]);
        echo "ok";
    }
    public function actionDeleteimage() {

        //deleteimage&guid_id="+guid_id +"&imagename="+imagename
        $guid_id=$_REQUEST["guid_id"];
        $imagename=$_REQUEST["imagename"];

        $file= $_SERVER['DOCUMENT_ROOT']."/item_image/".$imagename;
        if (file_exists($file)) {
            unlink( $file);
        }
        $file= $_SERVER['DOCUMENT_ROOT']."/item_image/"."icon_".$imagename;
        if (file_exists($file)) {
            unlink( $file);
        }
        $query = "delete from san_pham_hinh where san_pham_hinh_guid='".$guid_id."' ";
        CommonDB::runSQL($query,[]);

    }

    public function actionListImage() {

        $san_pham_guid=$_REQUEST["san_pham_guid"];
        $colorId=$_REQUEST["color_id"];
        $query="Select * from san_pham_hinh where color_guid_id='$colorId' and san_pham_guid='$san_pham_guid'";
        $data = CommonDB::GetAll($query,[]);
        $this->render('hinhsanphamlist',array('data'=>$data));


    }
    public function actionColorUpdateList() {
        $timer = new ClassTimer();

        $timer->start();


        if(isset($_REQUEST["add"])){
            $colorId = CommonDB::guid();
            $query="insert into m_color(color_id) values('$colorId')";
           CommonDB::runSQL($query,[]);

        }
        if( isset($_POST['bsubmit'])) {
            $this->colorUpdateList();
        }
        $query="Select * from m_color order by date_create";
        $data = CommonDB::GetAll($query,[]);
        $mydb = new MyDb();
        $timer->stop();
        echo $timer->result().'xxxxx';
        $timer->start();
       // $mydb->connect();
        $mydb->query($query);
        $timer->stop();
        echo $timer->result();
        $this->render('colorupdatelist',array('data'=>$data));
    }
    public function colorUpdateList() {
        $i=0;
        $list =[];
        $forbiddenword = 'color_name_';
        foreach($_POST as $key=>$value)
        {
            if(preg_match("/$forbiddenword/i", $key)){
                $guid_id = substr($key,strlen ($forbiddenword));
                if (!in_array($guid_id, $list)){
                    $list[$i]=$guid_id;
                    $i++;
                    $query="update m_color set color_name=:color_name where color_id=:color_id";
                    $hs["color_name"]=$_REQUEST["color_name_".$guid_id];
                    $hs["color_id"]=$guid_id;
                    CommonDB::runSQL($query,$hs);
                }
            }
        }
    }
    public function actionColorDelete() {
        $color_id = $_REQUEST["color_id"];
        $query=" delete from m_color  where color_id=:color_id ";
        $hs["color_id"]=$color_id;
        CommonDB::runSQL($query,$hs);
        echo "1";
    }


}