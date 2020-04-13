<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>自己揍得CMS</title>
    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- 基本样式表 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- 自定义样式表 -->
    <link id="beyond-link" href="css/beyond.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- 页面加载样式容器 -->
<!--     <div class="loading-container">
<div class="loading-progress">
    <div class="rotator">
        <div class="rotator">
            <div class="rotator colored">
                <div class="rotator">
                    <div class="rotator colored">
                        <div class="rotator colored"></div>
                        <div class="rotator"></div>
                    </div>
                    <div class="rotator colored"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
        <div class="rotator"></div>
    </div>
    <div class="rotator"></div>
</div>
</div> -->
<!--  /结束 -->
<!-- 导航条 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- 导航条 logo -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="img/logo.png" alt="" />
                    </small>
                </a>
            </div>
            <!-- /导航条 logo -->
            <!-- 侧边栏收起按钮 -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /侧边栏收起按钮 -->
            <!-- 管理员和设置 -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="img/avatars/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>&nbsp;&nbsp;admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></h2>
                                </section>
                            </a>
                            <!-- 用户登录信息下拉菜单 -->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>admin</a></li>
                                <li class="email"><a>2776332953@qq.com</a></li>
                                <!-- 头像 -->
                                <li>
                                    <div class="avatar-area">
                                        <img src="img/avatars/adam-jansen.jpg" class="avatar">
                                        <span class="caption">换头像</span>
                                    </div>
                                </li>
                                <!-- /头像 -->
                                <li class="edit">
                                    <!-- <a href="profile.html" class="pull-left">Profile</a> -->
                                    <a href="#" class="pull-right">设置</a>
                                </li>
                                <!-- 主题选择 -->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="assets/css/skins/blue.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="assets/css/skins/azure.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="assets/css/skins/teal.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="assets/css/skins/green.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="assets/css/skins/orange.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="assets/css/skins/pink.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="assets/css/skins/darkred.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="assets/css/skins/purple.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="assets/css/skins/darkblue.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#585858;" rel="assets/css/skins/gray.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#474544;" rel="assets/css/skins/black.min.css"></a>
                                        </li>
                                        <li>
                                            <a class="colorpick-btn" href="#" style="background-color:#001940;" rel="assets/css/skins/deepblue.min.css"></a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/主题选择-->
                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        退出登录
                                    </a>
                                </li>
                            </ul>
                            <!-- /用户登录信息下拉菜单 -->
                        </li>
                </div>
            </div>
            <!-- /管理员和设置 -->
        </div>
    </div>
</div>
<!-- /导航条 -->
<!-- 主体容器 -->
<div class="main-container container-fluid">
    <!-- 页面容器 -->
    <div class="page-container">
        <!-- 侧边栏 -->
        <div class="page-sidebar" id="sidebar">
            <!-- 侧边栏头部 -->
            <div class="sidebar-header-wrapper">
                <input type="text" class="searchinput" />
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /侧边栏头部 -->
            <!-- 侧边栏菜单 -->
            <ul class="nav sidebar-menu">
                <!-- 控制面板 -->
                <li class="active">
                    <a href="{:url('admin/index/index','',false)}">
                        <i class="menu-icon glyphicon glyphicon-home"></i>
                        <span class="menu-text"> 控制面板 </span>
                    </a>
                </li>
                <!-- 系统配置 -->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-cogs"></i>
                        <span class="menu-text"> 系统配置 </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{:url('admin/conf/confList','',false)}">
                                <span class="menu-text"> 配置列表 </span>
                            </a>
                        </li>
                        <li>
                            <a href="elements.html">
                                <span class="menu-text"> 配置管理 </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Databoxes-->
                <li>
                    <a href="databoxes.html">
                        <i class="menu-icon glyphicon glyphicon-tasks"></i>
                        <span class="menu-text"> Data Boxes </span>
                    </a>
                </li>
                <!--Widgets-->
                <li>
                    <a href="widgets.html">
                        <i class="menu-icon fa fa-th"></i>
                        <span class="menu-text"> Widgets </span>
                    </a>
                </li>
                <!--UI Elements-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text"> Elements </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="elements.html">
                                <span class="menu-text">Basic Elements</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Icons
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="font-awesome.html">
                                        <i class="menu-icon fa fa-rocket"></i>
                                        <span class="menu-text">Font Awesome</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="glyph-icons.html">
                                        <i class="menu-icon glyphicon glyphicon-stats"></i>
                                        <span class="menu-text">Glyph Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="typicon.html">
                                        <i class="menu-icon typcn typcn-location-outline"></i>
                                        <span class="menu-text"> Typicons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="weather-icons.html">
                                        <i class="menu-icon wi-day-snow"></i>
                                        <span class="menu-text">Weather Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tabs.html">
                                <span class="menu-text">Tabs & Accordions</span>
                            </a>
                        </li>
                        <li>
                            <a href="alerts.html">
                                <span class="menu-text">Alerts & Tooltips</span>
                            </a>
                        </li>
                        <li>
                            <a href="modals.html">
                                <span class="menu-text">Modals & Wells</span>
                            </a>
                        </li>
                        <li>
                            <a href="buttons.html">
                                <span class="menu-text">Buttons</span>
                            </a>
                        </li>
                        <li>
                            <a href="nestable-list.html">
                                <span class="menu-text"> Nestable List</span>
                            </a>
                        </li>
                        <li>
                            <a href="treeview.html">
                                <span class="menu-text">Treeview</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Tables-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-table"></i>
                        <span class="menu-text"> Tables </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="tables-simple.html">
                                <span class="menu-text">Simple & Responsive</span>
                            </a>
                        </li>
                        <li>
                            <a href="tables-data.html">
                                <span class="menu-text">Data Tables</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Forms-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> Forms </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="form-layouts.html">
                                <span class="menu-text">Form Layouts</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-inputs.html">
                                <span class="menu-text">Form Inputs</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-pickers.html">
                                <span class="menu-text">Data Pickers</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-wizard.html">
                                <span class="menu-text">Wizard</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-validation.html">
                                <span class="menu-text">Validation</span>
                            </a>
                        </li>
                        <li>
                            <a href="form-editors.html">
                                <span class="menu-text">Editors</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Charts-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-bar-chart-o"></i>
                        <span class="menu-text"> Charts </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="flot.html">
                                <span class="menu-text">Flot Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="morris.html">
                                <span class="menu-text"> Morris Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="sparkline.html">
                                <span class="menu-text">Sparkline Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="easypiecharts.html">
                                <span class="menu-text">Easy Pie Charts</span>
                            </a>
                        </li>
                        <li>
                            <a href="chartjs.html">
                                <span class="menu-text"> ChartJS</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Profile-->
                <li>
                    <a href="profile.html">
                        <i class="menu-icon fa fa-picture-o"></i>
                        <span class="menu-text">Profile</span>
                    </a>
                </li>
                <!--Mail-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-envelope-o"></i>
                        <span class="menu-text"> Mail </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="inbox.html">
                                <span class="menu-text">Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="message-view.html">
                                <span class="menu-text">View Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="message-compose.html">
                                <span class="menu-text">Compose Message</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Calendar-->
                <li>
                    <a href="calendar.html">
                        <i class="menu-icon fa fa-calendar"></i>
                        <span class="menu-text">
                                Calendar
                            </span>
                    </a>
                </li>
                <!--Pages-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-paperclip"></i>
                        <span class="menu-text"> Pages </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="timeline.html">
                                <span class="menu-text">Timeline</span>
                            </a>
                        </li>
                        <li>
                            <a href="pricing.html">
                                <span class="menu-text">Pricing Tables</span>
                            </a>
                        </li>
                        <li>
                            <a href="invoice.html">
                                <span class="menu-text">Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="login.html">
                                <span class="menu-text">Login</span>
                            </a>
                        </li>
                        <li>
                            <a href="register.html">
                                <span class="menu-text">Register</span>
                            </a>
                        </li>
                        <li>
                            <a href="lock.html">
                                <span class="menu-text">Lock Screen</span>
                            </a>
                        </li>
                        <li>
                            <a href="typography.html">
                                <span class="menu-text"> Typography </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--More Pages-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon glyphicon glyphicon-link"></i>
                        <span class="menu-text">
                                More Pages
                            </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="error-404.html">
                                <span class="menu-text">Error 404</span>
                            </a>
                        </li>
                        <li>
                            <a href="error-500.html">
                                <span class="menu-text"> Error 500</span>
                            </a>
                        </li>
                        <li>
                            <a href="blank.html">
                                <span class="menu-text">Blank Page</span>
                            </a>
                        </li>
                        <li>
                            <a href="grid.html">
                                <span class="menu-text"> Grid</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-dropdown">
                                    <span class="menu-text">
                                        Multi Level Menu
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="menu-icon fa fa-camera"></i>
                                        <span class="menu-text">Level 3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="menu-dropdown">
                                        <i class="menu-icon fa fa-asterisk"></i>
                                        <span class="menu-text">
                                                Level 4
                                            </span>
                                        <i class="menu-expand"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon fa fa-bolt"></i>
                                                <span class="menu-text">Some Item</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="menu-icon fa fa-bug"></i>
                                                <span class="menu-text">Another Item</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--Right to Left-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-align-right"></i>
                        <span class="menu-text"> Right to Left </span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a>
                                <span class="menu-text">RTL</span>
                                <label class="pull-right margin-top-10">
                                    <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                    <span class="text"></span>
                                </label>
                            </a>
                        </li>
                        <li>
                            <a href="index-rtl-ar.html">
                                <span class="menu-text">Arabic Layout</span>
                            </a>
                        </li>
                        <li>
                            <a href="index-rtl-fa.html">
                                <span class="menu-text">Persian Layout</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /侧边栏菜单 -->
        </div>
        <!-- /侧边栏 -->
        <!-- 页面内容 -->
        <div class="page-content">
            <!-- 面包屑导航 -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="#">后台首页</a>
                    </li>
                    <li class="active">控制面板</li>
                </ul>
            </div>
            <!-- /面包屑导航 -->
            <!-- 页面主体 -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget flat radius-bordered">
                            <div class="widget-header bordered-bottom bordered-themeprimary">
                                <i class="widget-icon fa fa-text-width"></i>
                                <span class="widget-caption">自己改</span>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <!-- 替换内容 -->
                                    asdfasdf
                                    <!-- /替换内容 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- \row -->
            </div>
            <!-- /页面主体 -->
        </div>
        <!-- /页面内容 -->
    </div>
    <!-- /页面容器 -->
</div>
<!-- /主体容器 -->
<!-- 基本js -->
<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- 自定义js -->
<script src="js/beyond.min.js"></script>
</body>

</html>
