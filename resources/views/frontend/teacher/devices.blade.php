@extends('frontend.master')
@section('title', 'Giáo viên | Thiết bị')
@section('main')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        <!-- Widget Area -->
                        @include('frontend.navbar.nav_teacher')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Danh sách thiết bị của tôi</li>
                                <li class="nav-item">
                                    <a class="btn btn-primary"  href="{{url('teacher/devices/all')}}">Mượn</a>
                                </li>
                            </ul>

                            <div >
                                @if(session('messages'))
                                    <p class="alert alert-success">{{session('messages')}}</p>
                                @endif
                                <div class="info">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>STT</th>
                                            <th>Tên thiết bị</th>
                                            <th>Loại</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày mượn</th>
                                          </tr>
                                        </thead>
                                        <tbody {{$dem =1}}>
                                          @foreach($data as $dat)
                                          <tr>
                                            <td>{{$dem++}}</td>
                                            <td>{{$dat->Devices->device_name}}</td>
                                            <td>{{$dat->type}}</td>
                                            <td>
                                                @if($dat->status==0)
                                                    <span class="text-warning">Chờ</span>
                                                @elseif($dat->status==1)
                                                    <span class="text-primary">Đang mượn</span>
                                               @elseif($dat->status==3)
                                                    <span class="text-success">Đã trả</span>
                                                @else
                                                    <span class="text-danger">Hủy</span>
                                                @endif
                                            </td>
                                            <td>{{$dat->Devices->created_at}}</td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                </div>
                                {{-- {{$data->links()}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection