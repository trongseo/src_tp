
<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>

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
                                                &nbsp;&nbsp;<b><a class="bar2" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=testmanagers/index">Exam Manager </a></b>&nbsp;&nbsp;
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
                                                &nbsp;&nbsp;<b><a class="bar2" href="index.php?r=tuserexam/index"> Exams for users </a></b>&nbsp;&nbsp;
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
                            Exam Settings</h2>
                        <p>
                            <?php echo $form->errorSummary($model, ''); ?>
                            <table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="50%">
                                <tr class="rowtwo" valign="top">
                                    <td width="20%">
                                        User:
                                    </td>
                                    <td width="80%">
                                        <?php echo $form->dropDownList($model, 'id_user', $arr_data_id_user, array( 'class' => 'inp')); ?>


                                    </td>
                                </tr>

                                <tr class="rowone" valign="top">
                                    <td width="20%">
                                        Exams:
                                    </td>
                                    <td width="80%">
                                        <?php echo $form->dropDownList($model, 'id_exam', $arr_data_id_exam, array( 'class' => 'inp')); ?>
                                       </td>
                                </tr>


                            </table>

            <p class="center">
                <input type="submit" value=" Insert " name="bsubmit" class="btn">
                <input type="submit" value=" Insert and create new question " name="bsubmit2" class="btn">

            </p>

                    </td>

                </tr>
            </table>

<?php $this->endWidget(); ?>