@extends('layouts.admin')
@section('container')
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
        <div class="sidebar-overlay-slide from-top" id="appMenu">
            <div class="row">
                <div class="col-xs-6 no-padding">
                    <a href="#" class="p-l-40"><img src="/assets/img/demo/social_app.svg" alt="socail">
                    </a>
                </div>
                <div class="col-xs-6 no-padding">
                    <a href="#" class="p-l-10"><img src="/assets/img/demo/email_app.svg" alt="socail">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="#" class="p-l-40"><img src="/assets/img/demo/calendar_app.svg" alt="socail">
                    </a>
                </div>
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="#" class="p-l-10"><img src="/assets/img/demo/add_more.svg" alt="socail">
                    </a>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-header">
            <img src="/img/logo.png" alt="logo" class="brand" data-src="/img/logo.png" data-src-retina="/img/logo.png" width="78" height="44">
            <div class="sidebar-header-controls">
                <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
                </button>
                <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
                </button>
            </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        <div class="sidebar-menu">
            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu-items">
                <li class="m-t-30 ">
                    <a href="index.html" class="title">
                        <span class="title">{{trans('pages.menu.outline')}}</span>
                        {{--<span class="details">12 New Updates</span>--}}
                    </a>
                    <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
                </li>
                {{--<li class="">--}}
                {{--<a href="http://pages.revox.io/dashboard/latest/html/widget.html" class="title">--}}
                {{--<span class="title">{{trans('pages.menu.manage_house')}}</span>--}}
                {{--<span class="details">22 items</span>--}}
                {{--</a>--}}
                {{--<span class="icon-thumbnail"><i class="fa fa-institution"></i></span>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                {{--<a href="email.html" class="detailed">--}}
                {{--<span class="title">Email</span>--}}
                {{--<span class="details">234 New Emails</span>--}}
                {{--</a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-mail"></i></span>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                {{--<a href="social.html"><span class="title">Social</span></a>--}}
                {{--<span class="icon-thumbnail"><i class="pg-social"></i></span>--}}
                {{--</li>--}}
                <li>
                    <a href="javascript:;"><span class="title">{{trans('pages.menu.manage_house')}}</span>
                        <span class=" arrow"></span></a>
                    <span class="icon-thumbnail"><i class="fa fa-institution"></i></span>
                    <ul class="sub-menu">
                        {{--<li class="">--}}
                        {{--<a href="calendar.html">Basic</a>--}}
                        {{--<span class="icon-thumbnail">c</span>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                        {{--<a href="calendar_lang.html">Languages</a>--}}
                        {{--<span class="icon-thumbnail">L</span>--}}
                        {{--</li>--}}
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.house_list')}}</a>
                            <span class="icon-thumbnail">M</span>
                        </li>
                        {{--<li class="">--}}
                        {{--<a href="calendar_lazy.html">Lazy load</a>--}}
                        {{--<span class="icon-thumbnail">La</span>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                        {{--<a href="http://pages.revox.io/dashboard/2.1.0/doc/#calendar" target="_blank">Documentation</a>--}}
                        {{--<span class="icon-thumbnail">D</span>--}}
                        {{--</li>--}}
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span class="title">{{trans('pages.menu.manage_customers')}}</span>
                        <span class=" arrow"></span></a>
                    <span class="icon-thumbnail"><i class="fa fa-user"></i></span>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.customers')}}</a>
                            <span class="icon-thumbnail"><i class="fa fa-user"></i></span>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span class="title">{{trans('pages.menu.manage_base')}}</span>
                        <span class=" arrow"></span></a>
                    <span class="icon-thumbnail"><i class="fa fa-server"></i></span>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.manage_page')}}</a>
                            <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span class="title">{{trans('pages.menu.manage_order')}}</span>
                        <span class=" arrow"></span></a>
                    <span class="icon-thumbnail"><i class="fa fa-edit"></i></span>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.order_list')}}</a>
                            <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;"><span class="title">{{trans('pages.menu.system_setting')}}</span>
                        <span class=" arrow"></span></a>
                    <span class="icon-thumbnail"><i class="fa fa-wrench"></i></span>
                    <ul class="sub-menu">
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.user_list')}}</a>
                        </li>
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.manage_permission')}}</a>
                        </li>
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.manage_roles')}}</a>
                        </li>
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.distribute_permission')}}</a>
                        </li>
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.region_list')}}</a>
                        </li>
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.category_list')}}</a>
                        </li>
                        <li class="">
                            <a href="calendar_month.html">{{trans('pages.menu.manege_head_img')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <form id="upload-form" action="/admin/upload" method="post" enctype="multipart/form-data" >
            {{--<button class="btn btn-success btn-cons m-b-10" type="file"><i class="fa fa-cloud-upload"></i> <span class="bold">Upload</span>--}}
            {{--</button>--}}
            {{ csrf_field() }}
            　　　<input class="btn btn-success btn-cons m-b-10" type="file" id="upload" name="upload" /> <br />
            　　　<input type="submit" value="Upload" />
        </form>

    </div>

@stop