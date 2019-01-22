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
                            <a href="{{url('/admin/devices/return')}}" class="btn btn-outline-primary pull-right mr-2">Người trả</a>
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
                                        <th class="text-center" colspan="2" width="10%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td>
                                                @if(!empty($dat->Students))
                                                <a href="{{url("admin/devices/user/".$dat->id)}}">{{$dat->Students->student_name}}</a>
                                                @else
                                                <a href="{{url("admin/devices/user/".$dat->id)}}">GV. {{$dat->Teachers->teacher_name}}</a>
                                                @endif
                                            </td>
                                            <td>{{$dat->Devices->device_name}}</td>
                                            <td>
                                                @if($dat->status==0)
                                                    <span class="text-warning">Chờ</span>
                                                @elseif($dat->status==1)
                                                    <span class="text-primary">Đang mượn</span>
                                                @elseif ($dat->status == 2)
                                                    <span class="text-danger">Hủy</span>
                                                @endif
                                            </td>
                                            <td>{{$dat->created_at}}</td>
                                            @if($dat->status==0)
                                            <td>
                                                <a href="{{url('admin/devices/borrow/'.$dat->id)}}" onclick="return confirm('Bạn có chắc muốn cho mượn!');" class="btn btn-outline-info">Mượn</a>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/devices/borrow_del/'.$dat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger">Cấm</a>
                                            </td>
                                            @elseif($dat->status==1)
                                            <td colspan="2">
                                                <a href="{{url('admin/devices/return/'.$dat->id)}}" onclick="return confirm('Bạn có chắc muốn cho mượn!');" class="btn btn-outline-primary">Xác nhận trả</a>
                                                <td></td>
                                            </td>
                                            @elseif ($dat->status == 2)
                                            <td></td>
                                            <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$data->links()}}
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop