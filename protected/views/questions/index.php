<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm','method' => 'get', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="box_area">
<p>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
        <td>
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="3">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="3" height="1">
                    </td>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-left: 1px solid #E0E7F6;
                                                                            border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;">
                            <tr>
                                <td colspan="3" height="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
                                </td>
                            </tr>
                            <tr style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/barsmall-1-background.gif) repeat-x;">
                                <td width="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="24">
                                </td>
                                <td align="center">
                                    &nbsp;&nbsp;<b>Question Bank</b>&nbsp;&nbsp;
                                </td>
                                <td width="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="24">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="5">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="5" height="1">
                    </td>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-left: 1px solid #E0E7F6;
                                                                            border-top: 1px solid #E0E7F6; border-right: 1px solid #CFD6E3;">
                            <tr>
                                <td colspan="3" height="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
                                </td>
                            </tr>
                            <tr style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/barsmall-0-background.gif) repeat-x;">
                                <td width="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="24">
                                </td>
                                <td align="center">
                                    &nbsp;&nbsp;<b><a class="bar2" href="index.php?r=Subjects">Subjects</a></b>&nbsp;&nbsp;
                                </td>
                                <td width="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="24">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="1" style="background: #ffffff">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="3">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="3" height="1">
                    </td>
                </tr>
            </table>
        </td>
        <td width="53" align="right">
            <a id="infobar_button" href="javascript:ShowInfoBar(true);" title="Show/hide hints bar">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/dialog-info-small.gif" width="24" height="24" border="0"></a><img
                src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="5" height="1"><a id="helpbar_button" href="guide/guide.php?language=en&page=question_bank.question_bank"
                                                                                                       title="Help" target="_blank"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/dialog-help-small.gif" width="24" height="24"
                                                                                                                                         border="0"></a>
        </td>
        <td width="3">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="3" height="1">
        </td>
    </tr>
</table>
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: #CFD6E3;">
    <tr>
        <td height="1">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
    </tr>
</table>
<h2>
    Question Bank</h2>
<div id="infobar" style="display: none;">
    <table cellpadding="0" cellspacing="0" border="0" width="97%" align="center" style="border: 1px solid #8097D1;
                                                        background-color: #F3F6FF;">
        <tr>
            <td width="32" valign="top" style="padding: 5px;">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/dialog-info.gif" width="32" height="32">
            </td>
            <td width="100%" valign="middle" style="padding: 5px;">
                <a href="javascript:ShowInfoBar(false);" title="Hide hints bar">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-cross-infobar.gif" align="right" width="20" height="20" border="0"></a><p>
                    This page is designed for creating and editing a bank of questions.</p>
                <p>
                <table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="100%">
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-new.gif" title="Create a new question">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To create a new question, press this button on the tools panel at the top.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-stats.gif" title="Show statistics (for selected records)">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To view statistics for a particular question(s), press a button to the right of
                            the question or select all necessary questions using the flag marks on the left
                            and press this button on the tools panel at the top.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-edit.gif" title="Edit this question">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To edit a question, press a button to the right of the question.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-cross.gif" title="Delete this question">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To delete question(s), press a button to the right of the question or select all
                            necessary questions using the flag marks on the left and press this button on the
                            tools panel at the top.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-first.gif" border="0" title="Go back to first page">
                        </td>
                        <td class="rowtwo" width="20">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-prev.gif" border="0" title="Go back one page">
                        </td>
                        <td class="rowtwo" width="20">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-next.gif" border="0" title="Go forward one page">
                        </td>
                        <td class="rowtwo" width="20">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-last.gif" border="0" title="Go forward to last page">
                        </td>
                        <td class="rowone" width="100%">
                            Use these buttons to transfer between pages.
                        </td>
                    </tr>
                </table>
                </p>
            </td>
        </tr>
    </table>
</div>
<p>
<table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="">
    <tr valign="top">
        <td class="rowhdr2" colspan="2">
            <a class="rowhdr2" href="javascript:void(0)" onclick="javascript:toggleSection('div_filter_questionbank')">
                Set a filter (click to show/hide)
        </td>
    </tr>
    <tr valign="top">
        <td class="rowone" colspan="2">
            <div id="div_filter_questionbank" style="display: block">
                <form name="filterForm" method="post" action="questionbank.html?action=filter">
                    <table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="100%">
                        <tr class="rowtwo" valign="top">
                            <td>
                                Question subject:
                            </td>
                            <td>
                                <?php echo $form->dropDownList($model, 'id', $data_bussiness, array( 'options' => array($m_question_type_id=>array('selected'=>true)),'tabindex' => 4, 'class' => 'inp')); ?>

                            </td>
                        </tr>
                    </table>
                    <br>
                    <input class="btn" type="submit" name="bsetfilter" value=" Set filter ">
                    <input class="btn" type="button" onclick="javascript:window.location='index.php?r=questions'" name="bremovefilter" value=" Remove filter "></form>
            </div>
        </td>
    </tr>
</table>
</p>
<p>

<form name="qbankForm" class="iactive" method="post">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
    <td>
        <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/toolbar-background.gif) repeat-x">
            <tr valign="center">
                <td width="2">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/toolbar-left.gif" width="2" height="32">
                </td>
                <td width="32">
                    <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/insert">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-new-big.gif" border="0" title="Create a new question"></a>
                </td>
                <td width="3">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/toolbar-separator.gif" width="3" height="32" border="0">
                </td>
                <td width="3">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/toolbar-separator.gif" width="3" height="32" border="0">
                </td>
                <td width="32">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-cross-big.gif" border="0" title="Delete questions (for selected records)"
                         style="cursor: hand;" onclick="f=document.qbankForm;if (confirm('Are you sure want to delete selected questions?')) { f.action='<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/delete&all=0';f.submit();}">
                </td>
                <td width="70%">
                    &nbsp;
                </td>

                <td style="text-align: right;padding-right: 5px">

                    <?php

                    $this->widget('CLinkPager', array(
                    'currentPage'=> $items['pages']->getCurrentPage(),
                    'itemCount'=>$items['itemCount'],
                    'pageSize'=>$items['pageSize'],
                    'maxButtonCount'=>5,
                    //'nextPageLabel'=>'My text >',
                    'header'=>'',
                    'htmlOptions'=>array('class'=>'yiiPager'),
                    ));
                    ?>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
<td>

<table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="100%">
<tr valign="top">
    <td class="rowhdr1" title="Select or de-select all rows" width="22">
        <input type="checkbox" name="toggleAll" onclick="toggleCBs(this);">
    </td>
    <td class="rowhdr1" valign="top" title="Question ID (click to sort by)">
        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=id&direction=ASC">
            ID</a><br>
        <nobr><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc.gif" width=10 height=8>
            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=id&direction=ASC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>
    </td>
    <td class="rowhdr1" valign="top" title="Subject (click to sort by)">
        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=subject&direction=ASC">
            Subject</a><br>
        <nobr><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=subject&direction=DESC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc-inactive.gif" width=10 height=8 border=0></a>
               <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=subject&direction=ASC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>
    </td>
    <td class="rowhdr1" valign="top" title="Question">
        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=content&direction=ASC">
        Question</a><br>
        <nobr><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=content&direction=DESC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc-inactive.gif" width=10 height=8 border=0></a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=content&direction=ASC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>

    </td>
    <td class="rowhdr1" valign="top" title="LEVEL">

            LEVEL

    </td>
    <td class="rowhdr1" valign="top" title="Point value (click to sort by)">
        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=second&direction=ASC">
            Seconds</a><br>
        <nobr><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=second&direction=DESC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc-inactive.gif" width=10 height=8 border=0></a>
            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=second&direction=ASC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>
    </td>
    <td class="rowhdr1" colspan="2">
        Action
    </td>
</tr>
    <?php  $numberRow = 0;

    ?>


    <?php if ($items['models']): ?>
        <?php foreach($items['models'] as $value):?>
    <?php  $numberRow ++; ?>
            <?php
            $classRow = "rowone";
            if ($numberRow % 2) { $classRow= "rowtwo"; } else {  $classRow = "rowone";}
            ?>

            <tr id="tr_<?php echo $numberRow ?>" class="<?php echo $classRow ?>" onmouseover="rollTR(0,1);" onmouseout="rollTR(0,0);">
                <td align="center" width="22">
                    <input id="cb_<?php echo $value['id'] ?>" type="checkbox" name="box_questions[]" value="<?php echo $value['id'] ?>" onclick="toggleCB(this);">
                </td>
                <td align="right">
                    <?php echo $value['id'] ?>
                </td>
                <td>
                    <?php echo $value['name'] ?>
                </td>
                <td>
                    <?php echo $value['content'] ?>
                </td>
                <td>
                    <?php
                    if ($value['id_level']=="1")
                        echo "easy";
                        else
                            if ($value['id_level']=="2")
                                echo "normal";
                                else
                                echo "hard";
                    ?>
                    <?php echo $value['id_level']=="1"; ?>
                </td>
                <td align="right">
                    <?php echo $value['second'] ?>
                </td>
                <td align="center" width="22">
                    <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/edit&id=<?php echo $value['id'] ?>">
                        <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-edit.gif" title="Edit this question"></a>
                </td>
                <td align="center" width="22">
                    <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/delete&id=<?php echo $value['id'] ?>"
                       onclick="return confirmMessage(this, 'Are you sure want to delete this question?')">
                        <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-cross.gif" title="Delete this question"></a>
                </td>
            </tr>


        <?php endforeach?>
    <?php endif?>


</table>



   </td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<?php $this->endWidget(); ?>
