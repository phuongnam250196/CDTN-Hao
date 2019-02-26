@extends('frontend.master')
@section('title', 'Bài viết')
@section('main')
	<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Danh sách bài viết</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    @foreach($data as $dat)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img style="width: 200px; height: 200px;" src="{{url('/'.$dat->post_img)}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="{{url('/news/'.$dat->id)}}" class="headline">
                                                <h5 style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">{{$dat->post_title}}</h5>
                                            </a>
                                            <p style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;">{!! strip_tags(preg_replace("/<img[^>]+\>/i", "(image) ", $dat->post_content)) !!}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">{{(!empty($dat->Student->student_name)?($dat->Student->student_name):'Vô danh')}}</a> on <a href="#" class="post-date">{{(empty($dat->created_at)?"":($dat->created_at))}}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <br>
                                    {{$data->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Chú ý</h5>
                            <div class="widget-content">
                                <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Dồ án mới nhất</h5>
                            <div class="widget-content">
                                @foreach($projects as $project)
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        @if(!empty($project->project_img))
                                            <a href="{{url('project/'.$project->id)}}"><img style="width: 70px; height: 70px;" src="{{url('/'.$project->project_img)}}" alt=""></a>
                                        @else
                                            <a href="{{url('project/'.$project->id)}}">
                                                <img style="height: 70px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                            </a>
                                        @endif
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{url('/project/'.$project->id)}}" class="headline">
                                            <h5 class="mb-0" style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 4;display: -webkit-box;-webkit-box-orient: vertical;">{{$project->project_name}}</h5>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Thiết bị mới</h5>
                            <div class="widget-content">
                                @foreach($devices as $device)
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        @if(!empty($device->device_img))
                                            <a href="{{url('device/'.$device->id)}}"><img style="width: 70px; height: 70px;" src="{{url('/'.$device->device_img)}}" alt=""></a>
                                        @else
                                            <a href="{{url('device/'.$device->id)}}">
                                                <img style="height: 70px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                            </a>
                                        @endif
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{url('/device/'.$device->id)}}" class="headline">
                                            <h5 class="mb-0" style="overflow: hidden;text-overflow: ellipsis;-webkit-line-clamp: 4;display: -webkit-box;-webkit-box-orient: vertical;">{{$device->device_name}}</h5>
                                        </a>
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
@endsection