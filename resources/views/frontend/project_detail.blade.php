@extends('frontend.master')
@section('title', 'Đồ án | chi tiết')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-7">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="#" class="post-author text-uppercase text-orange">Đề tài: {{$data->project_name}}</a> - Người làm: {{$data->project_confectioner}} - Người hướng dẫn: {{$data->project_instructor}}</p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h6>{!! $data->project_content !!}</h6>
                            <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Liberty</a></li>
                                <li><a href="#">Recommendations</a></li>
                                <li><a href="#">Interpritation</a></li>
                            </ul>
                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author">Admin</a> on <a href="#" class="post-date">{{$data->created_at->toDayDateTimeString()}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area mb-100">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Quy định</h5>
                            <div class="widget-content">
                                <p>Chào bạn đã đến với website của chúng tôi. Những thông tin trên đây đều là bản quyền về Đại học Thăng Long. Đề nghị không chia sẻ ra bên ngoài.</p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Bài viết liên quan</h5>
                            <div class="widget-content">
                                @foreach($posts as $post)
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset('/frontend')}}/img/blog-img/b11.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{url('/news/'.$post->id)}}" class="headline">
                                            <h5 class="mb-0">{{$post->post_title}}</h5>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Chia sẻ</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection