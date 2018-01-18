@extends('layouts.iframe')


@section('style')
    <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}">
@endsection
@section('container')
    <div class="wrapper wrapper-content animated fadeInRight">
        <!-- Panel Other -->
        <div class="ibox float-e-margins">

            <div class="ibox-title">
                <h5>
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('roles.index') }}">角色列表</a>
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
                                    <div class="fixed-table-toolbar" style="height: 50px;">

                                        {{-- 新增操作 --}}
                                        <div class="bars pull-left">
                                            <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                                                <button id="add_btn" data-url="{{ route('roles.create') }}" class="btn btn-outline btn-default" title="新增">
                                                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>

                                        {{-- 要选择显示的列 --}}

                                        <div class="columns columns-right btn-group pull-right">
                                            <div class="keep-open btn-group" title="列">
                                                <button type="button" class="btn btn-default" id="show_side_btn"><i class="glyphicon glyphicon-th icon-th"></i><span class="caret"></span></button>
                                                <ul style="display: none;top:0px;" id="side_menu" class="dropdown-menu">
                                                    @foreach ($fields as $field)
                                                        <li>
                                                            <label>
                                                                <input type="checkbox"
                                                                       data-field="{{ $field['id'] }}"
                                                                       value="{{ $field['id'] }}"
                                                                       class="field_checkbox"
                                                                       {{ $field['checked'] ? 'checked' : '' }}
                                                                >
                                                                {{ $field['title'] }}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        {{-- 数据渲染 --}}
                                        <div class="fixed-table-body">
                                            <table class="layui-hide" id="data_table" lay-filter="data_table" lay-id="data_table">

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
        <button class="layui-btn layui-btn-xs" lay-event="edit"><i class="layui-icon"></i></button>
        <button class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i class="layui-icon"></i></button>
    </script>
@endsection


@section('script')
    <script src="{{ asset('layui/layui.js') }}"></script>
    <script>
        var api_roles = '{{ url('api/roles') }}';
        layui.use('table', function(){
            var table = layui.table;

            // 显示的列表数据
            table.render({
                elem: '#data_table'
                ,url: api_roles
                ,limit: 2
                ,width: 'full'
                ,height: 'full'
                ,cols: [[
                    {field:'id', width:80, title: 'ID', sort: true, fixed: 'left'}
                    @foreach ($fields as $key => $field)
                        @if ($field['checked'])
                            ,{field:'{{ $field['field_name'] }}', width:180, title: '{{ $field['title'] }}', sort:true}
                        @endif
                    @endforeach
                    ,{field:'operate', title:'  ', width:110, toolbar: '#tooBar', unresize: true,fixed: 'right'}
                ]]
                ,page: true
            });

            // 监听工具条事件
            var roles_url = "{{ url('admin/roles') }}/";
            table.on('tool(data_table)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
                var data = obj.data; //获得当前行数据
                var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
                var tr = obj.tr; //获得当前行 tr 的DOM对象


                var url = roles_url + data.id;
                // 删除
                if(layEvent === 'del'){
                    $.post(url, {_method:'DELETE'}, function(res){
                        layer.msg(res.msg);
                        if (res.code == 200) {
                            obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                        }
                    });

                } else if(layEvent === 'edit'){ //编辑
                    //do something
                    url += '/edit';

                    layer.open({
                        type: 2,
                        title: '编辑',
                        shadeClose: true,
                        shade: 0.8,
                        area: ['90%', '90%'],
                        content: url,
                        cancel: function(index, layero){
                            layer.close(index);

                            reloadTable(table);
                            return true;
                        }
                    });
                }
            });

            // 新增
            $('#add_btn').click(function(){
                var url = $(this).data('url');
                layer.open({
                    type: 2,
                    title: '添加',
                    shadeClose: true,
                    shade: 0.8,
                    area: ['90%', '90%'],
                    content: url,
                    cancel: function(index, layero){
                        layer.close(index);

                        reloadTable(table);
                        return true;
                    }
                });
            });


        });

        // 表格重载
        function reloadTable(table)
        {
            table.reload('data_table', {
                url: api_roles
                ,where: {} //设定异步数据接口的额外参数
            });
        }


        // 更新显示列
        $('.field_checkbox').change(function(){
            var url = '{{ url('admin/fields/toggle') }}';
            var data = {id:$(this).val()};

            $.post(url, data, function(res){
                layer.msg(res.msg);
            });
        })



        // 菜单
        $('#show_side_btn').click(function(){
            console.log($('#show_me'));
            $('#side_menu').show();
        });
        // 关闭菜单
        $('#side_menu').mouseleave(function(){
            $(this).hide();
        });
    </script>
@endsection