@extends('frontend.master')
@section('title', 'Đồ án')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-10">
                    <div class="post-content-area mb-50">

                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="title">Danh sách đồ án</li>

                                {{-- <li class="nav-item">
                                    <a class="nav-link active" id="tab10" data-toggle="tab" href="#world-tab-10" role="tab" aria-controls="world-tab-10" aria-selected="true">New</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab11" data-toggle="tab" href="#world-tab-11" role="tab" aria-controls="world-tab-11" aria-selected="false">Old</a>
                                </li> --}}
                            </ul>

                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                        @foreach($data as $dat)
                                        <div class="col-12 col-md-4 mb-3">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    @if(!empty($dat->project_img))
                                                        <img style="height: 155px;" src="{{asset(''.$dat->project_img)}}" alt="">
                                                    @else
                                                        <img style="height: 155px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                                    @endif
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="{{url('/project/'.$dat->id)}}">Chi tiết</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{url('/project/'.$dat->id)}}" class="headline">
                                                        <h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">{{$dat->project_name}}</h5>
                                                    </a>
                                                    <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;">{!! $dat->project_content !!}</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{$dat->project_confectioner}}</a> on <a href="#" class="post-date">{{$dat->created_at->toDayDateTimeString()}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <br><br><br>
                                        <div class="text-center" style="margin: 0 auto;">
                                            <br>
                                             {{$data->links()}}
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="tab-pane fade" id="world-tab-11" role="tabpanel" aria-labelledby="tab11">
                                    <div class="row">
                                        @foreach($posts as $post)
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="{{asset('/frontend')}}/img/blog-img/b2.jpg" alt="">
                                                    <!-- Catagory -->
                                                    <div class="post-cta"><a href="#">travel</a></div>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="#" class="headline">
                                                        <h5>{{$post->post_title}}</h5>
                                                    </a>
                                                    <p>{!! $post->post_content !!}</p>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{(!empty($post->Student->student_name)?($post->Student->student_name):"Vô danh")}}</a> on <a href="#" class="post-date">{{$post->created_at->toDayDateTimeString()}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection