<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\devTool\phpStudy\WWW\DrugSystem\public/../application/index\view\manager\lis.html";i:1592724098;s:80:"D:\devTool\phpStudy\WWW\DrugSystem\application\index\view\common\topmanager.html";i:1592724198;s:81:"D:\devTool\phpStudy\WWW\DrugSystem\application\index\view\common\leftmanager.html";i:1592194933;}*/ ?>
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
                    <a href="<?php echo url('manager/managerinfo',array('id'=>\think\Request::instance()->session('id'))); ?>">
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

</html>
    <!DOCTYPE html>
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
                            <span class="menu-text">药品库存</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="/index/manager/lis.html">
                                    <span class="menu-text"> 库存查询 </span>
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
                                <a href="/index/index/indexmanager.html">
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
                <li><a href="/index/index/indexmanager.html">系统</a></li>
                <li class="active">库存管理</li>
            </ul>
        </div>
        <div class="page-body">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-body">
                            <div class="flip-scroll">
                                <table class="table table-bordered table-hover">
                                    <thead class="">
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">药品名称</th>
                                            <th class="text-center">图片</th>
                                            <th class="text-center">数量</th>
                                            <th class="text-center">属性</th>
                                            <th class="text-center">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): if( count($result)==0 ) : echo "" ;else: foreach($result as $key=>$vo): ?>
                                        <tr>
                                            <td align="center"><?php echo $vo['id']; ?></td>
                                            <td align="center"><?php echo $vo['drugname']; ?></td>
                                            <td align="center"><img src="http://localhost.drug/static/<?php echo $vo['image']; ?>" height="40" width="40" />
                                            </td>
                                            <td align="center"><?php echo $vo['num']; ?></td>
                                            <td align="center"><?php echo $vo['attribute']; ?></td>
                                            <td align="center">
                                                <a href="<?php echo url('manager/druginfo',array('id'=>$vo['id'])); ?>"
                                                    class="btn btn-primary btn-sm shiny">
                                                    <i class="fa fa-plus"></i> 入库管理
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>