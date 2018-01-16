@extends('layouts.form')


@section('container')
    <div class="page-container ">
        <!-- START HEADER -->

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
                                        <div class="panel-title">角色编辑
                                        </div>
                                    </div>
                                    <div class="panel-body">

                                        @if (count($errors))
                                            <div class="alert alert-warning" role="alert">
                                                <button class="close" data-dismiss="alert"></button>
                                                <strong>提示: </strong> {{ $errors->first() }}
                                            </div>
                                        @endif

                                        <form action="{{ route('roles.update', ['role' => $role]) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="form-group">
                                                <label for="position" class="col-sm-3 control-label">角色名字</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="name" placeholder="角色名字" value="{{ $role->name }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">权限列表</label>
                                                <div class="col-sm-9">
                                                    @foreach ($permissions as $permission)
                                                        <div class="checkbox check-success checkbox-circle" style="display: inline-block">
                                                            <input type="checkbox" name="permission_id[]"
                                                                   value="{{ $permission->id }}"
                                                                   id="{{ md5($permission->name) }}"
                                                                   {{ $role->hasPermissionTo($permission->name)?'checked' : '' }}
                                                            >
                                                            <label for="{{ md5($permission->name) }}">{{ $permission->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">

                                                </div>
                                                <div class="col-sm-9">
                                                    <button class="btn btn-success" type="submit">修改</button>
                                                </div>
                                            </div>
                                        </form>

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