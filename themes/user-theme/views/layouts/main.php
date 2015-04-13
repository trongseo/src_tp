<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi, en" />
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/shared/style.css" rel="stylesheet" type="text/css">
    <script language="javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/shared/shared.js" type="text/javascript"></script>
</head>
<body bgcolor="#ffffff">
<p>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
        <td width="200">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.gif" width="200" height="40">
        </td>
        <td width="100%" align="right" class="top_section">
            <a href="index.php?r=changeinfo/index"><?php echo  Yii::app()->session['full_name']; ?>/ <?php echo  Yii::app()->session['email']; ?></a>


        </td>
    </tr>
    <tr>
        <td colspan="2" height="1" width="100%" style="background-color: #E7E9EF;">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="border-left: 1px solid #E0E7F6;
                        border-right: 1px solid #CFD6E3; border-bottom: 1px solid #CFD6E3;">
                <tr style="background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/mainbar-background.gif) repeat-x;">
                    <td width="1" style="background: #ffffff">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="32">
                    </td>


                    <td align="center">
                        <b><a class="bar1" href="index.php?r=chooseexams/index">Take a quiz</a></b>
                    </td>
                    <td align="center">
                        <b><a class="bar1" href="index.php?r=myreports/index">Reports Manager</a></b>
                    </td>
                    <td align="center">
                        <b><a class="bar1" href="index.php?r=changepass/index">Change Password</a></b>
                    </td>
                    <td align="center">
                        <b><a class="bar1" href="index.php?r=login/signout">Sign Out</a></b>
                    </td>
                    <td width="1" style="background: #ffffff">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="32">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2" height="7" width="100%">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="7">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr valign="top">
                    <td width="1%">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="2" height="1">
                    </td>
                    <td>
                        <?php echo $content ?>
                    </td>
                    <td width="1%">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="2" height="1">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2" height="9" width="100%">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="9">
        </td>
    </tr>
    <tr>
        <td colspan="2" height="1" width="100%" style="background-color: #E7E9EF;">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="1">
        </td>
    </tr>
    <tr>
        <td colspan="2" height="2" width="100%">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/1x1.gif" width="1" height="2">
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right">

        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2004-2014Starboard Asia Ltd<br />
            All Rights Reserved.
        </td>
    </tr>
</table>
</body>
</html>

