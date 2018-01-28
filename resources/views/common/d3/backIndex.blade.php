<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>主页</title>
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('css/bootstrap.min.css?v=3.3.5') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css?v=4.0.0') }}" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/img/profile_small.jpg" /></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                            </li>
                            <li><a class="J_menuItem" href="profile.html">个人资料</a>
                            </li>
                            <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                            </li>
                            <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">H+
                    </div>
                </li>
                {{--<li>--}}
                {{--<a href="#">--}}
                {{--<i class="fa fa-wrench"></i>--}}
                {{--<span class="nav-label">系统设置</span>--}}
                {{--<span class="fa arrow"></span>--}}
                {{--</a>--}}
                {{--<ul class="nav nav-second-level">--}}
                {{--<li>--}}
                {{--<a class="J_menuItem" href="{{ route('users.index') }}" data-index="0">用户管理</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a class="J_menuItem" href="{{ route('roles.index') }}" data-index="0">角色管理</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a class="J_menuItem" href="{{ route('domains.index') }}" data-index="0">区域管理</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a class="J_menuItem" href="{{ route('permissions.index') }}" data-index="0">权限管理</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a class="J_menuItem" href="{{ url('admin/roles/assign') }}" data-index="0">角色分配</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a class="J_menuItem" href="{{ url('admin/permissions/assign') }}" data-index="0">权限分配</a>--}}
                {{--</li>--}}
                {{--</ul>--}}

                {{--</li>--}}
                <li class="active">
                    <a href="#">
                        <i class="fa fa-picture-o"></i>
                        <span class="nav-label">文件管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{ url('/admin/tree') }}" data-index="0">文件列表图形</a>
                        </li>
                        {{--<li>--}}
                        {{--<a class="J_menuItem" href="{{ url('/admin/upload') }}" data-index="0">文件上传</a>--}}
                        {{--</li>--}}
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
<!--左侧导航结束-->

    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('common.admin.header')
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="{{ url('admin/tree') }}" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        @include('common.admin.footer')
    </div>
    <!--右侧部分结束-->

    <!--右侧边栏开始-->
@include('common.admin.right-sidebar')
<!--右侧边栏结束-->

    <!--mini聊天窗口开始-->
    {{--@include('common.admin.chat')--}}
</div>
<script src="{{ asset('js/jquery.min.js?v=2.1.4') }}"></script>
<script src="{{ asset('js/bootstrap.min.js?v=3.3.5') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/plugins/layer/layer.min.js') }}"></script>
<script src="{{ asset('js/hplus.min.js?v=4.0.0') }}"></script>
<script src="{{ asset('js/contabs.min.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
</body>

</html>