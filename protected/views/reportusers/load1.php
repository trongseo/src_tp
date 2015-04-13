<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <link rel="stylesheet" type="text/css" href="/quiz/assets/68ed8254/pager.css" />
    <title>Report Users</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi, en" />
</head>
<body>

<table border="0" style="background-color:#e7e9ef;">
    <tr>
        <td style="text-align: center" >
                ID
        </td>
        <td style="text-align: center">
                Date
        </td>
        <td style="text-align: center">
                Full name
        </td>
        <td style="text-align: center">
                Test name
        </td>
        <td style="text-align: center">
                Request Time
        </td>
        <td style="text-align: center">
                Finish Time
        </td>
        <td style="text-align: center">
                Score
        </td>
    </tr>
    <?php  $numberRow = 0;

    ?>
    <?php if ($items): ?>
        <?php foreach($items as $value):?>
            <?php  $numberRow ++; ?>
            <?php
            $classRow = "rowone";
            if ($numberRow % 2) { $classRow= "rowtwo"; } else {  $classRow = "rowone";}
            ?>
            <tr >
                <td>
                    <?php echo $value['id'] ?>
                </td>
                <td>
                    <?php echo $value['start_time'] ?>
                </td>
                <td>
                    <?php echo $value["full_name"] ?>
                </td>
                <td style="width:200px">
                    <?php echo $value["subject"] ?>
                </td>
                <td align="right">
                    <?php echo $value["finish_time"] ?>
                </td>
                <td align="right">
                    <?php echo $value["remaining_time"] ?>
                </td>
                <td align="right">
                    <?php echo $value["score"] ?>
                </td>
            </tr>
        <?php endforeach?>
    <?php endif?>
</table>


</body>
</html>