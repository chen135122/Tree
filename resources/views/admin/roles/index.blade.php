@extends('layouts.iframe')


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
                                                    <li>
                                                        <label><input type="checkbox" data-field="0" value="0" checked="checked">#</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="fixed-table-container" style="padding-bottom: 0px;">
                                        {{-- 数据渲染 --}}
                                        <div class="fixed-table-body">
                                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                                <thead>
                                                <tr>
                                                    <th>操作</th>
                                                    <th>ID</th>
                                                    <th>名字</th>
                                                    <th>描述</th>
                                                    <th>创建</th>
                                                    <th>更新</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($roles as $role)
                                                        <tr class="gradeX">
                                                            <td>
                                                                <a href="{{ route('roles.edit', ['role' => $role]) }}" class="btn btn-outline btn-success"> <i class="fa fa-paste"></i> </a>
                                                                <a type="button" class="btn btn-outline btn-danger">删除</a>
                                                            </td>
                                                            <td>{{ $role->id }}</td>
                                                            <td>{{ $role->name }}</td>
                                                            <td>{{ $role->description }}</td>
                                                            <td class="center">{{ $role->created_at }}</td>
                                                            <td class="center">{{ $role->updated_at }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
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
    <script src="{{ asset('js/plugins/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".dataTables-example").dataTable();
        });
    </script>
@endsection