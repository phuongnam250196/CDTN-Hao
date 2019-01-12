@extends('backend.master')
@section('title', 'Trang thiết bị / Người mượn')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách người mượn trang thiết bị</strong>
                        </div>
                        <div class="card-body">
                            @if(session('messages'))
                                <p class="alert alert-success">{{session('messages')}}</p>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Mã thiết bị</th>
                                        <th scope="col">Tên thiết bị</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Loại</th>
                                        <th class="text-center" colspan="2">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td><a href="{{url("admin/devices/user/".$dat->id)}}">{{$dat->device_code}}</a></td>
                                            <td>{{$dat->device_name}}</td>
                                            <td>{{$dat->device_count}}</td>
                                            <td>{{$dat->device_type}}</td>
                                            <td>
                                                <a href="{{url('admin/devices/edit/'.$dat->id)}}" class="btn btn-outline-info"><i class="fa  fa-pencil"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/devices/delete/'.$dat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger"><i class="fa  fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop