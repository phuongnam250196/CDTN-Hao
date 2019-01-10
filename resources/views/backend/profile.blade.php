@extends('backend.master')
@section('title', 'Thông tin cá nhân')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Thông tin tài khoản</strong>
                            <a href="{{url('/admin/profile/edit')}}" class="btn btn-outline-success pull-right">Cập nhật</a>
                        </div>
                        <div class="card-body">
                            <p>Tên tài khoản: {{Auth::user()->email}}</p>
                            <p>Quyền hạn: Administrator</p>
                            <p>Ngày cập nhật: {{Auth::user()->created_at}}</p>
                            <p><img width="500" src="{{url('/').'/'.Auth::user()->avatar}}" alt=""></p>
                            <p>{!! Auth::user()->content !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop