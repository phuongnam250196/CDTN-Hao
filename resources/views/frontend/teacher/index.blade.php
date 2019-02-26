@extends('frontend.master')
@section('title', 'Giáo viên')
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
                    <div class="post-content-area mb-20">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Danh sách bài viết</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    @foreach($posts as $post)
                                        <div class="single-blog-post post-style-4 d-flex align-items-center">
                                            <div class="post-thumbnail">
                                                <a href="{{url('/news/'.$post->id)}}"><img style="height: 190px;" src="{{asset('/'.$post->post_img)}}" alt=""></a>
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="{{url('/news/'.$post->id)}}" class="headline">
                                                    <h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">{{$post->post_title}}</h5>
                                                </a>
                                                <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;">{!! strip_tags(preg_replace("/<img[^>]+\>/i", "(image) ", $post->post_content)) !!}</p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">{{(empty($post->Student->student_name)?"":($post->Student->student_name))}}</a> on <a href="#" class="post-date">{{(empty($post->created_at)?"":($post->created_at))}}</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <br>
                                    <div class="text-center">
                                        {{$posts->links()}}
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