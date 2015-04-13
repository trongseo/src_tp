<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr"><head><title> ACTIVATION USER QUIZ </title>
    <meta http-equiv="Content-Language" content="en-us">
    <meta content="text/html; charset=UTF-8" http-equiv=Content-Type>
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <link href="themes/admin-green/shared/style.css" rel=stylesheet type=text/css>
    <script language=javascript src="themes/admin-green/shared/shared.js" type="text/javascript"></script>
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green/shared/calendar/skins/aqua/theme.css" title="Aqua" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-blue.css" title="winter" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-blue2.css" title="blue" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-brown.css" title="summer" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-green.css" title="green" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-win2k-1.css" title="win2k-1" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-win2k-2.css" title="win2k-2" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-win2k-cold-1.css" title="win2k-cold-1" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-win2k-cold-2.css" title="win2k-cold-2" />
    <link rel="Stylesheet" type="text/css" media="all" href="themes/admin-green//shared/calendar/skins/calendar-system.css" title="system" />


    <script type="text/javascript" src="sthemes/admin-green//shared/calendar/calendar-helper.js"></script>
    <!-- import the Jalali Date Class script -->
    <script type="text/javascript" src="themes/admin-green//shared/calendar/jalali.js"></script>
    <!-- import the calendar script -->
    <script type="text/javascript" src="themes/admin-green//shared/calendar/calendar.js"></script>
    <!-- import the calendar script -->
    <script type="text/javascript" src="themes/admin-green//shared/calendar/calendar-setup.js"></script>
    <!-- import the language module -->
    <script type="text/javascript" src="themes/admin-green//shared/calendar/lang/calendar-en.js"></script>
</head>
<body bgcolor="#ffffff">
<?php $form = $this->beginWidget('CActiveForm', array('id' => 'frm', 'enableAjaxValidation' => true, 'enableClientValidation' => true, 'htmlOptions' => array('name' => 'frm'))); ?>

<p><table cellpadding=0 cellspacing=0 border=0 width="100%">
    <tr><td width=200><img src="themes/admin-green/images/logo.gif" width=200 height=40></td><td width="100%" align=center class=top_section>
           ACTIVATION USER QUIZ</td></tr>
    <tr><td colspan=2 height=1 width=100% style="background-color: #E7E9EF;"><img src="themes/admin-green/images/1x1.gif" width=1 height=1></td></tr>

    <tr><td colspan=2 height=7 width=100%><img src="themes/admin-green/images/1x1.gif" width=1 height=7></td></tr>
    <tr>
        <td colspan=2>

            <table cellpadding=0 cellspacing=0 border=0 width="100%">
                <tr vAlign=top><td width="1%"><img src="themes/admin-green/images/1x1.gif" width=2 height=1></td>
                    <td>

                        <table cellpadding=0 cellspacing=0 border=0 width="100%">
                            <tr>
                                <td class=box_area>
                                    <p></p>

                                    <table cellpadding=0 cellspacing=5 border=0 width="100%">
                                        <tr vAlign=top>
                                            <td width="35%" height="100%" class=signin1>
                                                <?php if ($result==0): ?>
                                                    <br>User does not exist.Please register new user.
                                                    <br><input class="btn" type="button"  onclick="javascript:window.location='index.php?r=login/index'" name="homepage" value=" Home Page ">
                                                <?php else:?>
                                                    <br>Your account has been activated successfully.
                                                    <br><input class="btn" type="button"  onclick="javascript:window.location='index.php?r=chooseexams/index'" name="taketest" value=" Take a test ">
                                                <?php endif; ?>
                                                </td>

                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="1%"><img src="themes/admin-green/images/1x1.gif" width=2 height=1></td>
                </tr>
             </table>
        </td>
    </tr>
<tr><td colspan=2 height=9 width=100%><img src="themes/admin-green/images/1x1.gif" width=1 height=9></td></tr>
<tr><td colspan=2 height=1 width=100% style="background-color: #E7E9EF;"><img src="themes/admin-green/images/1x1.gif" width=1 height=1></td></tr>
<tr><td colspan=2 height=2 width=100%><img src="themes/admin-green/images/1x1.gif" width=1 height=2></td></tr>
<tr><td colspan=2 align=center>Copyright &copy; 2004-2014Starboard Asia Ltd<br />
        All Rights Reserved.
    </td></tr>
</table>
<?php $this->endWidget(); ?>
</body>
</html>