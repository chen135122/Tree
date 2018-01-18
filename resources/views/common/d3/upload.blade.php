@extends('layouts.iframe')

@section('style')
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="/css/webuploader.css">
    <style>
        .file {
            position: relative;
            display: inline-block;
            background: #D0EEFF;
            border: 1px solid #99D3F5;
            border-radius: 4px;
            padding: 4px 12px;
            overflow: hidden;
            color: #1E88C7;
            text-decoration: none;
            text-indent: 0;
            line-height: 20px;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
        }
        .file:hover {
            background: #AADFFD;
            border-color: #78C3F3;
            color: #004974;
            text-decoration: none;
        }
    </style>
    <!--引入JS-->
    <script type="text/javascript" src="/js/webuploader.js"></script>
@stop

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
            <input  type="file" id="upload" name="upload" required/> <br />
            <input class="btn btn-success btn-cons m-b-10" type="submit" value="Upload" />
        </form>

    </div>
    {{--<script>--}}
        {{--var uploader = WebUploader.create({--}}

            {{--// swf文件路径--}}
            {{--swf: BASE_URL + '/common/Uploader.swf',--}}

            {{--// 文件接收服务端。--}}
            {{--server: 'http://webuploader.duapp.com/server/fileupload.php',--}}

            {{--// 选择文件的按钮。可选。--}}
            {{--// 内部根据当前运行是创建，可能是input元素，也可能是flash.--}}
            {{--pick: '#picker',--}}

            {{--// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！--}}
            {{--resize: false--}}
        {{--});--}}
    {{--</script>--}}
@endsection
