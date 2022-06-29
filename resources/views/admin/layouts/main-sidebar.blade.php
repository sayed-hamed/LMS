<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <a href="{{route('admin.home')}}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                            </div>
                            <div class="clearfix"></div>
                            </a>
                        </a>
                    </li>
                    <!-- menu title -->
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Categories')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('admin.cat')}}">{{trans('main_trans.Categories')}}</a></li>

                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">{{trans('main_trans.Trainers')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.trainer')}}">{{trans('main_trans.Trainers')}} </a> </li>
                        </ul>
                    </li>

                    <!-- menu item Charts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="ti-pie-chart"></i><span
                                    class="right-nav-text">{{trans('main_trans.Students')}} </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.student')}}">{{trans('main_trans.Students')}} </a> </li>
                        </ul>
                    </li>

                    <!-- menu font icon-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">
                                    {{trans('main_trans.Courses')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.course')}}">{{trans('main_trans.Courses')}}</a> </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon22">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">
                                    {{trans('main_trans.Events')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon22" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.event')}}">{{trans('main_trans.Events')}}</a> </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">
                                    {{trans('main_trans.Articles')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Form" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.blog')}}">{{trans('main_trans.Articles')}}</a> </li>
                        </ul>
                    </li>
                    <!-- menu item table -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">
                                    {{trans('main_trans.Gallery')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.gallery')}}">{{trans('main_trans.Gallery')}}</a> </li>
                        </ul>
                    </li>
                    <!-- menu item Custom pages-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">
                                    {{trans('main_trans.Career')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.career')}}">{{trans('main_trans.Career')}}</a> </li>
                        </ul>
                    </li>


                    <!--end career-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table1">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">
                                    {{trans('main_trans.masseges')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table1" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.message')}}">{{trans('main_trans.masseges')}}</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table2">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">
                                    {{trans('main_trans.CV')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table2" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.CV')}}">{{trans('main_trans.CV')}}</a> </li>
                        </ul>
                    </li>

{{--                    @can('role')--}}
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table3">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">
                                    {{trans('main_trans.roles')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table3" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('admin.users')}}">{{trans('main_trans.Admins')}}</a> </li>

                            <li> <a href="{{route('admin.role')}}">{{trans('main_trans.roles')}}</a> </li>
                        </ul>
                    </li>

{{--                    @endcan--}}

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->


        <!--=================================


