@extends('frontend.master')
@section('title', 'Sinh viên')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Danh sách chức năng</h5>
                            <div class="widget-content">
                                <ul>
                                	<li><a href="{{url('/student/info')}}">Xem thông tin</a></li>
                                	<li><a href="{{url('/student/posts')}}">Viết bài</a></li>
                                	<li><a href="{{url('/student/devices')}}">Mượn thiết bị</a></li>
                                	<li><a href="{{url('/student/calendars')}}">Đăng ký lịch trực</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Danh sách bài viết</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                abc
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection