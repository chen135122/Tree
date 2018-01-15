@extends('layouts.admin')


@section('container')
    <div class="page-container ">
        <!-- START HEADER -->
        @include('common.admin.top')
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content ">
                <!-- START JUMBOTRON -->
                <div class="jumbotron lg vertical center bg-white column-w4 vertical-bottom" data-pages="parallax">
                    <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20 full-height">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- START PANEL -->
                                <div class="panel panel-transparent">
                                    <div class="panel-heading">
                                        <div class="panel-title"><h2>角色管理</h2>
                                        </div>
                                        <div class="tools">
                                            <a class="collapse" href="javascript:;"></a>
                                            <a class="config" data-toggle="modal" href="#"></a>
                                            <a class="reload" href="javascript:;"></a>
                                            <a class="remove" href="javascript:;"></a>
                                        </div>
                                        <button id="add_role" class="btn btn-info btn-cons m-b-10" type="button"><i class="fs-14 pg-plus"></i><span class="bold">添加</span>
                                        </button>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-condensed" id="condensedTable">
                                                <thead>
                                                <tr>
                                                    <!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
                                                                        Comman Practice Followed
                                                                        -->
                                                    <th style="width:20%">角色名</th>
                                                    <th style="width:20%">创建时间</th>
                                                    <th style="width:20%">修改时间</th>
                                                    <th style="width:20%">操作</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($roles as $role)
                                                    <tr>
                                                        <td class="v-align-middle semi-bold">{{ $role->name }}</td>
                                                        <td class="v-align-middle semi-bold">{{ $role->created_at }}</td>
                                                        <td class="v-align-middle semi-bold">{{ $role->updated_at }}</td>
                                                        <td class="v-align-middle semi-bold">
                                                            <button data-url="{{ route('roles.edit', ['roles' => $role]) }}"  class="btn btn-primary edit_btn">编辑</button>
                                                            <button data-id="{{ $role->id }}" class="btn btn-danger delete_btn">删除</button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>


                                            <form method="post" id="delete_form">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- END PANEL -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <!-- START CONTAINER FLUID -->
            <!-- START CONTAINER FLUID -->
            <div class="container-fluid container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright &copy; 2014 </span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved. </span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
@endsection

@section('script')
    <script>
        var delete_url = "{{ route('roles.index') }}";
        $('.delete_btn').click(function(){
            var id = $(this).data('id');
            var url = delete_url + '/' + id;
            $('#delete_form').attr('action', url).submit();
        });

        // 编辑角色
        $('.edit_btn').on('click', function(){
            var url = $(this).data('url');

            layer.open({
                type: 2,
                title: '角色编辑',
                maxmin: true,
                shadeClose: true, //点击遮罩关闭层
                area : ['800px' , '520px'],
                content: url
            });
        });

        // 添加角色
        var add_url = "{{ route('roles.create') }}";
        $('#add_role').click(function(){
            layer.open({
                type: 2,
                title: '添加角色',
                maxmin: true,
                shadeClose: true, //点击遮罩关闭层
                area : ['800px' , '520px'],
                content: add_url
            });
        });

    </script>
@endsection