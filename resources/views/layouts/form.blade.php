<!DOCTYPE html>
<!-- 也是后台布局，不要菜单，不要边栏，不要头部 -->
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield("title", "后台首页")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{ asset("pages/ico/60.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("pages/ico/76.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset("pages/ico/120.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset("pages/ico/152.png") }}">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset("assets/plugins/pace/pace-theme-flash.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/boostrapv3/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/font-awesome/css/font-awesome.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/jquery-scrollbar/jquery.scrollbar.css") }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset("assets/plugins/bootstrap-select2/select2.css") }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset("assets/plugins/switchery/css/switchery.min.css") }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset("assets/plugins/nvd3/nv.d3.min.css") }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset("assets/plugins/mapplic/css/mapplic.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/rickshaw/rickshaw.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/plugins/bootstrap-datepicker/css/datepicker3.css") }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset("assets/plugins/jquery-metrojs/MetroJs.css") }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset("pages/css/pages-icons.css") }}" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="{{ asset("pages/css/pages.css") }}" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
    <link href="{{ asset("assets/plugins/codrops-dialogFx/dialog.ie.css") }}" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
</head>
<body class="fixed-header dashboard">

<!-- START 内容区 -->
@yield('container')


<!-- BEGIN VENDOR JS -->
<script src="{{ asset("assets/plugins/pace/pace.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery/jquery-1.11.1.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/modernizr.custom.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery-ui/jquery-ui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/boostrapv3/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery/jquery-easy.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery-unveil/jquery.unveil.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery-bez/jquery.bez.min.js") }}"></script>
<script src="{{ asset("assets/plugins/jquery-ios-list/jquery.ioslist.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery-actual/jquery.actual.min.js") }}"></script>
<script src="{{ asset("assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/plugins/bootstrap-select2/select2.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/plugins/classie/classie.js") }}"></script>
<script src="{{ asset("assets/plugins/switchery/js/switchery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/lib/d3.v3.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/nv.d3.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/src/utils.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/src/tooltip.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/src/interactiveLayer.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/src/models/axis.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/src/models/line.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/nvd3/src/models/lineWithFocusChart.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/mapplic/js/hammer.js") }}"></script>
<script src="{{ asset("assets/plugins/mapplic/js/jquery.mousewheel.js") }}"></script>
<script src="{{ asset("assets/plugins/mapplic/js/mapplic.js") }}"></script>
<script src="{{ asset("assets/plugins/rickshaw/rickshaw.min.js") }}"></script>
<script src="{{ asset("assets/plugins/jquery-metrojs/MetroJs.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/jquery-sparkline/jquery.sparkline.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/skycons/skycons.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js") }}" type="text/javascript"></script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{ asset("pages/js/pages.min.js") }}"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="{{ asset("assets/js/dashboard.js") }}" type="text/javascript"></script>
<script src="{{ asset("assets/js/scripts.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->
<script src="{{ asset('layer/layer.js') }}"></script>
</body>
</html>