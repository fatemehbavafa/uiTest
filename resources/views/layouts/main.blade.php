<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>سامانه مدیریت باران</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2-custom.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/pcalendar/persian-datepicker.min.css')}}" rel="stylesheet">
    <style type="text/css">
        body {
            text-align: right;
            direction: rtl;
        }

        #side-menu {
            padding-right: 0;
        }

        #side-menu ul {
            padding-right: 0;
        }

        .sidebar .nav-second-level li a {
            padding-right: 37px;
        }

        .sidebar .nav-third-level li a {
            padding-right: 52px !important;
        }

        .d-rtl {
            direction: rtl;
        }

        .d-ltr {
            direction: ltr;
        }

        .sidebar .arrow {
            float: left;
        }

        .navbar-nav.navbar-top-links .dropdown-user {
            left: 0;
            right: auto;
        }

        .dropdown-menu {
            text-align: right;
        }

        .navbar-expand-md .navbar-nav .dropdown-menu-right {
            right: auto;
            left: 0;
        }

        .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
            color: #337ab7;
        }

        .table-responsive {
            min-height: .01%;
            overflow-x: auto;
        }

        .timeline > li > .timeline-panel {
            width: 44%;
        }

    </style>
    @yield('style')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md navbar-light">
        <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
            <a class="" href="#">کاربر محترم خوش آمدید</a>
            <button class="collapsed ml-auto navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#side-menu-wrapper" aria-controls="side-menu" aria-expanded="false"
                    aria-label="Toggle navigation" style="">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </header>

    <div class="d-md-flex">
        <div class="sidebar" role="navigation">
            <div class="sidebar-nav collapse navbar-collapse show" id="side-menu-wrapper">
                <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-group fa-fw"></i> کاربری<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="{{route('user.user.index')}}">کاربران سیستم</a>
                            </li>
                            @if(false)
                                <li class="list-group-item">
                                    <a href="{{route('user.role.index')}}">نقش های کاربری</a>
                                </li>
                            @endif
                            <li class="list-group-item">
                                <a href="{{route('user.bank.index')}}">بانک ها</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('payment.finance.index')}}">گردش های مالی</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-truck fa-fw"></i> وسایل نقلیه<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="{{route('user.vehicle.index')}}">وسایل نقلیه</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('user.vehicle_type.index')}}">تعریف انواع وسایل نقلیه</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('vehicle.feature.index')}}">ویژگی های وسیله نقلیه</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-archive fa-fw"></i> بار<span class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="{{route('freight.freight.index')}}">فهرست بارها</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('freight.service.index')}}">خدمات باری</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('freight.freight_type.index')}}">نوع بار</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('freight.transition.index')}}">انتقال بار</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-table fa-fw"></i> مدیریت ارتباط با مشتری<span
                                    class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="{{route('crm.hourly.index')}}">درخواست های ساعتی</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('freight.freight_type.index')}}">تک درخواست</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{route('crm.periodic.index')}}">درخواست های دوره ای</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="list-group-item">
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                                    class="fa arrow"></span></a>
                        <ul class="nav-second-level list-group nested">
                            <li class="list-group-item">
                                <a href="#">Second Level Item</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Second Level Item</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav-third-level list-group nested">
                                    <li class="list-group-item">
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('layouts.partials.message')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/metisMenu.min.js')}}"></script>
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('js/sb-admin-2-custom.js')}}"></script>
<script src="{{asset('vendor/pcalendar/persian-date.min.js')}}"></script>
<script src="{{asset('vendor/pcalendar/persian-datepicker.min.js')}}"></script>
@yield('script')
</body>

</html>
