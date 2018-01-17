<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--360浏览器优先以webkit内核解析-->
    <title>内容区</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{ asset('css/bootstrap.min.css?v=3.3.5') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css?v=4.4.0') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css?v=4.0.0') }}" rel="stylesheet">
    @yield('style')
</head>

<body class="gray-bg">


    @yield('container')


    <script src="{{ asset('js/jquery.min.js?v=2.1.4') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js?v=3.3.5') }}"></script>
    <script src="{{ asset('js/plugins/layer/layer.min.js') }}"></script>
    <script src="{{ asset('js/content.min.js') }}"></script>
    <script src="{{ asset('js/welcome.min.js') }}"></script>
    @yield('script')
</body>

</html>