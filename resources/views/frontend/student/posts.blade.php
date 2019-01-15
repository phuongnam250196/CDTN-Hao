@extends('frontend.master')
@section('title', 'Sinh viên | Viết bài')
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
                                <li class="title">Danh sách bài viết</li>
                                <li class="nav-item">
                                    <a class="btn btn-primary"  href="{{url('student/posts/create')}}">Viết bài</a>
                                </li>
                            </ul>

                            <div >
                                <div class="info">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Ảnh minh họa</th>
                                            <th>Trạng thái</th>
                                            <th colspan="2" class="text-center">Tùy chọn</th>
                                          </tr>
                                        </thead>
                                        <tbody {{$dem =1}}>
                                          @foreach($data as $dat)
                                          <tr>
                                            <td>{{$dem++}}</td>
                                            <td>{{$dat->post_title}}</td>
                                            <td><img width="80" height="60" src="{{url('').'/'.$dat->post_img}}" alt=""></td>
                                            <td>
                                                @if($dat->post_status == 1)
                                                    <span class="text-success">Đã duyệt</span>
                                                @elseif($dat->post_status == 2)
                                                    <span class="text-danger">Bị hủy</span>
                                                @else 
                                                    <span class="text-warning">Đang chờ</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($dat->post_status == 1 || $dat->post_status == 2)
                                                    block
                                                @else
                                                    <a href="{{url('student/posts/edit/'.$dat->id)}}" class="btn btn-info"><i class="fa fa-check"></i></a>
                                                @endif
                                            </td>
                                            <td>
                                                @if($dat->post_status == 1 || $dat->post_status == 2)
                                                    block
                                                @else
                                                    <a href="{{url('student/posts/delete/'.$dat->id)}}" onclick="return confirm('Bạn có chắc muốn xóa??');" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                                @endif
                                            </td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection