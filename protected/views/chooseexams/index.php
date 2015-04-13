<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm','enableAjaxValidation' => false, 'enableClientValidation' => false, 'htmlOptions' => array('name' => 'frm'))); ?>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="box_area">
<p>

<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: #CFD6E3;">
    <tr>
        <td height="1">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
    </tr>
</table>
<h2>
    Take a test</h2>
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
                    This page is designed for creating and editing tests.</p>
                <p>
                <table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="100%">
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-new.gif" title="Create a new test">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To create a new test, press this button on the tools panel at the top.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-gear.gif" title="Test settings">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To change test settings, press this button to the right of the applicable test.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-groups.gif" title="Assign to groups">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To assign test(s) to certain groups of users, press a button to the right of the
                            test or select all necessary tests using the flag marks on the left and press this
                            button on the tools panel at the top.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-edit.gif" title="Edit questions">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To edit test questions, press a button to the right of the test.
                        </td>
                    </tr>
                    <tr>
                        <td class="rowtwo" width="20">
                            <img width="20" height="20" border="0" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-cross.gif" title="Delete this test">
                        </td>
                        <td class="rowone" width="100%" colspan="4">
                            To delete test(s), press a button to the right of the test or select all necessary
                            tests using the flag marks on the left and press this button on the tools panel
                            at the top.
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
<form name="testsForm" class="iactive" method="post">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td>
<table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="100%">
<tr valign="top">
    <td class="rowhdr1" valign="top" title="Test ID (click to sort by)">
        <a class="rowhdr" href="test-manager.html?action=&limitto=50&pageno=1&order=0&direction=DESC">
            ID</a><br>
        <nobr><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc.gif" width=10 height=8><a href="test-manager.html?action=&limitto=50&pageno=1&order=0&direction=DESC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>
    </td>
    <td class="rowhdr1" valign="top" title="Exam name (click to sort by)">
        <a class="rowhdr" href="test-manager.html?action=&limitto=50&pageno=1&order=2&direction=">
            Test Name</a><br>
        <nobr><a href="test-manager.html?action=&limitto=50&pageno=1&order=2&direction="><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc-inactive.gif" width=10 height=8 border=0></a><a href=<?php echo Yii::app()->theme->baseUrl; ?>/"test-manager.html?action=&limitto=50&pageno=1&order=2&direction=DESC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>
    </td>
    <td class="rowhdr1" valign="top" title="Subject (click to sort by)">
        <a class="rowhdr" href="test-manager.html?action=&limitto=50&pageno=1&order=3&direction=">
            Finish Time (Minutes)</a><br>
        <nobr><a href="test-manager.html?action=&limitto=50&pageno=1&order=3&direction="><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-asc-inactive.gif" width=10 height=8 border=0></a><a href="test-manager.html?action=&limitto=50&pageno=1&order=3&direction=DESC"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/button-order-desc-inactive.gif" width=10 height=8 border=0></a></nobr>
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
            <td align="center" width="100">
                <?php echo $numberRow ?>
            </td>
            <td width="70%">
                <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=taketest/dotest&id_exam=<?php echo $value['id'] ?>"">
                    <?php echo $value['subject'] ?>
                </a><br>
                <?php echo $value['note'] ?>
            </td>
            <td width="20%" align="center">
                <?php echo $value["finish_time"] ?>
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