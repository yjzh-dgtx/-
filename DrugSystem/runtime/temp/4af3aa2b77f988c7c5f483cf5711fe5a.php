<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"D:\devTool\phpStudy\WWW\DrugSystem\public/../application/index\view\admin\modify.html";i:1592193135;s:73:"D:\devTool\phpStudy\WWW\DrugSystem\application\index\view\common\top.html";i:1592192611;s:74:"D:\devTool\phpStudy\WWW\DrugSystem\application\index\view\common\left.html";i:1592193278;}*/ ?>
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
                    <a href="<?php echo url('Admin/modify',array('id'=>\think\Request::instance()->session('id'))); ?>">
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
              <span class="menu-text">管理人员</span>
              <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
              <li>
                <a href="/index/admin/listadmin.html">
                  <span class="menu-text"> 系统管理员列表 </span>
                  <i class="menu-expand"></i>
                </a>
              </li>
              <li>
                <a href="/index/admin/listmanager.html">
                  <span class="menu-text"> 库存管理员管理 </span>
                  <i class="menu-expand"></i>
                </a>
              </li>
              <li>
                <a href="/index/admin/listuser.html">
                  <span class="menu-text"> 用户管理 </span>
                  <i class="menu-expand"></i>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#" class="menu-dropdown">
              <i class="menu-icon fa fa-file-text"></i>
              <span class="menu-text">药品</span>
              <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
              <li>
                <a href="/index/admin/druglist.html">
                  <span class="menu-text"> 药品管理 </span>
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
                <a href="/index/index/index.html">
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
                <li><a href="/index/index/index.html">系统</a></li>
                <li>成员管理</a></li>
                <li class="active">修改成员</li>
            </ul>
        </div>
        <div class="page-body">
            <button type="button" tooltip="取消" class="btn btn-sm btn-azure btn-addon" onclick="history.go(-1);"> <i
                    class="fa fa-angle-left"></i>
                取消</button>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-blue">
                            <span class="widget-caption">修改成员</span>
                        </div>
                        <div class="widget-body">
                            <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="<?php echo url('admin/update'); ?>"
                                    enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="id" class="col-sm-2 control-label no-padding-right">ID</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="id" placeholder="" name="id" required=""
                                                type="text" value="<?php echo $result['id']; ?>" readonly="true">
                                        </div>
                                        <p class="help-block col-sm-4 red">&nbsp;</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-2 control-label no-padding-right">等级</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="type" placeholder="" name="type" required=""
                                                type="number" value="<?php echo $result['type']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-2 control-label no-padding-right">头像</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="image" placeholder="" name="image"
                                                required="" type="file" style="display:inline;">
                                            <img src="http://localhost.drug/static/<?php echo $result['image']; ?>" width="30" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="username"
                                            class="col-sm-2 control-label no-padding-right">用户名</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="username" placeholder="" name="username"
                                                required="" type="text" value="<?php echo $result['username']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-2 control-label no-padding-right">密码</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="password" placeholder="" name="password"
                                                required="" type="text" value="<?php echo $result['password']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="number" class="col-sm-2 control-label no-padding-right">电话</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="number" placeholder="" name="number"
                                                required="" type="text" value="<?php echo $result['number']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label no-padding-right">地址</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" id="address" placeholder="" name="address"
                                                required="" type="text" value="<?php echo $result['address']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">确认修改信息</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>