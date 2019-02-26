@extends('frontend.master')
@section('title', 'Giáo viên | Thông tin')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        <!-- Widget Area -->
                        @include('frontend.navbar.nav_teacher')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Thông tin cá nhân</li>
                                <li class="nav-item">
                                    <a class="btn btn-primary"  href="{{url('teacher/info/update')}}">Cập nhật</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="info row">
                                    <div class="col-md-8">
                                        <p>Họ tên: {{$data->teacher_name}}</p>
                                        <p>Email: {{$data->teacher_email}}</p>
                                        <p>Số điện thoại: {{$data->teacher_phone}}</p>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        @if(!empty($data->teacher_avatar))
                                            <p>Ảnh đại điện: <br> <img style="width: 100%; height: 130px;" src="{{url('/').'/'.$data->teacher_avatar}}" alt=""></p>
                                        @else
                                            <p>Ảnh đại điện: <br> <img style="width: 100%; height: 130px;" src="{{url('/uploads/images/new_seo-10-512.png')}}" alt=""></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection