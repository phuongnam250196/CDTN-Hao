@extends('backend.master')
@section('title', 'Đề tài')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Quản lý đề tài</strong>
                            {{-- <a href="{{url('/admin/projects/cdtn')}}" class="btn btn-outline-warning pull-right ml-2">Chuyên đề</a>
                            <a href="{{url('/admin/projects/nckh')}}" class="btn btn-outline-danger pull-right ml-2">NCKH</a>
                            <a href="{{url('/admin/projects/kltn')}}" class="btn btn-outline-info pull-right ml-2">Khóa luận</a> --}}
                            <a href="{{url('/admin/projects/create')}}" class="btn btn-outline-success pull-right ml-3">Thêm mới</a>
                            <div class="pull-right">
                                <form class="form-inline" method="GET" action="{{url('admin/projects/search')}}">
                                  <input type="text" class="form-control" name="search" style="border-radius: 0;">
                                  <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                  {{csrf_field()}}
                                </form>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            @if(session('messages'))
                                <p class="alert alert-success">{{session('messages')}}</p>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Đề tài</th>
                                        <th scope="col">Người hướng dẫn</th>
                                        <th scope="col">Người thực hiện</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Trạng thái</th>
                                        <th class="text-center" colspan="2">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td>{{$dat->project_name}}</td>
                                            <td>{{$dat->project_instructor}}</td>
                                            <td>{{$dat->project_confectioner}}</td>
                                            
                                            <td><div class="post-content-text">{!! strip_tags(preg_replace("/<img[^>]+\>/i", "(image) ", $dat->project_content)) !!}</div></td>
                                            <td>
                                                @if($dat->project_status == 'hoanthanh')
                                                    Hoàn thành
                                                @else
                                                    Đang thực hiện
                                                @endif
                                            </td>
                                            <td><a href="{{url('admin/projects/edit/'.$dat->id)}}" class="btn btn-outline-info"><i class="fa  fa-pencil"></i></a></td>
                                            <td>
                                                <a href="{{url('admin/projects/delete/'.$dat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger"><i class="fa  fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">{{$data->links()}}</div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop