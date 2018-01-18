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
                                                <a href="{{ route('roles.create') }}" class="btn btn-outline btn-default" title="新增">
                                                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        {{-- 要选择显示的列 --}}
                                        <div class="columns columns-right btn-group pull-right">
                                            <div class="keep-open btn-group" title="列">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th icon-th"></i><span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">
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
                                            <table class="layui-hide" id="data_table">

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

    <script type="text/html" id="operate">
        <!-- 这里的 checked 的状态只是演示 -->
        <button data-url="{{ url('admin/roles') }}/@{{d.id}}/edit" class="layui-btn layui-btn-xs edit_btn" ><i class="layui-icon"></i></button>
        <button class="layui-btn layui-btn-xs layui-btn-danger" data-id="@{{d.id}}"><i class="layui-icon"></i></button>
    </script>
@endsection


@section('script')
    <script src="{{ asset('layui/layui.js') }}"></script>
    <script>
        layui.use('table', function(){
            var table = layui.table;

            // 显示的列表数据
            table.render({
                elem: '#data_table'
                ,url:'{{ url('api/roles') }}'
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
                    ,{field:'operate', title:'操作', width:110, templet: '#operate', unresize: true,fixed: 'right'}
                ]]
                ,page: true
            });

        });
    </script>
    <script>
        // 选择字段显示列表
        $('.field_checkbox').change(function(){
            var url = '{{ url('admin/fields/toggle') }}';
            var data = {id:$(this).val()};

            $.post(url, data, function(res){
                layer.msg(res.msg);
            });
        });

        // 编辑弹出新层
        $(document).on('click', '.edit_btn', function() {
            var url = $(this).data('url');
            //iframe层
            console.log(11);
            layer.open({
                type: 2,
                title: '编辑',
                shadeClose: true,
                shade: 0.8,
                area: ['90%', '90%'],
                content: url //iframe的url
            });
        });
    </script>
@endsection