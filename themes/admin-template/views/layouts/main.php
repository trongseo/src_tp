<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="themes/admin-template/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="themes/admin-template/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="themes/admin-template/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="themes/admin-template/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .subtask {
            padding-left:10px;
        }
        .subtask1 {
            padding-left:40px;
        }
        div.mainbody {
            background-color: white;
            border: 1px  #333;
            color: black;
            font-family: Arial,Helvetica,sans-serif;
            font-size: 1.1em;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            width: 1100px;
        }
        .subcenter {
            width: 50%;
        }

        body,html {
            height: 98.3%;
        }
    </style>
</head>

<body bgcolor="#ffffff">
<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html"> Admin</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

    <li class="dropdown" style="width: 80px">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">

        </a>
        <ul class="dropdown-menu dropdown-user">

        </ul>
        <!-- /.dropdown-user -->
    </li>
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li style="padding-left: 2px">
                <a href="javascript:void(0)"><i class=""></i><b> Danh sách liên hệ</b></a>
            </li>
            <li  class="active" style="padding-left: 8px">
                <a href="index.html"><i class="fa fa-angle-right"></i> Danh sách liên hệ</a>
            </li>
            <li   style="padding-left: 8px">
                <a href="index.html"><i class="fa fa-angle-right"></i> Danh sách liên hệ</a>
            </li>
            <li   style="padding-left: 8px">
                <a href="index.html"><i class="fa fa-angle-right"></i> Danh sách liên hệ</a>
            </li>
            <li   style="padding-left: 8px">
                <a href="index.html"><i class="fa fa-angle-right"></i> Danh sách liên hệ</a>
            </li>
            <li   style="padding-left: 8px">
                <a href="index.html"><i class="fa fa-angle-right"></i> Danh sách liên hệ</a>
            </li>
            <li   style="padding-left: 8px">
                <a href="index.html"><i class="fa fa-angle-right"></i> Danh sách liên hệ</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<?php echo $content ?>

<!-- /#page-wrapper -->

</div>

<script src="themes/admin-template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="themes/admin-template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="themes/admin-template/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="themes/admin-template/js/sb-admin-2.js"></script>
<script src="themes/admin-template/shared/shared.js"></script>



<!-- Custom Theme JavaScript -->
<script src="themes/admin-template/dist/js/sb-admin-2.js"></script>

<script>

    $(document).ready(function () {


    });

</script>

</body></html>
