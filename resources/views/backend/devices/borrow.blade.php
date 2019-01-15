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
                                        <th scope="col">Người mượn</th>
                                        <th scope="col">Tên thiết bị</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Ngày mượn</th>
                                        <th class="text-center" colspan="2" width="15%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td><a href="{{url("admin/devices/user/".$dat->id)}}">{{$dat->Students->student_name}}</a></td>
                                            <td>{{$dat->Devices->device_name}}</td>
                                            <td>
                                                @if($dat->status==0)
                                                    <span class="text-warning">Chờ</span>
                                                @elseif($dat->status==1)
                                                    <span class="text-success">Ok</span>
                                                @else
                                                    <span class="text-danger">Hủy</span>
                                                @endif
                                            </td>
                                            <td>{{$dat->created_at}}</td>
                                            <td>
                                                <a href="{{url('admin/devices/borrow/'.$dat->id)}}" onclick="return confirm('Bạn có chắc muốn cho mượn!');" class="btn btn-outline-info"><i class="fa  fa-check"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/devices/borrow_del/'.$dat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger"><i class="fa  fa-times"></i></a>
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