@extends('frontend.master')
@section('title', 'Sinh viên | Đổi mật khẩu')
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
                                <li class="title">Đổi mật khẩu</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form method="POST" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Mật khẩu cũ</label>
                                            <input type="password" class="form-control" name="password_old" value="{{old('password_old')}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Mật khẩu mới</label>
                                            <input type="password" class="form-control" name="password" value="{{old('password')}}">
                                          </div>
                                          <div class="form-group">
                                            <label>Nhập lại mật khẩu mới</label>
                                            <input type="password" class="form-control" name="password_2" value="{{old('password_2')}}">
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Xác nhận</button>
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