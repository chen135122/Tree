@extends('layouts.admin')


@section('container')
    <div class="page-container ">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE CONTROLS -->
            <div class="container-fluid relative">
                <!-- LEFT SIDE -->
                <div class="pull-left full-height visible-sm visible-xs">
                    <!-- START ACTION BAR -->
                    <div class="header-inner">
                        <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                            <span class="icon-set menu-hambuger"></span>
                        </a>
                    </div>
                    <!-- END ACTION BAR -->
                </div>
                <div class="pull-center hidden-md hidden-lg">
                    <div class="header-inner">
                        <div class="brand inline">
                            <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                        </div>
                    </div>
                </div>
                <!-- RIGHT SIDE -->
                <div class="pull-right full-height visible-sm visible-xs">
                    <!-- START ACTION BAR -->
                    <div class="header-inner">
                        <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                            <span class="icon-set menu-hambuger-plus"></span>
                        </a>
                    </div>
                    <!-- END ACTION BAR -->
                </div>
            </div>
            <!-- END MOBILE CONTROLS -->
            <div class=" pull-left sm-table hidden-xs hidden-sm">
                <div class="header-inner">
                    <div class="brand inline">
                        <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    </div>
                    <!-- START NOTIFICATION LIST -->
                    <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
                        <li class="p-r-15 inline">
                            <div class="dropdown">
                                <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                                    <span class="bubble"></span>
                                </a>
                                <!-- START Notification Dropdown -->
                                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                    <!-- START Notification -->
                                    <div class="notification-panel">
                                        <!-- START Notification Body-->
                                        <div class="notification-body scrollable">
                                            <!-- START Notification Item-->
                                            <div class="notification-item unread clearfix">
                                                <!-- START Notification Item-->
                                                <div class="heading open">
                                                    <a href="#" class="text-complete pull-left">
                                                        <i class="pg-map fs-16 m-r-10"></i>
                                                        <span class="bold">Carrot Design</span>
                                                        <span class="fs-12 m-l-10">David Nester</span>
                                                    </a>
                                                    <div class="pull-right">
                                                        <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                                            <div><i class="fa fa-angle-left"></i>
                                                            </div>
                                                        </div>
                                                        <span class=" time">few sec ago</span>
                                                    </div>
                                                    <div class="more-details">
                                                        <div class="more-details-inner">
                                                            <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                                distinguishes between <br>
                                                                A leader and a follower.”</h5>
                                                            <p class="small hint-text">
                                                                Commented on john Smiths wall.
                                                                <br> via pages framework.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Notification Item-->
                                                <!-- START Notification Item Right Side-->
                                                <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- START Notification Body-->
                                            <!-- START Notification Item-->
                                            <div class="notification-item  clearfix">
                                                <div class="heading">
                                                    <a href="#" class="text-danger pull-left">
                                                        <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                        <span class="bold">98% Server Load</span>
                                                        <span class="fs-12 m-l-10">Take Action</span>
                                                    </a>
                                                    <span class="pull-right time">2 mins ago</span>
                                                </div>
                                                <!-- START Notification Item Right Side-->
                                                <div class="option">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item-->
                                            <div class="notification-item  clearfix">
                                                <div class="heading">
                                                    <a href="#" class="text-warning-dark pull-left">
                                                        <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                        <span class="bold">Warning Notification</span>
                                                        <span class="fs-12 m-l-10">Buy Now</span>
                                                    </a>
                                                    <span class="pull-right time">yesterday</span>
                                                </div>
                                                <!-- START Notification Item Right Side-->
                                                <div class="option">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- END Notification Item-->
                                            <!-- START Notification Item-->
                                            <div class="notification-item unread clearfix">
                                                <div class="heading">
                                                    <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                                                        <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
                                                    </div>
                                                    <a href="#" class="text-complete pull-left">
                                                        <span class="bold">Revox Design Labs</span>
                                                        <span class="fs-12 m-l-10">Owners</span>
                                                    </a>
                                                    <span class="pull-right time">11:00pm</span>
                                                </div>
                                                <!-- START Notification Item Right Side-->
                                                <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                                                    <a href="#" class="mark"></a>
                                                </div>
                                                <!-- END Notification Item Right Side-->
                                            </div>
                                            <!-- END Notification Item-->
                                        </div>
                                        <!-- END Notification Body-->
                                        <!-- START Notification Footer-->
                                        <div class="notification-footer text-center">
                                            <a href="#" class="">Read all notifications</a>
                                            <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                                                <i class="pg-refresh_new"></i>
                                            </a>
                                        </div>
                                        <!-- START Notification Footer-->
                                    </div>
                                    <!-- END Notification -->
                                </div>
                                <!-- END Notification Dropdown -->
                            </div>
                        </li>
                        <li class="p-r-15 inline">
                            <a href="#" class="icon-set clip "></a>
                        </li>
                        <li class="p-r-15 inline">
                            <a href="#" class="icon-set grid-box"></a>
                        </li>
                    </ul>
                    <!-- END NOTIFICATIONS LIST -->
                    <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a> </div>
            </div>
            <div class=" pull-right">
                <div class="header-inner">
                    <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
                </div>
            </div>
            <div class=" pull-right">
                <!-- START User Info-->
                <div class="visible-lg visible-md m-t-10">
                    <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                        <span class="semi-bold">David</span> <span class="text-master">Nest</span>
                    </div>
                    <div class="dropdown pull-right">
                        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
                        </button>
                        <ul class="dropdown-menu profile-dropdown" role="menu">
                            <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                            </li>
                            <li><a href="#"><i class="pg-signals"></i> Help</a>
                            </li>
                            <li class="bg-master-lighter">
                                <a href="#" class="clearfix">
                                    <span class="pull-left">Logout</span>
                                    <span class="pull-right"><i class="pg-power"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
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
                                        <div class="panel-title">区域管理
                                        </div>
                                        <div class="tools">
                                            <a class="collapse" href="javascript:;"></a>
                                            <a class="config" data-toggle="modal" href="#"></a>
                                            <a class="reload" href="javascript:;"></a>
                                            <a class="remove" href="javascript:;"></a>
                                        </div>
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