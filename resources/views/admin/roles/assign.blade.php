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
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="role_txt">
                                        <span class="input-group-btn">
                                            <button id="search_role" type="button" class="btn btn-primary">搜索角色
                                        </button>
                                        </span>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="user_txt">
                                        <span class="input-group-btn">
                                            <button id="search_user" type="button" class="btn btn-primary">搜索用户
                                        </button> </span>
                                    </div>


                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        {{-- 数据渲染 --}}
                                        <div class="fixed-table-body">
                                            <table class="layui-hide" id="data_table" lay-filter="roles_table">

                                            </table>

                                            <table class="layui-hide" id="users_table" lay-filter="users_table">

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
@endsection


@section('script')
    <script src="{{ asset('layui/layui.js') }}"></script>
    <script>

        // !!!!!!!!!!! role_id
        var _role_id = null;
        // 有关表格重新渲染的都要写在里面
        var api_roles = '{{ url('api/roles') }}';
        layui.use(['table', 'layer'], function(){
            var table = layui.table;

            // 显示的列表数据
            table.render({
                elem: '#data_table'
                ,url: api_roles
                ,limit: 20
                ,width: '220'
                ,height: '500'
                ,cols: [[
                    {field:'name', title:'角色', width:220, event:'selectRole'}
                ]]
                ,page: true
            });
            // 用户数据的表格
            var api_users = '{{ url('api/roles/assign/users') }}';
            table.render({
                elem: '#users_table'
                ,url: api_users
                ,where: {role_id:_role_id}
                ,width: 'full'
                ,height: '500'
                ,cols: [[
                    {type:'checkbox'}
                    ,{field:'id', width:180, title: 'ID', sort:true}
                    ,{field:'name', width:180, title: '用户', sort:true}
                ]]
            });


            // 选择角色的事件
            table.on('tool(roles_table)', function(obj){
                if (obj.event == 'selectRole') {
                    // 选中的颜色状态
                    obj.tr.addClass('clickActive').siblings().removeClass('clickActive');
                    // 用 role_id 重新渲染 users 表格
                    _role_id = obj.data.id;
                    reloadTable(table, 'users_table',api_users, {role_id:_role_id})
                }
            });
            // 选择用户的事件
            table.on('checkbox(users_table)', function(obj) {
                if (_role_id == null) {
                    layer.msg('请先选择一个角色', function(){});
                    reloadTable(table, 'users_table',api_users)
                    return true;
                }

                var users = table.checkStatus('users_table').data;
                // 请求后台修改
                var url = "{{ url('api/roles/assign') }}";
                var data = {'users':users,role_id:_role_id};
                console.log(data);
                $.post(url, data, function(res){
                    // 不做处理
                });
            });
            // 搜索选择数据
            $('#search_user').click(function(){
                var user = $('#user_txt').val();
                // 重载表格
                reloadTable(table, 'users_table', api_users, {wd:user});
            });
            // 搜索角色
            $('#search_role').click(function(){
                var role = $('#role_txt').val();
                // 重载表格
                reloadTable(table, 'data_table', api_roles, {wd:role});
                // 把选择的 _role_id 变为空
                _role_id = null;
            });
        });




        // 表格重载
        function reloadTable(table, table_id , url, parameters)
        {
            url = url || '';
            parameters = parameters || {};

            // 获取当前页
            table.reload(table_id, {
                url: url
                ,where: parameters //设定异步数据接口的额外参数
                ,done: function(res, curr, count){
                    console.log('数据表格重载完成');
                }
            });
        }
    </script>
@endsection