@extends('layouts.iframe')

@section('style')
    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="/css/webuploader.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="/css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <link href="/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">
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
    {{--<script type="text/javascript" src="/js/webuploader.js"></script>--}}
@stop

@section('container')
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>文件列表</h5><a href="javascript:parent.history.go(-1)"><h5>返回上一级</h5></a>
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
                            <th colspan="6">
                                共计{{ $all->allGroup }}组,涉及{{ $all->countsSum }}账户,{{ substr($all->allMoney,0,strlen($all->allMoney)-4) }}万元
                            </th>
                            <tr>
                                <th style="width: 100px">序号</th>
                                <th>组数</th>
                                <th>账号数</th>
                                <th>总金额(万)</th>
                                <th>涉及账号</th>
                                <th>查看汇聚</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($all->allCounts as $key => $value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->group }}</td>
                                    <td>{{ $value->count }}</td>
                                    <td>{{ substr($value->Money,0,strlen($value->Money)-4) }}</td>
                                    <td>

                                        @if(count($value->accounts)>3)
                                            @for($i = 0; $i<3;$i++)
                                                {{ $value->accounts[$i] }},
                                            @endfor
                                            ...
                                        @else
                                            @foreach($value->accounts as $v)
                                                {{ $v }},
                                            @endforeach
                                        @endif
                                        {{--@foreach($value->accounts as $item)--}}
                                            {{--{{ $item }}--}}
                                        {{--@endforeach--}}
                                    </td>
                                    <td>
                                        <a href="{{ url('/admin/showTree/'.$filename.'/'.$key) }}" target="_blank">查看</a>
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
    {{--<div class="wrapper wrapper-content animated fadeIn">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-12">--}}
    {{--<div class="ibox float-e-margins">--}}
    {{--<div class="ibox-title">--}}
    {{--<h5>文件上传</h5>--}}
    {{--<div class="ibox-tools">--}}
    {{--<a class="collapse-link">--}}
    {{--<i class="fa fa-chevron-up"></i>--}}
    {{--</a>--}}
    {{--<a class="dropdown-toggle" data-toggle="dropdown" href="form_file_upload.html#">--}}
    {{--<i class="fa fa-wrench"></i>--}}
    {{--</a>--}}
    {{--<ul class="dropdown-menu dropdown-user">--}}
    {{--<li><a href="form_file_upload.html#">选项1</a>--}}
    {{--</li>--}}
    {{--<li><a href="form_file_upload.html#">选项2</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<a class="close-link">--}}
    {{--<i class="fa fa-times"></i>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="ibox-content">--}}
    {{--<form id="my-awesome-dropzone" class="dropzone" target="_self" action="/admin/tree" method="post" enctype="multipart/form-data">--}}
    {{--{{ csrf_field() }}--}}
    {{--<div class="dropzone-previews"></div>--}}
    {{--<button type="submit" class="btn btn-primary pull-right">提交</button>--}}
    {{--</form>--}}
    {{--<div>--}}
    {{--<div class="m"><small>DropzoneJS是一个开源库，提供拖放文件上传与图片预览：<a href="https://github.com/enyo/dropzone" target="_blank">https://github.com/enyo/dropzone</a></small>，百度前端团队提供的<a href="http://fex.baidu.com/webuploader/" target="_blank">Web Uploader</a>也是一个非常不错的选择，值得一试！</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="page-container ">--}}
    {{--<form id="upload-form" action="/admin/tree" method="post" enctype="multipart/form-data" target="_self">--}}
    {{--<button class="btn btn-success btn-cons m-b-10" type="file"><i class="fa fa-cloud-upload"></i> <span class="bold">Upload</span>--}}
    {{--</button>--}}
    {{--{{ csrf_field() }}--}}
    {{--<input class="btn btn-success btn-cons m-b-10" type="file" id="upload" name="upload" required/> <br />--}}
    {{--<input type="submit" value="Upload" />--}}
    {{--</form>--}}

    {{--</div>--}}
    <script src="/js/jquery.min.js?v=2.1.4"></script>
    <script src="/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/js/content.min.js?v=1.0.0"></script>
    <script src="/js/plugins/dropzone/dropzone.js"></script>
    <script>
        $(document).ready(function(){Dropzone.options={paramName:"image",autoProcessQueue:false,uploadMultiple:true,parallelUploads:100,maxFiles:100,init:function(){var myDropzone=this;this.element.querySelector("button[type=submit]").addEventListener("click",function(e){e.preventDefault();e.stopPropagation();myDropzone.processQueue()});this.on("sendingmultiple",function(){});this.on("successmultiple",function(files,response){});this.on("errormultiple",function(files,response){})}}});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
@endsection
