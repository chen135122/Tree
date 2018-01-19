@extends('layouts.iframe')

@section('container')
    <div class="wrapper wrapper-content fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{ route('users.index') }}">用户列表</a>
                                </li>
                                <li>
                                    <span>新增用户</span>
                                </li>
                                <li>
                                    <a class="fa fa-refresh" href="javascript:location.href =location.href;"> 刷新</a>
                                </li>
                            </ul>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        @if (count($errors))
                            <div class="alert alert-info alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{ $errors->first() }}
                            </div>
                        @endif

                            <form method="post" action="{{ route('users.store') }}" class="form-horizontal" >
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <!--    -->
                                    <label for="name" class="col-sm-2 control-label">
                                        <span style="color:red;">*</span>
                                        用户名
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                                        <div id="tipinfo" style="color:red;" class="tipinfo">
                                        </div>
                                    </div>
                                    <!--    -->
                                </div>

                                <div class="form-group">
                                    <!--    -->
                                    <label for="description" class="col-sm-2 control-label">
                                        邮箱
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email" value="{{ old('email') }}">
                                    </div>
                                    <!--    -->
                                </div>

                                <div class="form-group">
                                    <!--    -->
                                    <label for="description" class="col-sm-2 control-label">
                                        密码
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="text" value="{{ old('password', '123456') }}">
                                    </div>
                                    <!--    -->
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">

                                    </label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-w-m btn-info">创建</button>
                                        <button type="reset" class="btn btn-w-m btn-info">重置</button>
                                    </div>
                                </div>


                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection