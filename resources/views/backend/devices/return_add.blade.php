@extends('backend.master')
@section('title', 'Thiết bị | Thêm mới')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong> Thiết bị: {{$data->Devices->device_name}}</strong>
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class="form-control-label">Nhập ngày trả</label>
                                    <input type="date" name="date_finish" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Xác nhận
                                </button>
                                <a href="{{url('admin/devices')}}" class="btn btn-danger btn-sm">
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