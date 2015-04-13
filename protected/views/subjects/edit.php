

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
            </p><table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody><tr>
                                <td width="3">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="3">
                                </td>
                                <td>
                                    <table style="border-left: 1px solid #E0E7F6;
                                                                            border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;" border="0" width="100%" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td colspan="3" style="background: #ffffff" height="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
                                            </td>
                                        </tr>
                                        <tr style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/barsmall-0-background.gif) repeat-x;">
                                            <td style="background: #ffffff" width="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="24" width="1">
                                            </td>
                                            <td align="center">
                                                &nbsp;&nbsp;<b><a class="bar2" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index">Question Bank</a></b>&nbsp;&nbsp;
                                            </td>
                                            <td style="background: #ffffff" width="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="24" width="1">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="background: #ffffff" height="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td width="5">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="5" height="1">
                                </td>
                                <td>
                                    <table style="border-left: 1px solid #E0E7F6;
                                                                            border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;" border="0" width="100%" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td colspan="3" style="background: #ffffff" height="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
                                            </td>
                                        </tr>
                                        <tr style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/barsmall-0-background.gif) repeat-x;">
                                            <td style="background: #ffffff" width="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="24" width="1">
                                            </td>
                                            <td align="center">
                                                &nbsp;&nbsp;<b>Subject</b>&nbsp;&nbsp;
                                            </td>
                                            <td style="background: #ffffff" width="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="24" width="1">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="background: #ffffff" height="1">
                                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            </tbody></table>
                    </td>
                    <td align="right" width="53">
                        <a id="infobar_button" href="javascript:ShowInfoBar(true);" title="Show/hide hints bar">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/dialog-info-small.gif" border="0" height="24" width="24"></a><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="5"><a id="helpbar_button" href="guide/guide.php?language=en&amp;page=question_bank.question_bank.edit_question" title="Help" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/dialog-help-small.gif" border="0" height="24" width="24"></a>
                    </td>
                    <td width="3">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="3">
                    </td>
                </tr>
                </tbody>
            </table>
            <table style="background: #CFD6E3;" border="0" width="100%" cellpadding="0" cellspacing="0">
                <tbody><tr>
                    <td height="1">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
                    </td></tr>
                </tbody></table>
            <h2>
                Subject Settings</h2>
            <?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
            <?php echo $form->errorSummary($model, ''); ?>
            <p>
            </p>
            <table class="rowtable2" border="0" width="50%" cellpadding="5" cellspacing="1">
                <tbody>
                <tr class="rowone" valign="top">
                    <td>
                        Subject name:
                    </td>
                    <td>
                        <?php echo $form->textField($model, 'name', array( 'class'=>'inp','size'=>'50')); ?> <label style="color: #ff0000">*</label>
                        <?php echo $form->hiddenField($model, 'id'); ?>
                    </td>
                </tr>
                <tr class="rowtwo" valign="top">
                    <td>
                        Subject description:
                    </td>
                    <td>
                        <?php echo $form->textArea($model, 'description', array( 'rows'=>15, 'cols' =>50)); ?>

                        <script  language="JavaScript" type="text/javascript">
                            var question_textEditor = new InnovaEditor("question_textEditor"); question_textEditor.width = "100%"; question_textEditor.toolbarMode = 0; question_textEditor.cmdAssetManager = "modalDialogShow('/editors/iseditor5/assetmanager/assetmanager.php?lang=en-US', 640, 465)"; question_textEditor.btnFlash = true; question_textEditor.btnMedia = true; question_textEditor.btnStyles = true; question_textEditor.css = "shared/style.css"; question_textEditor.btnStrikethrough = true; question_textEditor.btnSuperscript = true; question_textEditor.btnSubscript = true; question_textEditor.btnLTR = true; question_textEditor.btnRTL = true; question_textEditor.btnClearAll = true; question_textEditor.btnPasteText = true; question_textEditor.REPLACE("QuestionBanks_content");
                        </script>
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="center">
                <input class="btn" name="bsubmit" value=" Update " type="submit">
            </p>
        </td>
    </tr>
    </tbody>
</table>
<?php $this->endWidget(); ?>
