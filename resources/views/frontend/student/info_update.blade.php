@extends('frontend.master')
@section('title', 'Sinh viên | Cập nhật thông tin')
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
                                <li class="title">Cập nhật thông tin</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class=" form-control-label">Ảnh đại diện</label> <br>
                                                {{-- <input type="file" name="post-img" class="form-control"> --}}
                                                <input id="img" type="file" name="student_avatar" class="form-control" style="display: none" onchange="changeImg(this)" >
                                                @if(empty($data->student_avatar))
                                                <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="300">
                                                @else
                                                <img id="avatar" class="thumbnail" src="{{url('/').'/'.$data->student_avatar}}" width="300">
                                                @endif
                                            </div>
                                          <div class="form-group">
                                            <label>Mã sinh viên</label>
                                            <input type="text" class="form-control" name="student_code" disabled value="{{Auth::user()->name}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Họ tên</label>
                                            <input type="text" class="form-control" name="student_name" value="{{$data->student_name}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="student_email" value="{{$data->student_email}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input type="text" class="form-control" name="student_phone" value="{{$data->student_phone}}">
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                            <a href="{{url('student/info')}}" class="btn btn-secondary">Hủy bỏ</a>
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