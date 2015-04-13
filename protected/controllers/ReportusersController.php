<?php

class ReportusersController extends UsersController {

    public function actionIndex() {

        $this->pageTitle = 'Report Users';
        $model = new TUserExam();
        $m_id_user='';
        $m_id_exam='';

        Yii::app()->session['result']='';

        //load data combobox
        $businessUser = new User();
        $data_id_user =$businessUser->getDataForCombo() ;
        $arr_data_id_user = array();
        $arr_data_id_user[''] ="--empty--";
        foreach ($data_id_user as $value) {
            $arr_data_id_user[$value['id']] = $value['email'].'-'.$value['full_name'];
        }

        //$arr_data_id_exam
        $businesExam = new Exam();
        $data_id_exam =$businesExam->getDataForCombo() ;
        // var_dump($listBusiness);exit();
        $arr_data_id_exam = array();
        $arr_data_id_exam[''] ="--empty--";
        foreach ($data_id_exam as $value) {
            $arr_data_id_exam[$value['id']] = $value['subject'];
        }
        if(isset($_GET["TUserExam"]))
        {
            $userExam= $_GET["TUserExam"];
            $m_id_user = $userExam['id_user'];
            $m_id_exam = $userExam['id_exam'];
            $result_Search = $model->searchReportList($m_id_user,$m_id_exam);
            $this->render('index', array('m_id_user'=>$m_id_user,'m_id_exam'=>$m_id_exam,'items' => $result_Search,'arr_data_id_user'=>$arr_data_id_user,'model'=>$model,'arr_data_id_exam'=>$arr_data_id_exam));
        }else
        {
            $this->render('index', array('m_id_user'=>$m_id_user,'m_id_exam'=>$m_id_exam,'items' => $model->getReportList(),'arr_data_id_user'=>$arr_data_id_user,'model'=>$model,'arr_data_id_exam'=>$arr_data_id_exam));
        }
    }
    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete()
    {
        if(isset($_REQUEST["id"]))
        {
            $model_class = new TUserExam();
            $model_class->deleteUserExam($_REQUEST["id"]);
            $this->redirect(array('reportusers/index'));
        }else
            if(isset($_REQUEST["box_exams"]))
            {

                $model_class = new TUserExam();

                foreach($_REQUEST["box_exams"] as $valId){
                    $model_class->deleteUserExam($valId);
                }
                $this->redirect(array('reportusers/index'));
            }
    }

    public function actionLoad() {
        $this->pageTitle = 'View Report User';
        if(isset($_REQUEST["id_user"]))
        {
            $id_user=$_REQUEST["id_user"];
            $id_exam=$_REQUEST["id_exam"];
            $modelTakeTest= new TakeTest();
            $dataArrInfoTest = $modelTakeTest->infoTest($id_user,$id_exam);
            $oneRow =  $dataArrInfoTest[0];
            //
            if($oneRow['start_time']=='0000-00-00 00:00:00')
            {

            }else
            {
                $data_AnswerExamOfUser =   $modelTakeTest->getAnswerExamOfUser($id_user,$id_exam);
                Yii::app()->session['data_AnswerExamOfUser'] =$data_AnswerExamOfUser;
            }
            // $dataTest = $modelTakeTest->getFullExamTest($id_user,$id_exam);$arrnow['rnow'];
            $dataTest = $modelTakeTest->getQuestionExamTest($id_user,$id_exam);
            $data_AnswerExamOfUser =   $modelTakeTest->getAnswerExamOfUser($id_user,$id_exam);
            Yii::app()->session['data_AnswerExamOfUser'] =$data_AnswerExamOfUser;
            $this->render('load', array( 'oneRow'=>$oneRow,'dataTest'=>$dataTest));
        }

    }
    public function getAnswer($id_question)
    {
        $dataTest= Yii::app()->session['data_AnswerExamOfUser'];
        foreach($dataTest as $value)
        {
            if($id_question==$value['id_question'])
            {
                return $value['id_answer'];
            }
        }
        return 0;
    }


    public function actionExport(){
        $result_Search = Yii::app()->session['result'];
        $fileName =  'report-list'.date('Y-M-d').'.csv'  ;
        CsvExport::export(
            $result_Search,
            array('id'=>array('number'),'start_time'=>array('text'),'full_name'=>array('text'),'subject'=>array('text'),'finish_time'=>array('text'),'remaining_time'=>array('text'),'score'=>array('text')),
            true, // boolPrintRows
            $fileName
        );
    }

    public function  actionPdf(){


        require_once(realpath(dirname(__FILE__).'/../../').'/protected/vendors/html2pdf/tcpdf/'.'tcpdf.php');
// create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
        //D:\sba_project\SBA_SVN\sba_project\pqo_project\Src\quiz\protected\vendors\html2pdf\tcpdf\config\tcpdf_config.php
        //D:\sba_project\SBA_SVN\sba_project\pqo_project\Src\quiz\protected\vendors\html2pdf\tcpdf\tcpdf_autoconfig.php  cau hinh logo file tcpdf_logo.jpg
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('sbaserver.vn');
        $pdf->SetTitle('sbaserver.vn mon test');
        $pdf->SetSubject('sbaserver Tutorial');
        $pdf->SetKeywords('sbaserver, sbaserver, example, sbaservertest,sbaserver guide');

// set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 008', PDF_HEADER_STRING);

// set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


// ---------------------------------------------------------

// set default font subsetting mode
        $pdf->setFontSubsetting(true);

// set font
        $pdf->SetFont('freeserif', '', 12); //tieng Viet
      //  arialunicid0 tieng nhat
// add a page
        $pdf->AddPage();
        $result_Search = Yii::app()->session['result'];
        $utf8text =$this->renderPartial('load1', array('items'=>$result_Search), true);
        $pdf->writeHTML($utf8text, true, 0, true, 0);

//Close and output PDF document
        $pdf->Output('example_008.pdf', 'I');


    }

}