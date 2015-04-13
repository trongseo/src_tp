<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm','method' => 'post', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>
<style>
   .rowtable3 p{display: inline}
</style>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td class="box_area">
<script language="JavaScript" type="text/javascript"><!--
    var dStopTime = new Date();
    dStopTime.setHours(dStopTime.getHours(), dStopTime.getMinutes() + 0, dStopTime.getSeconds() + <?php echo $remain_second; ?>);
    var clockID = 0;
    function UpdateClock() {

        if (clockID) {
            clearTimeout(clockID);
            clockID = 0;
        }
        var dNow = new Date();
        if (dNow < dStopTime) {
            dNow.setHours(dStopTime.getHours() - dNow.getHours(), dStopTime.getMinutes() - dNow.getMinutes(), dStopTime.getSeconds() - dNow.getSeconds());
            strContent = "&nbsp;<b>" + setLeadingZero(dNow.getHours()) + ":" + setLeadingZero(dNow.getMinutes()) + ":" + setLeadingZero(dNow.getSeconds()) + "</b>&nbsp;";
            if (dNow.getMinutes() < 1) strContent = "<font color=#ff0000>" + strContent + "</font>";
            document.getElementById("vtimer").innerHTML = strContent;
            clockID = setTimeout("UpdateClock()", 500);
        } else {
            clearTimeout(clockID);
            clockID = 0;
            document.getElementById("vtimer").innerHTML = "<b>00:00:00</b>";
           $( "input[name='bsubmit']").click();

        }
    }
    function setLeadingZero(i) {
        return (i < 10) ? "0" + i : i;
    }
    clockID = setTimeout("UpdateClock()", 500);



    //--></script>
    <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <script>
        $(function() {

           // setTimeout("SaveDataAjax()", 15000);

        });
function SaveDataAjax()
{
 //   $.post('<?php echo Yii::app()->baseUrl; ?>/index.php?r=taketest/dotest&ajaxsave=1', $('#frm').serialize());
    //setTimeout("SaveDataAjax()", 15000);
}

    </script>
<p>

<table cellpadding="0" cellspacing="5" border="0" width="100%">
<tr>
<td>
<table class="rowtable3" cellpadding="5" cellspacing="1" border="0" width="100%">
<tr class="rowtwo" valign="top">
    <td id="vtimer" align="center" title="Thời gian làm bài">
        Không tính thời gian
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
                       if( $id_answer==$value1['id_answer'])
                       {
                           $valTrue = 'checked';
                       }

                        ?>
                        <input type="radio" name="id_question<?php echo $value1['id_question']; ?>"  <?php echo $valTrue; ?>  id="id_answer<?php echo $value1['id_answer']; ?>" value="<?php echo $value1['id_answer']; ?>">
                    </td>
                    <td class="answer" width="100%">
                     <label for="id_answer<?php echo $value1['id_answer']; ?>">   <?php

                         $text = $value1['content'];

                         echo  CHtml::encode($text);
                         ?></label>
                    </td>
                </tr>
            </table>

        <?php endforeach?>
    </td>
</tr>
    <?php endforeach?>

    <tr>
        <td class="rowtwo" colspan="2">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tbody><tr valign="top">
                    <td width="100%">
                        <input class="btn" type="submit" name="bsubmit" value=" Submit ">
                    </td>
                    <td>

                    </td>
                </tr>
                </tbody></table>
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
