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
                                        <div class="panel-title"><h2>区域管理</h2>
                                        </div>
                                        <div class="tools">
                                            <a class="collapse" href="javascript:;"></a>
                                            <a class="config" data-toggle="modal" href="#"></a>
                                            <a class="reload" href="javascript:;"></a>
                                            <a class="remove" href="javascript:;"></a>
                                        </div>
                                        <a href="{{ route('guards.create') }}" class="btn btn-info btn-cons m-b-10" type="button"><i class="fs-14 pg-plus"></i><span class="bold">添加</span>
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-condensed" id="condensedTable">
                                                <thead>
                                                <tr>
                                                    <!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
                                                                        Comman Practice Followed
                                                                        -->
                                                    <th style="width:20%">区域名</th>
                                                    <th style="width:20%">区域的描述</th>
                                                    <th style="width:20%">创建时间</th>
                                                    <th style="width:20%">修改时间</th>
                                                    <th style="width:20%">操作</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($guards as $guard)
                                                    <tr>
                                                        <td class="v-align-middle semi-bold">{{ $guard->name }}</td>
                                                        <td class="v-align-middle">{{ $guard->description }}</td>
                                                        <td class="v-align-middle semi-bold">{{ $guard->created_at }}</td>
                                                        <td class="v-align-middle semi-bold">{{ $guard->updated_at }}</td>
                                                        <td class="v-align-middle semi-bold">
                                                            <a href="{{ route('guards.edit', ['guard' => $guard]) }}"  class="btn btn-primary ">编辑</a>
                                                            <button data-id="{{ $guard->id }}" class="btn btn-danger delete_btn">删除</button>
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
        var delete_url = "{{ route('guards.index') }}";
        $('.delete_btn').click(function(){
            var id = $(this).data('id');
            var url = delete_url + '/' + id;
            $('#delete_form').attr('action', url).submit();
        });
    </script>
@endsection