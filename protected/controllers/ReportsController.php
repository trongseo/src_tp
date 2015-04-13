<?php

class ReportsController extends HomeController {
    public function actionViewReport() {

        if(isset($_REQUEST["id"]))
        {

           $this->render('load',  array( 'oneRow'=>15));
           // $this->render('view', array( 'oneRow'=>$oneRow,'remain_second'=>$arrnow['rnow'],'dataTest'=>$dataTest));
        }
        $this->render('load',  array( 'oneRow'=>15));
    }
    public function actionLoad() {

        if(isset($_REQUEST["id"]))
        {

            $this->render('load',  array('h'=>$_REQUEST["id"]));
        }

    }




}