@extends('frontend.master')
@section('title', 'Sinh viên | Thông tin')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        <!-- Widget Area -->
                        @include('frontend.navbar.nav')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Thông tin cá nhân</li>
                                <li class="nav-item">
                                    <a class="btn btn-primary"  href="{{url('student/info/update')}}">Cập nhật</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="info">
                                    <p>Họ tên: {{$data->student_name}}</p>
                                    <p>Mã sinh viên: {{$data->student_code}}</p>
                                    <p>Email: {{$data->student_email}}</p>
                                    <p>Số điện thoại: {{$data->student_phone}}</p>
                                    <p>Ảnh đại điện: <br> <img width="300" src="{{url('').'/'.$data->student_avatar}}" alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection