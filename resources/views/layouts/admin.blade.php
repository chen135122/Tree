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
    @include('common.admin.nav')
    <!--左侧导航结束-->

    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('common.admin.header')
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="index_v1.html?v=4.0" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
        @include('common.admin.footer')
    </div>
    <!--右侧部分结束-->

    <!--右侧边栏开始-->
    @include('common.admin.right-sidebar')
    <!--右侧边栏结束-->

    <!--mini聊天窗口开始-->
    @include('common.admin.chat')
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