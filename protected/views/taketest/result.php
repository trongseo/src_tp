    <table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
    <td class="box_area">
    <p>
        <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/toolbar-background.gif) repeat-x">
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table class="rowtable2" cellpadding="5" cellspacing="1" border="0" width="100%">
                    <tr class="rowtwo" valign="top">
                        <td colspan="1">
                            &nbsp;
                        </td>
                    </tr>
                    <tr class="rowone" valign="top">
                        <td>
                            <h1>
                                <?php echo $models['subject'] ?></h1>
                            <p>
                                <strong>Date:</strong> <?php echo  date("F d, Y h:i:s A",strtotime($models['start_time'])) ?></p>
                            <p>
                                <strong>Full name</strong> <?php echo $models['full_name'] ?><br>
                                <strong>Working time:</strong> <?php echo $work_time ?><br>
                                <strong>Result:</strong> <?php echo $score ?><br>
                            </p>
                                <strong>Thank you</strong><br>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    </td>
    </tr>
    </table>
