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
        $san_pham_guid = $_REQUEST["san_pham_guid"];
        $ma_sp = CommonDB::GetDataRowKeyGuid("san_pham",$san_pham_guid)["ma_sp"];
        $this->render('hinhsanpham',array('ma_sp'=>$ma_sp,'dataColor'=>$dataColor,'san_pham_guid'=>$san_pham_guid));
    }
    public function actionSanphamedit() {
        $hsTable["san_pham_guid"]="";
        $hsTable["ma_sp"]="";
        $hsTable["ten_sp"]="";
        $hsTable["hinh_dai_dien"]="";
        $hsTable["san_pham_loai_guid"]="";
        $hsTable["mo_ta_ngan"]="";
        $hsTable["mo_ta_dai"]="";
        if( isset($_GET["guid"]) ){
                $guid = $_GET["guid"];
            $hsTable=CommonDB::GetDataRowKeyGuid("san_pham",$guid);

        }
        $this->pageTitle = "Cập nhật sản phẩm ";
       $datasan_pham_loai_guid = CommonDB::GetAll("Select * from san_pham_loai ",[]);
        $this->render('sanphamedit',array('hsTable'=>$hsTable,'datasan_pham_loai_guid'=>$datasan_pham_loai_guid));
    }
    public function actionSanPhamList() {

        $this->pageTitle = 'Danh sách sản phẩm';
        $query="Select * from video_list ";


        $datasan_pham_loai_guid = CommonDB::GetAll("Select san_pham_loai_guid,ten_loai from san_pham_loai ",[]);
        $hsTable["san_pham_loai_guid"]="";
/////////
        $hsTable["ma_sp"]="";
        //$orderBy = $this->getOrderBy($order,$direction);
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);  // define the variable to “LIMIT” the query
        $query1 = Yii::app()->db->createCommand() //this query contains all the data
            ->select(array('*'))
            ->from(array('san_pham'))
            // ->where('t1.id_question_type = '.$question_type_id.' AND t2.id = t1.id_question_type ')
            ->where(' 1=1')
            ->order('date_create')
            ->limit(Yii::app()->params['listPerPage'], ($page-1) * Yii::app()->params['listPerPage']) // the trick is here!
            ->queryAll();

        $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
            ->select('count(san_pham_guid) as count')
            ->from(array('san_pham '))
            ->where(' 1=1 ')
            ->queryScalar(); // do not LIMIT it, this must count all items!
        $type_id= (isset($_GET['san_pham_loai_guid']) ? $_GET['san_pham_loai_guid'] : 0);
        $ma_sp= (isset($_GET['ma_sp']) ? $_GET['ma_sp'] : "");

        if($ma_sp!=""){
            $hsTable["ma_sp"]=$ma_sp;
            $query1 = Yii::app()->db->createCommand() //this query contains all the data
                ->select(array('*'))
                ->from(array('san_pham'))
                ->where('ma_sp =:ma_sp ')
                ->order(' date_create')
                ->limit(Yii::app()->params['listPerPage'],  ($page-1) * Yii::app()->params['listPerPage']); // the trick is here!

            $query1->bindParam(':ma_sp',  $ma_sp, PDO::PARAM_STR);
            $query1= $query1->queryAll();

            $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
                ->select('count(san_pham_guid) as count')
                ->from(array('san_pham'))
                ->where('ma_sp =:ma_sp ');
            $item_count->bindParam(':ma_sp',  $ma_sp, PDO::PARAM_STR);
            $item_count= $item_count->queryScalar(); // do not LIMIT it, this must count all items!
        }else
        if ($type_id!=0)
        {
            $hsTable["san_pham_loai_guid"]=$type_id;
            $query1 = Yii::app()->db->createCommand() //this query contains all the data
                ->select(array('*'))
                ->from(array('san_pham'))
                ->where('san_pham_loai_guid =:san_pham_loai_guid ')
                ->order(' date_create')
                ->limit(Yii::app()->params['listPerPage'],  ($page-1) * Yii::app()->params['listPerPage']); // the trick is here!

            $query1->bindParam(':san_pham_loai_guid',  $type_id, PDO::PARAM_STR);
            $query1= $query1->queryAll();

            $item_count = Yii::app()->db->createCommand() // this query get the total number of items,
                ->select('count(san_pham_guid) as count')
                ->from(array('san_pham'))
                ->where('san_pham_loai_guid =:san_pham_loai_guid ');
            $item_count->bindParam(':san_pham_loai_guid',  $type_id, PDO::PARAM_STR);
            $item_count= $item_count->queryScalar(); // do not LIMIT it, this must count all items!

        }

        $pages = new CPagination($item_count);
        $pages->pageSize = Yii::app()->params['listPerPage'];
        $dataSearch = array('models' =>$query1, 'pages' => $pages, 'itemCount'=>$item_count,'pageSize'=>Yii::app()->params['listPerPage']);
        $this->render('sanphamlist',array('hsTable'=>$hsTable,'data'=>$query1,'dataSearch'=>$dataSearch,'datasan_pham_loai_guid'=>$datasan_pham_loai_guid));




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
    public function actionSanphamdanhmuc() {

        $this->pageTitle = "Cập nhật danh mục";
        if(isset($_REQUEST["add"])){
            $guidId = CommonDB::guid();
            $query="insert into san_pham_loai(san_pham_loai_guid) values('$guidId')";
            CommonDB::runSQL($query,[]);
            $this->redirect("index.php?r=myadmin/sanphamdanhmuc");
            return;
        }
        if( isset($_POST['bsubmit'])) {
            $this->SanphamdanhmucUpdate();
        }
        $query="Select * from san_pham_loai order by so_thu_tu ";
        $data = CommonDB::GetAll($query,[]);
        $this->render('sanphamdanhmuc',array('data'=>$data));
    }
    public function SanphamdanhmucUpdate() {
        $i=0;
        $list =[];
        $forbiddenword = 'ten_loai_';
        foreach($_POST as $key=>$value)
        {
            if(preg_match("/$forbiddenword/i", $key)){
                $guid_id = substr($key,strlen ($forbiddenword));
                if (!in_array($guid_id, $list)){
                    $list[$i]=$guid_id;
                    $i++;
                    $query="update san_pham_loai set ten_loai=:ten_loai where san_pham_loai_guid=:san_pham_loai_guid";
                    $hs["ten_loai"]=$_REQUEST["ten_loai_".$guid_id];
                    $hs["san_pham_loai_guid"]=$guid_id;
                    CommonDB::runSQL($query,$hs);
                }
            }

        }
        $i=0;
        $list =[];
        $forbiddenword1 = 'so_thu_tu_';
        foreach($_POST as $key=>$value)
        {
            if(preg_match("/$forbiddenword1/i", $key)){
                $guid_id = substr($key,strlen ($forbiddenword1));
                if (!in_array($guid_id, $list)){
                    $list[$i]=$guid_id;
                    $i++;
                    $query="update san_pham_loai set so_thu_tu=:so_thu_tu where san_pham_loai_guid=:san_pham_loai_guid";
                    $hs1["so_thu_tu"]=$_REQUEST["so_thu_tu_".$guid_id];
                    $hs1["san_pham_loai_guid"]=$guid_id;
                    CommonDB::runSQL($query,$hs1);
                }
            }

        }

    }
    public function actionDanhMucDelete() {
        $san_pham_loai_guid = $_REQUEST["san_pham_loai_guid"];
        $query=" delete from san_pham_loai  where san_pham_loai_guid=:san_pham_loai_guid ";
        $hs["san_pham_loai_guid"]=$san_pham_loai_guid;
        CommonDB::runSQL($query,$hs);
        echo "1";
    }

}