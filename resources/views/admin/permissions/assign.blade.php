@extends('layouts.iframe')


@section('style')
    <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}">
    <style>
        td[data-field=name] {
            cursor: pointer !important;
        }
        .clickActive {
            background: #999;
        }
        .layui-table-view {
            display: inline-block;
        }
    </style>
@endsection
@section('container')
    <div class="wrapper wrapper-content animated fadeInRight">
        <!-- Panel Other -->
        <div class="ibox float-e-margins">

            <div class="ibox-title">
                <h5>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('permissions.index') }}">权限列表</a>
                        </li>
                        <li>
                            <a class="fa fa-refresh" href="javascript:location.href =location.href;"> 刷新</a>
                        </li>
                    </ul>
                </h5>
            </div>

            <div class="ibox-content">

                @if (session()->has('status'))
                    <div class="alert alert-info alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        {{ session('status') }}
                    </div>
                @endif


                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                <div class="bootstrap-table">
                                    <div class="input-group" style="float: right;">
                                        <input type="text" placeholder="请输入查询关键字,ID | 名字 | 描述" class="input-sm form-control" id="search_input" value="">
                                        <span class="input-group-btn">
                                            <button type="button" id="search_btn" class="btn btn-sm btn-primary"> 搜索</button>
                                        </span>
                                    </div>

                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        {{-- 数据渲染 --}}
                                        <div class="fixed-table-body">
                                            <table class="layui-hide" id="data_table">

                                            </table>

                                            <table class="layui-hide" id="users_table">

                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>

                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/html" id="tooBar">
        <span data-id="@{{ d.id }}">
            @{{d.name}}
        </span>
    </script>
@endsection


@section('script')
    <script src="{{ asset('layui/layui.js') }}"></script>
    <script>

        // 有关表格重新渲染的都要写在里面
        var api_permissions = '{{ url('api/roles') }}';
        layui.use('table', function(){
            var table = layui.table;

            // 显示的列表数据
            table.render({
                elem: '#data_table'
                ,url: api_permissions
                ,limit: 20
                ,width: '220'
                ,height: '500'
                ,cols: [[
                    {field:'name', title:'角色', width:220, toolbar: '#tooBar'}
                ]]
                ,page: true
                ,done: function(){
                    // 绑定单击事件
                    $('td[data-field=name]').click(function(){
                        // 背景色
                        $(this).parent().addClass('clickActive').siblings().removeClass('clickActive');
                        alert($(this).find('span').data('id'));
                    });

                }
            });

            // 用户数据的表格
            table.render({
                elem: '#users_table'
                ,url: api_permissions
                ,limit: 20
                ,width: '220'
                ,height: '500'
                ,cols: [[
                    {field:'name', title:'角色', width:220}
                    ,{field:'name', title:'角色', width:220}
                ]]
                ,page: true
                ,done: function(){
                }
            });


            // 搜索
            $('#search_btn').click(function(){
                var _wd = $('#search_input').val();
                reloadTable(table, api_permissions, {wd:_wd});
            });
            // 回车搜索
            $('#search_input').keydown(function(e) {
                if (e.keyCode == 13) {
                    var _wd = $(this).val();
                    reloadTable(table, api_permissions, {wd:_wd});
                }
            });

        });




        // 表格重载
        function reloadTable(table, url, parameters)
        {
            url = url || '';
            parameters = parameters || {};

            // 获取当前页
            console.log(table);
            table.reload('data_table', {
                url: url
                ,where: parameters //设定异步数据接口的额外参数
            });
        }
    </script>
@endsection