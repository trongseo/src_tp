<?php

class Common {


    public static function guid(){
        $guid ="";
        if (function_exists('com_create_guid')){
            $guid= com_create_guid();
        }else{
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
            $guid= $uuid;
        }
        //var_dump($guid);
        return str_replace("{","",$guid );
    }

    public static function menuMultiLevel($data, $models, $link, $tag = null, $tagSub = null) {
        $rowsize = count($data);
        $model = new $models();
        $row = $model->findCatByTag(Yii::app()->request->getQuery('cid')); //find cat_id
        $cat_id = $row['cat_id'];

        //Find parent_id
        $parent_id = $cat_id;
        if ($cat_id) {
            foreach ($data as $value) {
                if ($cat_id == $value['cat_id']) {
                    if ($value['cat_parent_id']) {
                        $parent_id = $value['cat_parent_id'];
                    }
                    break;
                }
            }
        }

        //Display cat menu
        for ($i = 0; $i < $rowsize; $i++) {
            if ($data[$i]['cat_parent_id'] == 0) {
                //Parent categories
                echo '<li><a href="' . Yii::app()->request->baseUrl . LANGURL . '/' . $link . '/' . $data[$i]['tag' . Yii::app()->session['lang']] . '" title="' . $data[$i]['cat_title' . LANG] . '">' . (($tag) ? '<' . $tag . '>' : '') . $data[$i]['cat_title' . LANG] . (($tag) ? '</' . $tag . '>' : '') . '</a>';
                //Sub categories
                if ($parent_id && ($parent_id == $data[$i]['cat_id'])) {
                    for ($j = 0; $j < $rowsize; $j++) {
                        if ($data[$j]['cat_parent_id'] == $data[$i]['cat_id']) {
                            echo '<ul>';
                            for ($j = 0; $j < $rowsize; $j++) {
                                if ($data[$j]['cat_parent_id'] == $data[$i]['cat_id']) {
                                    echo '<li><a href="' . Yii::app()->request->baseUrl . LANGURL . '/' . $link . '/' . $data[$j]['tag' . Yii::app()->session['lang']] . '" title="' . $data[$j]['cat_title' . LANG] . '">' . (($tagSub) ? '<' . $tagSub . '>' : '') . $data[$j]['cat_title' . LANG] . (($tagSub) ? '</' . $tagSub . '>' : '') . '</a></li>';
                                }
                            }
                            echo '</ul>';
                        }
                    }
                }
                echo '</li>';
            }
        }
    }

    /**
     * @param $item - item sẽ bị remove
     * @param int $type - (0 = pic_full, 1 = pic_desc)
     * @param int $path
     * @param int $cat - Danh mục
     */
    public function removePic($item, $type = 0, $path = 0, $cat = '') {
        $path = ($path == 1) ? YiiBase::getPathOfAlias('webroot') . '/public/userfiles/image/' . Yii::app()->user->id . '/image' . '/' . Yii::app()->controller->id . $cat . '/' : YiiBase::getPathOfAlias('webroot') . USERFILES . '/' . Yii::app()->controller->id . $cat . '/';
        if ($type == 0) {
            if ($item && file_exists($path . $item)) {
                unlink($path . $item);
            }
        } else {
            if ($item) {
                $str = explode('|', $item);
                foreach ($str as $value) {
                    if (file_exists($path . $value)) {
                        unlink($path . $value);
                    }
                }
            }
        }
    }

    //Front end - Create folder and Chmod
    public function recursiveMkdir($path, $mode = 0777) {
        $dirs = explode('/', $path);
        $count = count($dirs);

        $location = '/';
        for ($i = 1; $i < ($count - 1); ++$i) {
            $location .= $dirs[$i] . '/';
            if (!is_dir(YiiBase::getPathOfAlias('webroot') . $location)) {
                mkdir(YiiBase::getPathOfAlias('webroot') . $location, 0777);
                chmod(YiiBase::getPathOfAlias('webroot') . $location, 0777);
            }
        }
    }

    public static function setLanguage() {
        if (isset($_GET['language']) && ($_GET['language'] != 'vi')) {
            Yii::app()->language = $_GET['language'];
            define('LANG', $_GET['language']); //coi lai
            define('LANGURL', '/' . $_GET['language']); //coi lai
            Yii::app()->session['lang'] = $_GET['language'];
            Yii::app()->session['langUrl'] = '/' . $_GET['language'];
        } else {
            Yii::app()->language = 'en';
            define('LANG', ''); //coi lai
            define('LANGURL', ''); //coi lai
            Yii::app()->session['lang'] = '';
            Yii::app()->session['langUrl'] = '';
        }
    }

    /**
     * Function dùng cho việc tính toán trả về số, hay là liên hệ giá cả sản phẩm
     * @static
     * @param $price
     * @return string
     */
    public static function getPrice($price) {
        $str = '';
        if (is_numeric($price)) {
            $str = number_format($price, 0, '', '.');
        } else {
            if ($price) {
                $str = $price;
            } else {
                $str = Yii::app()->controller->lang['contact'];
            }
        }
        return $str;
    }
}