<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm','method' => 'post', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
    <style>
        .rowtable3 p{display: inline}
    </style>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td class="box_area">
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
                                            <tr style="background: url(/dos_webacb/themes/admin-green/images/barsmall-1-background.gif) repeat-x;">
                                                <td width="1" style="background: #ffffff">
                                                    <img width="1" height="24" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                                                </td>
                                                <td align="center">
                                                    &nbsp;&nbsp;<b>Report Manager</b>&nbsp;&nbsp;
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
                                <img width="24" height="24" border="0" src="/dos_webacb/themes/admin-green/images/dialog-info-small.gif"></a><img width="5" height="1" src="images/1x1.gif"><a target="_blank" title="Help" href="guide/guide.php?language=en&amp;page=test_manager.test_manager" id="helpbar_button"><img width="24" height="24" border="0" src="/dos_webacb/themes/admin-green/images/dialog-help-small.gif"></a>
                        </td>
                        <td width="3">
                            <img width="3" height="1" src="/dos_webacb/themes/admin-green/images/1x1.gif">
                        </td>
                    </tr>
                    </tbody></table>
                <p>

                <table cellpadding="0" cellspacing="5" border="0" width="100%">
                    <tr>
                        <td>
                            <table class="rowtable3" cellpadding="5" cellspacing="1" border="0" width="100%">
                                <tr class="rowtwo" valign="top">
                                    <td id="vtimer" align="center" >
                                        <?php echo $oneRow['full_name']; ?>
                                    </td>
                                    <td width="80%" id="testname" align="center" title="Tên bài kiểm">
                                        <?php echo $oneRow["subject"] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="rowone" colspan="2">
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <?php
                                            $ordNum = 1;
                                            $id_question = 0;




                                            ?>
                                            <?php foreach($dataTest as $value):?>
                                                <tr valign="top">
                                                    <td width="10" style="padding-top: 8px;">
                                                        <b><?php echo $ordNum++; ?>.&nbsp;</b>
                                                    </td>
                                                    <td width="100%">
                                                        <?php
                                                        $dataAnswer = TakeTest::model()->getAnswerFromQuestion($value["id_question"]);

                                                        ?>
                                                        <table cellpadding="5" cellspacing="3" border="0" width="100%">
                                                            <tr>
                                                                <td class="question">
                                                                    <p>
                                                                        <strong><?php echo $value['content']; ?><br>
                                                                        </strong>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <?php foreach($dataAnswer as $value1):?>
                                                            <table cellpadding="5" cellspacing="3" border="0" width="100%">
                                                                <tr>
                                                                    <td width="20">
                                                                        <?php
                                                                        $id_answer = $this->getAnswer($value["id_question"]);
                                                                        $valTrue = '';
                                                                        $lableTrue = '';
                                                                        if( $id_answer==$value1['id_answer'])
                                                                        {
                                                                            $valTrue = 'checked';
                                                                        }
                                                                        if( $value['id_answer']==$value1['id_answer'])
                                                                        {
                                                                            $lableTrue = 'color:blue';
                                                                        }
                                                                        ?>
                                                                        <input type="radio" disabled="disabled" name="id_question<?php echo $value1['id_question']; ?>"  <?php echo $valTrue; ?>  id="id_answer<?php echo $value1['id_answer']; ?>" value="<?php echo $value1['id_answer']; ?>">
                                                                    </td>
                                                                    <td class="answer" width="100%">
                                                                        <label style="<?php echo $lableTrue; ?>" for="id_answer<?php echo $value1['id_answer']; ?>" >
                                                                            <?php echo CHtml::encode( $value1['content']); ?> </label>
                                                                    </td>
                                                                </tr>
                                                            </table>

                                                        <?php endforeach?>
                                                    </td>
                                                </tr>
                                            <?php endforeach?>

                                            <tr>
                                                <td class="rowtwo" colspan="2">

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>
            </td>
            <td width="1%">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="2" height="1">
            </td>
        </tr>
    </table>
<?php $this->endWidget(); ?>