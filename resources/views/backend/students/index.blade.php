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
                            <a href="{{url('/admin/students/create')}}" class="btn btn-outline-success pull-right">Tạo tài khoản</a>
                        </div>
                        <div class="card-body">
                            @if(session('messages'))
                                <p class="alert alert-success">{{session('messages')}}</p>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Ảnh đại diện</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Mã sinh viên</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th class="text-center" colspan="2">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td>
                                                @if(!empty($dat->student_avatar))
                                                    <img src="{{url('/').'/'.$dat->student_avatar}}" width="100" height="80">
                                                @else
                                                    <img style="height: 80px;width: 100px;" src="{{url('/')}}/uploads/images/nen.png" alt="">
                                                @endif
                                            </td>
                                            <td>{{$dat->student_name}}</td>
                                            <td>{{$dat->student_code}}</td>
                                            <td>{{$dat->student_phone}}</td>
                                            <td><a href="{{url('admin/students/edit/'.$dat->id)}}" class="btn btn-outline-info"><i class="fa  fa-pencil"></i></a></td>
                                            <td>
                                                <a href="{{url('admin/students/delete/'.$dat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger"><i class="fa  fa-times"></i></a>
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