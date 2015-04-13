

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
            $('input:radio[name="QuestionBanks[id_answer]"]').filter('[value="<?php echo $model->id_answer ?>"]').attr('checked', true);

        });

</script>

<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
<?php echo $form->errorSummary($model, ''); ?>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="box_area">
<p>
</p><table border="0" width="100%" cellpadding="0" cellspacing="0">
    <tbody><tr>
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
                                    &nbsp;&nbsp;<b><a class="bar2" href="questionbank.html">Question Bank</a></b>&nbsp;&nbsp;
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
                    <td width="5">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="5">
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
                                    &nbsp;&nbsp;<b><a class="bar2" href="subjects.html">Subjects</a></b>&nbsp;&nbsp;
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
                    <td width="3">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="3">
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
    </tbody></table>
<table style="background: #CFD6E3;" border="0" width="100%" cellpadding="0" cellspacing="0">
    <tbody><tr>
        <td height="1">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" height="1" width="1">
        </td></tr>
    </tbody></table>
<h2>
    New Question</h2>
<p>
    <?php echo $form->errorSummary($model, ''); ?>
</p>
<table class="rowtable2" border="0" width="50%" cellpadding="5" cellspacing="1">
<tbody><tr class="rowtwo" valign="top">
    <td>
        Times for finish :
    </td>
    <td>

        <?php echo $form->dropDownList($model, 'second', $data_question_second, array( 'class' => 'inp')); ?>


    </td>
</tr>
<tr class="rowone" valign="top">
    <td>
        Question subject:
    </td>
    <td>
        <?php echo $form->dropDownList($model, 'id_question_type', $data_bussiness, array( 'class' => 'inp')); ?>


    </td>
</tr>
<tr class="rowtwo" valign="top">
    <td>
        Level:
    </td>
    <td>
        <?php echo $form->dropDownList($model, 'id_level', $data_id_level, array('tabindex' => 4, 'class' => 'inp')); ?>
      </td>
</tr>
<tr class="rowone" valign="top">
    <td>
        Question:
    </td>
    <td>
        <?php echo $form->textArea($model, 'content', array( 'rows'=>15, 'cols' =>70)); ?>


        <script  language="JavaScript" type="text/javascript">
            var question_textEditor = new InnovaEditor("question_textEditor"); question_textEditor.width = "100%"; question_textEditor.toolbarMode = 0; question_textEditor.cmdAssetManager = "modalDialogShow('/editors/iseditor5/assetmanager/assetmanager.php?lang=en-US', 640, 465)"; question_textEditor.btnFlash = true; question_textEditor.btnMedia = true; question_textEditor.btnStyles = true; question_textEditor.css = "shared/style.css"; question_textEditor.btnStrikethrough = true; question_textEditor.btnSuperscript = true; question_textEditor.btnSubscript = true; question_textEditor.btnLTR = true; question_textEditor.btnRTL = true; question_textEditor.btnClearAll = true; question_textEditor.btnPasteText = true; question_textEditor.REPLACE("QuestionBanks_content");
        </script>
    </td>
</tr>
<tr class="rowtwo" valign="top">
    <td>
        Choice 1:
    </td>
    <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="1">
            <tbody><tr valign="top">
                <td width="100%">
                    <textarea name="answer_text[1]" cols="50" rows="3" style="width: 99%;"><?php echo $dataAnswerTest[1]; ?></textarea>
                </td>
                <td valign="middle" width="150">


                    <nobr>  <input id='a1' type="radio" value="1" class="clsradio" name="QuestionBanks[id_answer]"
                            />
                        <label for="a1">Accept as correct</label></nobr>
                    <br>
                </td>
            </tr>
            </tbody></table>
    </td>
</tr>
<tr class="rowtwo" style="display: none" valign="top">
    <td>
        Feedback 1:
    </td>
    <td>
        <textarea name="answer_feedback" cols="50" rows="3" style="width: 99%;"></textarea>
    </td>
</tr>
<tr class="rowone" valign="top">
    <td>
        Choice 2:
    </td>
    <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="1">
            <tbody><tr valign="top">
                <td width="100%">
                    <textarea name="answer_text[2]" cols="50" rows="3" style="width: 99%;"><?php echo $dataAnswerTest[2]; ?></textarea>
                </td>
                <td valign="middle" width="150">
                    <nobr>  <input id='a2' type="radio" value="2" class="clsradio"  name="QuestionBanks[id_answer]"
                            />
                        <label for="a2">Accept as correct</label></nobr>
                    <br>
                </td>
            </tr>
            </tbody></table>
    </td>
</tr>
<tr class="rowone" valign="top"  style="display: none">
    <td>
        Feedback 2:
    </td>
    <td>
        <textarea name="answer_feedback_2" cols="50" rows="3" style="width: 99%;"></textarea>
    </td>
</tr>
<tr class="rowtwo" valign="top">
    <td>
        Choice 3:
    </td>
    <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="1">
            <tbody><tr valign="top">
                <td width="100%">
                    <textarea name="answer_text[3]" cols="50" rows="3" style="width: 99%;"><?php echo $dataAnswerTest[3]; ?></textarea>
                </td>
                <td valign="middle" width="150">
                    <nobr>  <input id='a4' type="radio" value="3" class="clsradio"  name="QuestionBanks[id_answer]"
                            />
                        <label for="a4">Accept as correct</label></nobr>
                    <br>
                </td>
            </tr>
            </tbody></table>
    </td>
</tr>
<tr class="rowtwo" valign="top"  style="display: none">
    <td>
        Feedback 3:
    </td>
    <td>
        <textarea name="answer_feedback_3" cols="50" rows="3" style="width: 99%;"></textarea>
    </td>
</tr>
<tr class="rowone" valign="top">
    <td>
        Choice 4:
    </td>
    <td>
        <table border="0" width="100%" cellpadding="0" cellspacing="1">
            <tbody><tr valign="top">
                <td width="100%">
                    <textarea name="answer_text[4]" cols="50" rows="3" style="width: 99%;"><?php echo $dataAnswerTest[4]; ?></textarea>
                </td>
                <td valign="middle" width="150">
                    <nobr>  <input id='a3' type="radio" value="4" class="clsradio"  name="QuestionBanks[id_answer]"
                            />
                        <label for="a3">Accept as correct</label></nobr>
                    <br>
                </td>
            </tr>
            </tbody></table>
    </td>
</tr>
<tr class="rowone" valign="top"  style="display: none">
    <td>
        Feedback 4:
    </td>
    <td>
        <textarea name="answer_feedback_4" cols="50" rows="3" style="width: 99%;"></textarea>
    </td>
</tr>
<tr valign="top">
    <td class="rowone" colspan="2">
        <div id="div_questionbank_editquestion_advanced" style="display: none">
            <table class="rowtable2" border="0" width="100%" cellpadding="5" cellspacing="1">
                <tbody><tr class="rowtwo" valign="top">
                    <td>
                        Code:
                    </td>
                    <td>
                        <input name="question_code" value="" class="inp" size="50" type="text">
                    </td>
                </tr>
                <tr class="rowone" valign="top">
                    <td>
                        Shuffle question:
                    </td>
                    <td>
                        <select class="inp" name="question_shuffleq" id="question_shuffleq">
                            <option value="0" selected="">Default (inherit)</option>
                            <option value="1">Do not shuffle</option>
                            <option value="2">Shuffle</option>
                            <option value="3">Show in the beginning</option>
                            <option value="4">Show in the end</option>
                        </select>
                    </td>
                </tr>
                <tr class="rowtwo" valign="top">
                    <td>
                        Shuffle answers:
                    </td>
                    <td>
                        <select class="inp" name="question_shufflea" id="question_shufflea">
                            <option value="0" selected="">Default (inherit)</option>
                            <option value="1">Do not shuffle</option>
                            <option value="2">Shuffle</option>
                            <option value="3">Shuffle (except the first one)</option>
                            <option value="4">Shuffle (except the last one)</option>
                        </select>
                    </td>
                </tr>
                <tr class="rowone" valign="top">
                    <td>
                        Advanced options:
                    </td>
                    <td>
                        <input name="question_type2" type="checkbox">Allow partially correct answers
                    </td>
                </tr>
                </tbody></table>
        </div>
    </td>
</tr>
</tbody></table>
<p class="center">
    <input class="btn" name="bsubmit" value=" Insert " type="submit">
    <input class="btn" name="bsubmit2" value=" Insert and create new question " type="submit">

</p>
<script language="JavaScript" type="text/javascript">
    function updateQuestion() {
        ctlQuestionType = document.getElementById("question_type");
        nQuestionType = ctlQuestionType ? document.getElementById("question_type").options[document.getElementById("question_type").selectedIndex].value : "";
        ctlSubjectID = document.getElementById("subjectid");
        nSubjectID = ctlSubjectID ? ctlSubjectID.options[ctlSubjectID.selectedIndex].value : "";
        ctlAnswerCount = document.getElementById("answercount");
        nAnswerCount = ctlAnswerCount ? ctlAnswerCount.options[ctlAnswerCount.selectedIndex].value : "";
        window.open("questionbank.html?questionid=1&action=editq&question_type=" + nQuestionType + "&subjectid=" + nSubjectID + "&answercount=" + nAnswerCount, "_top");
    }
</script>
</td>
</tr>
</tbody></table>
<?php $this->endWidget(); ?>
