@extends('layouts.iframe')


@section('container')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>自定义响应式表格</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_basic.html#">选项1</a>
                            </li>
                            <li><a href="table_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>文件名</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file }}</td>
                                    <td><a href="{{ url('/admin/d3/'.$file) }}">查看</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="page-container ">
        <form id="upload-form" action="/admin/upload" method="post" enctype="multipart/form-data" >
            {{--<button class="btn btn-success btn-cons m-b-10" type="file"><i class="fa fa-cloud-upload"></i> <span class="bold">Upload</span>--}}
            {{--</button>--}}
            {{ csrf_field() }}
            <input class="btn btn-success btn-cons m-b-10" type="file" id="upload" name="upload" required/> <br />
            <input type="submit" value="Upload" />
        </form>

    </div>
@endsection
