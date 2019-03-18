@extends('frontend.master')
@section('title', 'Sinh viên | Mượn thiết bị')
@section('main')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        <!-- Widget Area -->
                        @include('frontend.navbar.nav')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Tất cả thiết bị</li>
                            </ul>

                            <div >
                                <div class="info">
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>STT</th>
                                            <th>Tên thiết bị</th>
                                            {{-- <th>Loại</th> --}}
                                            <th class="text-center">SL hiện có</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody {{$dem =1}}>
                                          @foreach($data as $dat)
                                          <tr>
                                            <td>{{$dem++}}</td>
                                            <td>{{$dat->device_name}}</td>
                                            {{-- <td>{{$dat->device_type}}</td> --}}
                                            <td class="text-center">{{$dat->device_count_change}}</td>
                                            <td>
                                                @if($dat->device_count_change <= 0)
                                                    <a href="#" class="btn btn-secondary">Đăng ký</a>
                                                @else
                                                    <a href="{{url('student/devices/'.$dat->id)}}" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn mượn chứ!');">Đăng ký</a>
                                                @endif
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
                </div>
            </div>
        </div>
    </div>
@endsection