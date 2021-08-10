<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ui-test</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('DoreJs/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('DoreJs/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('DoreJs/img/favicon-16x16.png')}}">
    <link rel="mask-icon" href="{{asset('image/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('DoreJs/css/directionRTL.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/font/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/font/fontawesome-free-5.1.0-web/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/persian-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/datatables.responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap-stars.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/dore.light.blue.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .navbar .navbar-logo {
            width: 125px !important;;
            height: 60px !important;;
        }

        .navbar .navbar-logo .logo {
            background-size: cover !important;
        }
    </style>
    @yield('style')
</head>
<body id="app-container" class="menu-default">
<div id="app"></div>
{{--@include('layouts.DoreJs.navbar')--}}
@include('layouts.DoreJs.sidebar')
<main>
    <div class="container-fluid">
        @include('layouts.DoreJs.message')
        @yield('content')
    </div>
</main>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/jquery-3.3.1.min.js')}}"></script>
{{--<script src="{{asset('DoreJs/js/vendor/bootstrap.bundle.min.js')}}"></script>--}}
<script src="{{asset('DoreJs/js/vendor/Chart.bundle.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/moment.min.js')}}"></script>
<script src="{{asset('DoreJs/js/persian-date.min.js')}}"></script>
<script src="{{asset('DoreJs/js/persian-datepicker.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/progressbar.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/jquery.barrating.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/nouislider.min.js')}}"></script>
<script src="{{asset('DoreJs/js/vendor/Sortable.js')}}"></script>
<script src="{{asset('DoreJs/js/dore.script.js')}}"></script>
<script src="{{asset('DoreJs/js/scripts.js')}}"></script>
<script src="{{asset('DoreJs/js/dataTable.content.js')}}"></script>
{{--<script src="resources/js/app.js"></script>--}}
<script>
    $(document).ready(function () {
        $(document).on("click", ".remove-button", function () {
            var result = confirm("آیا از حذف مطمئن هستید؟");
            if (result)
                return true;
            else
                return false;
        });

        $('body').on('focus', '.date-picker', function () {
            $(this).pDatepicker({
                format: 'YYYY-MM-D',
                initialValue: false,
                initialValueType: 'persian',
                toolbox: {
                    calendarSwitch: {
                        enabled: false
                    }
                },
            });
        });
        $(window).bind('resize', function() {
            if($('#grid').length){
                var width = $('#gridContainer').width();
                $('#grid').setGridWidth(width);
            }
        });

        $('body').on('keyup', '.numeric', function () {
            $(this).val(function (index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            });
        });

        $('.signed_numeric').keyup(function (event) {
            $(this).val(function (index, value) {
                let regx = /^-?\d*$/;
                if (regx.test(value.replace(/\,/g, ''))) {
                    let sign = "";
                    if (value.charAt(0) == "-")
                        sign = "-";
                    value = value.replace(/\-/g, '').replace(/\,/g, '');
                    return sign + value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
                return null;
            });
        });
    });
</script>
@yield('script')
</body>
</html>
