<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"D:\devTool\phpStudy\WWW\DrugSystem\public/../application/index\view\index\indexuser.html";i:1592195506;s:77:"D:\devTool\phpStudy\WWW\DrugSystem\application\index\view\common\topuser.html";i:1592725117;s:78:"D:\devTool\phpStudy\WWW\DrugSystem\application\index\view\common\leftuser.html";i:1592727939;}*/ ?>
<!DOCTYPE html>
<html>

<body>
    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>药物管理系统</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--Basic Styles-->
    <link href="http://localhost.drug/static/index/css/bootstrap.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/font-awesome.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/weather-icons.css" rel="stylesheet" />
    <!--Beyond styles-->
    <link id="beyond-link" href="css/beyond.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost.drug/static/index/css/demo.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/typicons.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/animate.css" rel="stylesheet" />
</head>

<body>
    <!-- 头部 -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="http://localhost.drug/static/index/images/logo.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings -->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="http://localhost.drug/static/<?php echo \think\Request::instance()->session('image'); ?>" />
                                    </div>
                                    <section>
                                        <h2>
                                            <span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span>
                                        </h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>David Stevenson</a></li>
                                    <li class="dropdown-footer">
                                        <a href="<?php echo url('Login/logout'); ?>">
                                            退出登录
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="<?php echo url('user/userinfo',array('id'=>\think\Request::instance()->session('id'))); ?>">
                                            修改个人信息
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /头部 -->
    <!--Basic Scripts-->
    <script src="http://localhost.drug/static/index/js/bootstrap.js"></script>
    <script src="http://localhost.drug/static/index/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="js/beyond.js"></script>
</body>

</html> <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>ThinkPHP</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--Basic Styles-->
    <link href="http://localhost.drug/static/index/css/bootstrap.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/font-awesome.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/weather-icons.css" rel="stylesheet" />

    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost.drug/static/index/css/beyond.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost.drug/static/index/css/demo.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/typicons.css" rel="stylesheet" />
    <link href="http://localhost.drug/static/index/css/animate.css" rel="stylesheet" />
</head>

<body>
    <div class="main-container container-fluid">
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">
                        Search Reports, Charts, Emails or Notifications
                    </div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">药品</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/index/user/druginquirylist.html">
                                    <span class="menu-text"> 药品查询 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/index/index/indexuser.html">
                                    <span class="menu-text"> 成员简介 </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
        </div>
    </div>
    <!--Basic Scripts-->
    <script src="http://localhost.drug/static/index/js/jquery_002.js"></script>
    <script src="http://localhost.drug/static/index/js/bootstrap.js"></script>
    <script src="http://localhost.drug/static/index/js/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://localhost.drug/static/index/js/beyond.js"></script>
</body>

</html>
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li class="active">控制面板</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->

        <!-- Page Body -->
        <div class="page-body">
            <div style="text-align: center; line-height: 1000%; font-size: 24px;">
                <h1>药物管理系统</h1>
                <h2>小组成员：17052246余易达</h2>
                <h2>17052247张景廉</h2>
                <h2>17052244叶家明</h2>
                <h2>17052236许志豪</h2>
                <h2>17052240杨婷婷</h2>
                <h2>指导老师：何秀</h2>
            </div>
        </div>
    </div>
    <!-- /Page Body -->

    <!-- /Page Content -->
</body>

</html>