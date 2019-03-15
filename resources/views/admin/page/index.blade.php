@extends('admin.layout')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <div class="theme-panel">
                <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true"
                     data-original-title="Click to open advance theme customizer panel">
                    <i class="icon-settings"></i>
                </div>
                <div class="toggler-close">
                    <i class="icon-close"></i>
                </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body"
                                data-original-title="Default"></li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body"
                                data-original-title="Grey"></li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body"
                                data-original-title="Blue"></li>
                            <li class="color-dark tooltips" data-style="dark" data-container="body"
                                data-original-title="Dark"></li>
                            <li class="color-light tooltips" data-style="light" data-container="body"
                                data-original-title="Light"></li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span> Theme Style </span>
                        <select class="layout-style-option form-control input-small">
                            <option value="square" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-small">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-small">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-small">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode</span>
                        <select class="sidebar-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style</span>
                        <select class="sidebar-style-option form-control input-small">
                            <option value="default" selected="selected">Default</option>
                            <option value="compact">Compact</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-small">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-small">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-small">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
            <h1 class="page-title"> Trang chủ
                <small>báo cáo & cập nhập</small>
            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{route('home')}}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Trang chủ</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle"
                                data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                            Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Hoạt đông</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-green-sharp">
                                        <span data-counter="counterup"
                                              data-value=""></span>
                                        <small class="font-green-sharp">VND</small>
                                    </h3>
                                    <small>Tổng tiền</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-pie-chart"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 100%;"
                                              class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">100%</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> change</div>
                                    <div class="status-number"> 100%</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('user-admin.index')}}">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-red-haze">
                                        <span data-counter="counterup" data-value=""></span>
                                    </h3>
                                    <small>Tổng tài khoản</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-users"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 100%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">100%</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> change</div>
                                    <div class="status-number"> 100%</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                    <span data-counter="counterup"
                                          data-value=""></span>
                                    </h3>
                                    <small>Yêu cầu thanh toán</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-diamond"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 100%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">100% grow</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> grow</div>
                                    <div class="status-number"> 100%</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-purple-soft">
                                    <span data-counter="counterup"
                                          data-value=""></span>
                                    </h3>
                                    <small>Yêu cầu rút tiền</small>
                                </div>
                                <div class="icon">
                                    <i class="icon-anchor"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 100%;"
                                              class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">100% change</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> change</div>
                                    <div class="status-number"> 100%</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption ">
                                <span class="caption-subject font-dark bold uppercase">Doanh thu</span>
                                <span class="caption-helper">7 ngày gần nhất</span>
                            </div>
                            <div class="actions">
                                <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                    <i class="fa fa-pencil"></i> Export </a>
                                <a href="#" class="btn btn-circle green btn-outline btn-sm">
                                    <i class="fa fa-print"></i> Print </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="dashboard_amchart_money" class="CSSAnimationChart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class=" icon-social-twitter font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Top chiến dịch</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_actions_pending" data-toggle="tab">Hành động</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_actions_pending">
                                    <!-- BEGIN: Actions -->
                                    <div class="mt-actions">

                                    </div>
                                    <!-- END: Actions -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection