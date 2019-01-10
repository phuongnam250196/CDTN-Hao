@extends('backend.master')
@section('title', 'Sinh viên')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách sinh viên tham gia hệ thống</strong>
                            <a href="{{url('/admin/posts/create')}}" class="btn btn-outline-success pull-right">Tạo tài khoản</a href="{{url('/admin/posts/')}}">
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop