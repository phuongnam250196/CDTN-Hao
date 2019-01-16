@extends('frontend.master')
@section('title', 'Giáo viên | Cập nhật thông tin')
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
                                <li class="title">Cập nhật thông tin</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class=" form-control-label">Ảnh đại diện</label> <br>
                                                <input id="img" type="file" name="teacher_avatar" class="form-control" style="display: none" onchange="changeImg(this)" >
                                                @if(empty($data->teacher_avatar))
                                                <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="300">
                                                @else
                                                <img id="avatar" class="thumbnail" src="{{url('/').'/'.$data->teacher_avatar}}" width="300">
                                                @endif
                                            </div>
                                          <div class="form-group">
                                            <label>Họ tên</label>
                                            <input type="text" class="form-control" name="teacher_name" value="{{$data->teacher_name}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="teacher_email" value="{{$data->teacher_email}}" disabled>
                                          </div>
                                          <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" class="form-control" name="teacher_phone" value="{{$data->teacher_phone}}">
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            <a href="{{url('teacher/info')}}" class="btn btn-secondary">Hủy bỏ</a>
                                          </div>
                                          {{csrf_field()}}
                                        </form>
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