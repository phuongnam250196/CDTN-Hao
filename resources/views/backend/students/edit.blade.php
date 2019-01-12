@extends('backend.master')
@section('title', 'Sinh viên | Cập nhật')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Cập nhật </strong> Tài khoản sinh viên
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class="form-control-label">Mã sinh viên</label>
                                    <input type="text" name="student_code" value="{{$data->student_code}}" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Họ tên</label>
                                    <input type="text" name="student_name" value="{{$data->student_name}}" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Ảnh minh họa</label>
                                    <input id="img" type="file" value="{{$data->student_avatar}}" name="student_avatar" class="form-control" style="display: none" onchange="changeImg(this)" >
                                    <img id="avatar" class="thumbnail" src="{{url('/').'/'.$data->student_avatar}}" width="100%">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="text" name="student_email" value="{{$data->student_email}}" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Số điện thoại</label>
                                    <input type="text" name="student_phone" value="{{$data->student_phone}}" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Thêm mới
                                </button>
                                <a href="{{url("/admin/students")}}" class="btn btn-danger btn-sm">
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