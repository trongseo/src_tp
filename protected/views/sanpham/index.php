<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm','method' => 'get', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blank</h1>
            </div>

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
                                    <tr class="rowtwo">
                                        <td>

                                        </td>
                                        <td  valign="bottom" >
                                            <label style="display: inline">Question subject:</label>    <?php echo $form->dropDownList($model, 'id', $data_bussiness, array( 'options' => array($m_question_type_id=>array('selected'=>true)),'tabindex' => 4,'style'=>'display: inline;width:200px', 'class' => 'inp form-control')); ?>

                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <input class="btn btn-primary" type="submit" name="bsetfilter" value=" Set filter ">
                                <input class="btn btn-primary" type="button" onclick="javascript:window.location='index.php?r=questions'" name="bremovefilter" value=" Remove filter "></form>
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

                            <table class="rowtable2 table table-striped table-bordered table-hover dataTable no-footer" cellpadding="5" cellspacing="1" border="0" width="100%">
                                <tr valign="top">
                                    <td class="rowhdr1" title="Select or de-select all rows" width="22">
                                        <input type="checkbox" name="toggleAll" onclick="toggleCBs(this);">
                                    </td>
                                    <td class="rowhdr1" valign="top" title="Question ID (click to sort by)">
                                        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=id&direction=ASC">
                                            ID</a>

                                    </td>
                                    <td class="rowhdr1" valign="top" title="Subject (click to sort by)">
                                        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=subject&direction=ASC">
                                            Subject</a>
                                    </td>
                                    <td class="rowhdr1" valign="top" title="Question">
                                        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=content&direction=ASC">
                                            Question</a>

                                    </td>
                                    <td class="rowhdr1" valign="top" title="LEVEL">

                                        LEVEL

                                    </td>
                                    <td class="rowhdr1" valign="top" title="Point value (click to sort by)">
                                        <a class="rowhdr" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=questions/index&pageno=1&order=second&direction=ASC">
                                            Seconds</a>
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
                                        $classRow = "rowone ";
                                        if ($numberRow % 2) { $classRow= "rowtwo"; } else {  $classRow = "rowone";}
                                        ?>

                                        <tr id="tr_<?php echo $numberRow ?>" class="<?php echo $classRow ?>" onmouseover="rollTR('tr_<?php echo $numberRow ?>',1);" onmouseout="rollTR('tr_<?php echo $numberRow ?>',0);">
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
                                                <!--                    --><?php //echo $value['content'] ?>
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

            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>


<?php $this->endWidget(); ?>
