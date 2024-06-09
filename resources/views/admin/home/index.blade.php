@extends("layouts.admin")

@section("title" , __("Home"))

@section("page_title" , __("Home"))

@section("page_subtitle" , __("تحليل الموقع"))

@section("content")
    @include('admin.includes.status')

    {{--  today counters  --}}
    <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="info-stats4">
                <div class="icon-type pull-left">
                    <i class="icon-motorcycle"></i>
                </div>
                <div class="sale-num">
                    <h4>{{$motors_count}}</h4>
                    <p>عدد الدراجات</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="info-stats4">
                <div class="icon-type pull-left">
                    <i class="icon-coin-dollar"></i>
                </div>
                <div class="sale-num">
                    <h4>{{$motors_count}}</h4>
                    <p>قيمة ايجار الدراجات</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
            <div class="info-stats4">
                <div class="icon-type pull-left">
                    <i class="icon-user"></i>
                </div>
                <div class="sale-num">
                    <h4>{{$users_count}}</h4>
                    <p>عدد المستخدمين</p>
                </div>
            </div>
        </div>
    </div>

@endsection
