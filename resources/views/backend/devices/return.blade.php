@extends('backend.master')
@section('title', 'Trang thiết bị / Người trả')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách người trả trang thiết bị</strong>
                            <a href="{{url('/admin/devices/borrow')}}" class="btn btn-outline-danger pull-right mr-2">Người mượn</a>
                        </div>
                        <div class="card-body">
                            @if(session('messages'))
                                <p class="alert alert-success">{{session('messages')}}</p>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên thiết bị</th>
                                        <th scope="col">Người trả</th>
                                        <th class="text-center" scope="col">Số lượng mượn</th>
                                        <th scope="col">Loại</th>
                                        <th>Ngày trả</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td>{{$dat->Devices->device_name}}</td>
                                            <td>{{(!empty($dat->Students->student_name))?($dat->Students->student_name):($dat->Teachers->teacher_name)}}</td>
                                            <td class="text-center">{{$dat->count}}</td>
                                            <td>{{$dat->type}}</td>
                                            <td>
                                                {{$dat->date_finish}}
                                            </td>
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