@extends('frontend.master')
@section('title', 'Trang chủ')
@section('main')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-12">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title text-uppercase">Bài viết</li>

                                {{-- <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">New</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Old</a>
                                </li>
                                            --}}
                               
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                                                @foreach($posts as $post)
                                                <div class="single-blog-post">
                                                    <!-- Post Thumbnail -->
                                                    <div class="post-thumbnail">
                                                        <a href="{{url('/news/'.$post->id)}}"><img style="height: 340px;" src="{{url('/').'/'.$post->post_img}}" alt=""></a>
                                                        <!-- Catagory -->
                                                        <div class="post-cta"><a href="{{url('/news/'.$post->id)}}">Detail</a></div>
                                                    </div>
                                                    <!-- Post Content -->
                                                    <div class="post-content">
                                                        <a href="{{url('/news/'.$post->id)}}" class="headline">
                                                            <h5>{{$post->post_title}}</h5>
                                                        </a>
                                                        <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3 !important;display: -webkit-box;-webkit-box-orient: vertical;">{!! strip_tags(preg_replace("/<img[^>]+\>/i", "(image) ", $post->post_content)) !!}</p>
                                                        <!-- Post Meta -->
                                                        <div class="post-meta">
                                                            <p><a href="#" class="post-author">{{(empty($post->Student->student_name)?"":($post->Student->student_name))}}</a> on <a href="#" class="post-date">{{(empty($post->created_at)?"":($post->created_at))}}</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            @foreach($posts as $post)
                                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="{{url('/news/'.$post->id)}}"><img width="97" style="height: 97px !important;" src="{{url('/').'/'.$post->post_img}}" alt=""></a>
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{url('/news/'.$post->id)}}" class="headline">
                                                        <h5>{{$post->post_title}}</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{(empty($post->Student->student_name)?"":($post->Student->student_name))}}</a> on <a href="#" class="post-date">{{(empty($post->created_at)?"":($post->created_at))}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title wow fadeInUpBig">
                <h5 style="font-weight: bold;">Trang thiết bị </h5>
            </div>
            <div class="row justify-content-center">
                @foreach($devices as $device)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            @if(!empty($device->device_img))
                                <img style="height: 190px;" src="{{url('/').'/'.$device->device_img}}" alt="">
                            @else
                                <img style="height: 190px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                            @endif
                            <div class="post-content d-flex align-items-center justify-content-between">
                                <!-- Catagory -->
                                <div class="post-tag"><a href="#">New</a></div>
                                <!-- Headline -->
                                <a href="#" class="headline">
                                    <a href="{{url('device/'.$device->id)}}" ><h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical; color: inherit;">{{$device->device_name}}<h5></a>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p>Mã:<a href="#" class="post-author"> {{$device->device_code}}</a> , số lượng hiện có: <a href="#" class="post-date">{{$device->device_count_change}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            
            <br><br>
            <div class="title wow fadeInUpBig">
                <h5>Đồ án </h5>
            </div>
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-12">
                    <div class="post-content-area">
                        <div class="world-catagory-area">

                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                                    <div class="row">
                                       
                                        <div class="col-12 col-md-4 mb-3">
                                            <h6 style="margin-bottom: 5px; text-align: center;">Khóa Luận tốt nghiệp</h6>
                                            <hr style="width: 20%; margin:0 auto; margin-bottom: 16px;">
                                             @foreach($kltn as $dat)
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                                <div class="post-thumbnail">
                                                    @if(!empty($dat->project_img))
                                                        <img style="height: 200px;" src="{{asset(''.$dat->project_img)}}" alt="">
                                                    @else
                                                        <img style="height: 200px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                                    @endif
                                                    <div class="post-cta"><a href="{{url('/project/'.$dat->id)}}">Chi tiết</a></div>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('/project/'.$dat->id)}}" class="headline">
                                                        <h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">{{$dat->project_name}}</h5>
                                                    </a>
                                                    <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;">{!! $dat->project_content !!}</p>
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{$dat->project_confectioner}}</a> on <a href="#" class="post-date">{{$dat->created_at->toDayDateTimeString()}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="text-center" style="margin-top: 30px;">
                                                <a href="{{url('/project/type/kltn')}}" class="btn btn-outline-secondary">Xem thêm</a>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 mb-3">
                                            <h6 style="margin-bottom: 5px; text-align: center;">Chuyên đề tốt nghiệp</h6>
                                            <hr style="width: 20%; margin:0 auto; margin-bottom: 16px;">
                                             @foreach($cdtn as $dat)
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                                <div class="post-thumbnail">
                                                    @if(!empty($dat->project_img))
                                                        <img style="height: 200px;" src="{{asset(''.$dat->project_img)}}" alt="">
                                                    @else
                                                        <img style="height: 200px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                                    @endif
                                                    <div class="post-cta"><a href="{{url('/project/'.$dat->id)}}">Chi tiết</a></div>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('/project/'.$dat->id)}}" class="headline">
                                                        <h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">{{$dat->project_name}}</h5>
                                                    </a>
                                                    <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;">{!! $dat->project_content !!}</p>
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{$dat->project_confectioner}}</a> on <a href="#" class="post-date">{{$dat->created_at->toDayDateTimeString()}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="text-center" style="margin-top: 30px;">
                                                <a href="{{url('/project/type/cdtn')}}" class="btn btn-outline-secondary">Xem thêm</a>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 mb-3">
                                            <h6 style="margin-bottom: 5px; text-align: center;">Đề tài NCKH</h6>
                                            <hr style="width: 20%; margin:0 auto; margin-bottom: 16px;">
                                             @foreach($nckh as $dat)
                                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                                                <div class="post-thumbnail">
                                                    @if(!empty($dat->project_img))
                                                        <img style="height: 200px;" src="{{asset(''.$dat->project_img)}}" alt="">
                                                    @else
                                                        <img style="height: 200px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                                    @endif
                                                    <div class="post-cta"><a href="{{url('/project/'.$dat->id)}}">Chi tiết</a></div>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('/project/'.$dat->id)}}" class="headline">
                                                        <h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">{{$dat->project_name}}</h5>
                                                    </a>
                                                    <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;">{!! $dat->project_content !!}</p>
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{$dat->project_confectioner}}</a> on <a href="#" class="post-date">{{$dat->created_at->toDayDateTimeString()}}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="text-center" style="margin-top: 30px;">
                                                <a href="{{url('/project/type/nckh')}}" class="btn btn-outline-secondary">Xem thêm</a>
                                            </div>
                                        </div>
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
