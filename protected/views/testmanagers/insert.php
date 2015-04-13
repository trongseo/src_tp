

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/jqueryui/ui-lightness/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jHtmlArea-0.8.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/jHtmlArea.css" />
<style type="text/css">
    /* body { background: #ccc;} */
    div.jHtmlArea .ToolBar ul li a.custom_disk_button
    {
        background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/disk.png) no-repeat;
        background-position: 0 0;
    }

    div.jHtmlArea
    {
        border: solid 1px #ccc;
    }
</style>

<script type="text/javascript">
    // You can do this to perform a global override of any of the "default" options
    // jHtmlArea.fn.defaultOptions.css = "jHtmlArea.Editor.css";
    $(function () {
        $("#QuestionBanks_content").htmlarea(); // Initialize jHtmlArea's with all default values

    });

</script>



<table border="0" width="100%" cellpadding="0" cellspacing="0">
    <tbody><tr>
        <td class="box_area">
            <p>
            </p>

            <table cellspacing="0" cellpadding="0" width="100%" border="0">
                <tbody><tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                                <td width="3">
                                    <img width="3" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                </td>
                                <td>
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0" style="border-left: 1px solid #E0E7F6;
                                                                            border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;">
                                        <tbody><tr>
                                            <td height="1" style="background: #ffffff" colspan="3">
                                                <img width="1" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                        </tr>
                                        <tr style="background: url(/dos_webacb/themes/admin-green/images/barsmall-0-background.gif) repeat-x;">
                                            <td width="1" style="background: #ffffff">
                                                <img width="1" height="24" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                            <td align="center">
                                                &nbsp;&nbsp;<b><a href="/dos_webacb/index.php?r=testmanagers/index" class="bar2">Exam Manager </a></b>&nbsp;&nbsp;
                                            </td>
                                            <td width="1" style="background: #ffffff">
                                                <img width="1" height="24" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="1" style="background: #ffffff" colspan="3">
                                                <img width="1" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </td>
                                <td width="5">
                                    <img width="5" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                </td>
                                <td>
                                    <table cellspacing="0" cellpadding="0" width="100%" border="0" style="border-left: 1px solid #E0E7F6;
                                                                            border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;">
                                        <tbody><tr>
                                            <td height="1" style="background: #ffffff" colspan="3">
                                                <img width="1" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                        </tr>
                                        <tr style="background: url(/dos_webacb/themes/admin-green/images/barsmall-0-background.gif) repeat-x;">
                                            <td width="1" style="background: #ffffff">
                                                <img width="1" height="24" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                            <td align="center">
                                                &nbsp;&nbsp;<b><a href="index.php?r=tuserexam/index" class="bar2"> Exams for users </a></b>&nbsp;&nbsp;
                                            </td>
                                            <td width="1" style="background: #ffffff">
                                                <img width="1" height="24" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="1" style="background: #ffffff" colspan="3">
                                                <img width="1" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </td>
                                <td width="3">
                                    <img width="3" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                    <td width="53" align="right">
                        <a title="Show/hide hints bar" href="javascript:ShowInfoBar(true);" id="infobar_button">
                            <img width="24" height="24" border="0" src="/dos_webacb/themes/admin-green/images/dialog-info-small.gif"></a><img width="5" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif"><a target="_blank" title="Help" href="guide/guide.php?language=en&amp;page=question_bank.question_bank.edit_question" id="helpbar_button"><img width="24" height="24" border="0" src="/dos_webacb/themes/admin-green/images/dialog-help-small.gif"></a>
                    </td>
                    <td width="3">
                        <img width="3" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                    </td>
                </tr>
                </tbody></table>
            <table style="background: #CFD6E3;" border="0" width="100%" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td height="1">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
                    </td></tr>
                </tbody></table>
            <h2>
                Exam Settings</h2>
            <?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
            <?php echo $form->errorSummary($model, ''); ?>
            <p>
            </p>
            <table class="rowtable2" border="0" width="50%" cellpadding="5" cellspacing="1">
                <tbody>
                <tr class="rowone" valign="top">
                    <td>
                        Exam Type :
                    </td>
                    <td>

                        <?php echo $form->dropDownList($model, 'id_question_type', $data_bussiness, array( 'class' => 'inp')); ?><label style="color: #ff0000">*</label>
                    </td>
                </tr>
                <tr class="rowtwo" valign="top">
                    <td>
                        Exam name:
                    </td>
                    <td>
                        <?php echo $form->textField($model, 'subject', array( 'class'=>'inp','size'=>'50')); ?> <label style="color: #ff0000">*</label>
                    </td>
                </tr>
                <tr class="rowone" valign="top">
                    <td>
                        Overall exam instructions:
                    </td>
                    <td>
                        <?php echo $form->textArea($model, 'note', array( 'rows'=>15, 'cols' =>50)); ?>

                        <script  language="JavaScript" type="text/javascript">
                            var question_textEditor = new InnovaEditor("question_textEditor"); question_textEditor.width = "100%"; question_textEditor.toolbarMode = 0; question_textEditor.cmdAssetManager = "modalDialogShow('/editors/iseditor5/assetmanager/assetmanager.php?lang=en-US', 640, 465)"; question_textEditor.btnFlash = true; question_textEditor.btnMedia = true; question_textEditor.btnStyles = true; question_textEditor.css = "shared/style.css"; question_textEditor.btnStrikethrough = true; question_textEditor.btnSuperscript = true; question_textEditor.btnSubscript = true; question_textEditor.btnLTR = true; question_textEditor.btnRTL = true; question_textEditor.btnClearAll = true; question_textEditor.btnPasteText = true; question_textEditor.REPLACE("QuestionBanks_content");
                        </script>
                    </td>
                </tr>
                <tr class="rowtwo" valign="top">
                    <td>
                        Number question easy:
                    </td>
                    <td>
                        <?php echo $form->dropDownList($model, 'num_easy',  $data_number, array( 'class' => 'inp')); ?>
                    </td>
                </tr>
                <tr class="rowone" valign="top">
                    <td>
                        Number question normal:
                    </td>
                    <td>
                        <?php echo $form->dropDownList($model, 'num_normal', $data_number, array( 'class' => 'inp')); ?>
                    </td>
                </tr>
                <tr class="rowtwo" valign="top">
                    <td>
                        Number question hard:
                    </td>
                    <td>
                        <?php echo $form->dropDownList($model, 'num_hard',  $data_number, array( 'class' => 'inp')); ?>
                    </td>
                </tr>
                <tr class="rowone" valign="top">
                    <td>
                        Exam time :
                    </td>
                    <td>
                        <?php echo $form->dropDownList($model, 'finish_time', $data_finish_time, array( 'class' => 'inp')); ?><label style="color: #ff0000">*</label
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="center">
                <input class="btn" name="bsubmit" value=" Save " type="submit">
            </p>
        </td>
    </tr>
    </tbody>
</table>
<?php $this->endWidget(); ?>
