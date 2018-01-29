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
    <link href="/css/style.min.css?v=4.0.0" rel="stylesheet">
    <link href="/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <base target="_blank">
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
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>文件列表</h5>
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
                                @foreach($data as $file)
                                    <tr>
                                        <td>{{ $file }}</td>
                                        <td>
                                            <a href="{{ url('/admin/d3/'.$file) }}" target="_self">
                                                <button class="btn btn-info btn-xs" type="button"><i
                                                            class="fa fa-paste"></i> 查看
                                                </button>
                                            </a>
                                            <a>
                                                <button class="btn btn-warning btn-xs  demo3" value="{{ $file }}" type="button"><i
                                                            class="fa fa-times">删除</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-sm-8">

                            </div>
                            @if($sum>0)
                                <div class="col-sm-4">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        <ul class="pagination">
                                            @if($page > 1)
                                                <li class="paginate_button previous" aria-controls="DataTables_Table_0"
                                                    tabindex="0" id="DataTables_Table_0_previous">
                                                    <a href="{{ url('admin/file/'.($page-1)) }}" target="_self">
                                                        上一页
                                                    </a>
                                                </li>
                                            @else
                                                <li class="paginate_button previous disabled" aria-controls="DataTables_Table_0"
                                                    tabindex="0" id="DataTables_Table_0_previous">
                                                    <a>
                                                        上一页
                                                    </a>
                                                </li>
                                            @endif
                                            @for($i=1;$i<=ceil($sum/5);$i++)
                                                @if($page == $i)
                                                    <li class="paginate_button active" aria-controls="DataTables_Table_0" tabindex="0">
                                                        <a>
                                                            {{ $i }}
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="paginate_button " aria-controls="DataTables_Table_0" tabindex="0">
                                                        <a href="{{ url('admin/file/'.$i) }}" target="_self">
                                                            {{ $i }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endfor
                                            @if($page < ceil($sum/5))
                                                <li class="paginate_button next" aria-controls="DataTables_Table_0" tabindex="0"
                                                    id="DataTables_Table_0_next">
                                                    <a href="{{ url('/admin/file/'.($page+1)) }}" target="_self">
                                                        下一页
                                                    </a>
                                                </li>
                                            @else
                                                <li class="paginate_button next disabled" aria-controls="DataTables_Table_0" tabindex="0"
                                                    id="DataTables_Table_0_next">
                                                    <a>
                                                        下一页
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>

                        {{--<div class="btn-group">--}}
                            {{--@if($page != 1)--}}
                                {{--<a href="{{ url('admin/file/'.($page-1)) }}" target="_self">--}}
                                    {{--<button type="button" class="btn btn-white">--}}
                                        {{--<i class="fa fa-chevron-left"></i>--}}
                                    {{--</button>--}}
                                {{--</a>--}}
                            {{--@endif--}}
                            {{--@for($i=1;$i<=ceil($sum/5);$i++)--}}
                                {{--@if($page == $i)--}}
                                    {{--<a>--}}
                                        {{--<button class="btn btn-white  active">{{ $i }}</button>--}}
                                    {{--</a>--}}
                                {{--@else--}}
                                    {{--<a href="{{ url('admin/file/'.$i) }}" target="_self">--}}
                                        {{--<button class="btn btn-white">{{ $i }}</button>--}}
                                    {{--</a>--}}
                                {{--@endif--}}

                            {{--@endfor--}}
                            {{--@if($page != ceil($sum/5))--}}
                                {{--<a href="{{ url('/admin/file/'.($page+1)) }}" target="_self">--}}
                                    {{--<button type="button" class="btn btn-white">--}}
                                        {{--<i class="fa fa-chevron-right"></i>--}}
                                    {{--</button>--}}
                                {{--</a>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>文件上传</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_file_upload.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_file_upload.html#">选项1</a>
                                </li>
                                <li><a href="form_file_upload.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form id="my-awesome-dropzone" class="dropzone" target="_self" action="/admin/upload"
                              method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="dropzone-previews"></div>
                            {{--<button type="submit" class="btn btn-primary pull-right">提交</button>--}}
                        </form>
                        {{--<div>--}}
                        {{--<div class="m"><small>DropzoneJS是一个开源库，提供拖放文件上传与图片预览：<a href="https://github.com/enyo/dropzone" target="_blank">https://github.com/enyo/dropzone</a></small>，百度前端团队提供的<a href="http://fex.baidu.com/webuploader/" target="_blank">Web Uploader</a>也是一个非常不错的选择，值得一试！</div>--}}
                        {{--</div>--}}
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
    <script src="/js/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            Dropzone.options = {
                paramName: "image",
                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 100,
                maxFiles: 100,
                init: function () {
                    var myDropzone = this;
                    this.element.querySelector("button[type=submit]").addEventListener("click", function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue()
                    });
                    this.on("sendingmultiple", function () {
                    });
                    this.on("successmultiple", function (files, response) {
                    });
                    this.on("errormultiple", function (files, response) {
                    })
                }
            }
        });
    </script>
    <script>
        $('.demo3').click(function () {
            var name = $(this).attr("value");
//            alert($(this).attr("value"));
            swal({
                title: "您确定要删除该文件吗",
                text: "删除后将无法恢复，请谨慎操作！",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "删除",
                closeOnConfirm: false
            }, function () {
//                alert(name);
                window.location.href="/admin/delete/"+name;
                swal("删除成功！", "您已经永久删除了该文件。", "success");
            });
        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

    {{--<script src="/js/jquery.min.js?v=2.1.4"></script>--}}
    {{--<script src="/js/bootstrap.min.js?v=3.3.5"></script>--}}
    {{--<script src="/js/plugins/jeditable/jquery.jeditable.js"></script>--}}
    {{--<script src="/js/plugins/dataTables/jquery.dataTables.js"></script>--}}
    {{--<script src="/js/plugins/dataTables/dataTables.bootstrap.js"></script>--}}
    {{--<script src="/js/content.min.js?v=1.0.0"></script>--}}
    {{--<script>--}}
    {{--$(document).ready(function(){$(".dataTables-example").dataTable();var oTable=$("#editable").dataTable();oTable.$("td").editable("../example_ajax.php",{"callback":function(sValue,y){var aPos=oTable.fnGetPosition(this);oTable.fnUpdate(sValue,aPos[0],aPos[1])},"submitdata":function(value,settings){return{"row_id":this.parentNode.getAttribute("id"),"column":oTable.fnGetPosition(this)[2]}},"width":"90%","height":"100%"})});function fnClickAddRow(){$("#editable").dataTable().fnAddData(["Custom row","New row","New row","New row","New row"])};--}}
    {{--</script>--}}
    {{--<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>--}}
@endsection
