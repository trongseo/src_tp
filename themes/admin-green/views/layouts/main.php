<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>
    <meta charset="UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="themes/admin-green/views/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="themes/admin-green/views/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->

    <!-- Theme style -->
    <link href="themes/admin-green/views/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
<a href="index.html" class="logo">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    Admin
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->
<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<div class="navbar-right">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->

<!-- Tasks: style can be found in dropdown.less -->

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span>Admin <i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->


        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="index.php?r=myadmin/changepassword" class="btn btn-default btn-flat">Đổi mật khẩu</a>
            </div>
            <div class="pull-right">
                <a href="index.php?r=login/Signout" class="btn btn-default btn-flat">Thoát</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas" style="min-height: 2013px;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?r=myadmin/sanphamlist">
                        <i class="fa fa-th"></i> <span>Quản lý sản phẩm</span>
                        <small class="badge pull-right bg-green"></small>
                    </a>
                </li>
                <li>
                    <a href="index.php?r=myadminvideo/videolist">
                        <i class="fa fa-th"></i> <span>Tài liệu kỹ thuật</span>
                        <small class="badge pull-right bg-green"></small>
                    </a>
                </li>
                <li>
                    <a href="index.php?r=ajaxadmin/colorupdatelist">
                        <i class="fa fa-th"></i> <span>colorupdatelist</span>
                        <small class="badge pull-right bg-green"></small>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/morris.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                        <li><a href="pages/charts/flot.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                        <li><a href="pages/charts/inline.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> General</a></li>
                        <li><a href="pages/UI/icons.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                        <li><a href="pages/UI/buttons.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                        <li><a href="pages/UI/sliders.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                        <li><a href="pages/UI/timeline.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                        <li><a href="pages/forms/advanced.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                        <li><a href="pages/forms/editors.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                        <li><a href="pages/tables/data.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <small class="badge pull-right bg-red">3</small>
                    </a>
                </li>
                <li>
                    <a href="pages/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <small class="badge pull-right bg-yellow">12</small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/examples/invoice.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                        <li><a href="pages/examples/login.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Login</a></li>
                        <li><a href="pages/examples/register.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Register</a></li>
                        <li><a href="pages/examples/lockscreen.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                        <li><a href="pages/examples/404.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                        <li><a href="pages/examples/500.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                        <li><a href="pages/examples/blank.html" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->


<!-- Main content -->
    <?php echo $content ?><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- add new calendar event modal -->





<!-- jQuery 2.0.2 -->

<!-- jQuery UI 1.10.3 -->
<script src="themes/admin-green/views/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="themes/admin-green/views/js/bootstrap.min.js" type="text/javascript"></script>


<!-- AdminLTE App -->
<script src="themes/admin-green/views/js/AdminLTE/app.js" type="text/javascript"></script>



</body>
</html>

