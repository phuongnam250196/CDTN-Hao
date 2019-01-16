@extends('frontend.master')
@section('title', 'Bài viết chi tiết')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-7">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p>Bài viết: <span class="text-uppercase">{{$data->post_title}}</span> by {{(!empty($data->Student->student_name)?($data->Student->student_name):"Vô danh")}}</a> on <a href="#" class="post-date">{{$data->created_at->toDayDateTimeString()}}</a></p>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <h6>{!! $data->post_content !!}</h6>
                            <!-- Post Tags -->
                            <ul class="post-tags">
                                <li><a href="#">Manual</a></li>
                                <li><a href="#">Liberty</a></li>
                                <li><a href="#">Recommendations</a></li>
                                <li><a href="#">Interpritation</a></li>
                            </ul>
                            <!-- Post Meta -->
                            <div class="post-meta second-part">
                                <p><a href="#" class="post-author">{{(!empty($data->Student->student_name)?($data->Student->student_name):"Vô danh")}}</a> on <a href="#" class="post-date">{{$data->updated_at->toDayDateTimeString()}}</a></p>
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

            <!-- ============== Related Post ============== -->
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        @foreach($projects as $project)
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{asset('/frontend')}}/img/blog-img/b1.jpg" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="{{url('/project/'.$project->id)}}" class="headline">
                                        <h5>{{$project->project_name}}</h5>
                                    </a>
                                    <p>{!!$project->project_content!!}</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">{{(!empty($project->Student->student_name)?($project->Student->student_name):"Vô danh")}}</a> on <a href="#" class="post-date">{{$project->updated_at->toDayDateTimeString()}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="post-a-comment-area mt-70">
                                <h5>Bình luận</h5>
                                <!-- Contact Form -->
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="group">
                                                <input type="text" name="name" id="name" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Họ & tên</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="group">
                                                <input type="email" name="email" id="email" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="group">
                                                <textarea name="message" id="message" required></textarea>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Nội dung</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn world-btn">Gửi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12">
                            <!-- Comment Area Start -->
                            <div class="comment_area clearfix mt-70">
                                <ol>
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <!-- Comment Meta -->
                                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                <a href="#" class="comment-reply btn world-btn">Reply</a>
                                            </div>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                        </div>
                                        <ol class="children">
                                            <li class="single_comment_area">
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <!-- Comment Meta -->
                                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                        <a href="#" class="comment-reply btn world-btn">Reply</a>
                                                    </div>
                                                    <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    
                                    <!-- Single Comment Area -->
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <!-- Comment Meta -->
                                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                <a href="#" class="comment-reply btn world-btn">Reply</a>
                                            </div>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                        </div>
                                    </li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection