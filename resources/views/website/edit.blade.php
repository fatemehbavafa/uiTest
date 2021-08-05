@extends('layouts.DoreJs.admin')
@section('style')
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap-float-label.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/component-custom-switch.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/cropper.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/select2-bootstrap.min.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>ویرایش سایت </h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{route('website.index')}}">فهرست</a></li>
                    <li class="breadcrumb-item"><a href="{{route('website.create')}}">جدید</a></li>

                </ol>
            </nav>
            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    {{Form::model($website, ['route' => ['website.update', $website->id], 'class'=> 'form-horizontal text-right', 'method' => 'PATCH' ])}}
                    @include('website.form')
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('DoreJs/js/vendor/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/cropper.min.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/typeahead.bundle.js')}}"></script>

@endsection
