@extends('backend.master')
@section('title', 'Giáo viên | Thêm mới')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thêm mới </strong> Tài khoản giáo viên
                        </div>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                @if(session('messages'))
                                    <p class="alert alert-danger">{{session('messages')}}</p>
                                @endif
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="text" name="teacher_email" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Mật khẩu</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Họ tên</label>
                                    <input type="text" name="teacher_name" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Ảnh minh họa</label>
                                    <input id="img" type="file" name="teacher_avatar" class="form-control" style="display: none" onchange="changeImg(this)" ><br>
                                    <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="200">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Số điện thoại</label>
                                    <input type="text" name="teacher_phone" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Thêm mới
                                </button>
                                <a href="{{url("/admin/teachers")}}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Hủy bỏ
                                </a>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
@stop