@extends('backend.master')
@section('title', 'Bài viết')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Danh sách bài viết</strong>
                            <a href="{{url('/admin/posts/create')}}" class="btn btn-outline-success pull-right">Thêm mới</a href="{{url('/admin/posts/')}}">
                        </div>
                        <div class="card-body">
                            @if(session('messages'))
                                <p class="alert alert-success">{{session('messages')}}</p>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col"  width="15%">Tiêu đề</th>
                                        <th scope="col" width="20%">Ảnh minh họa</th>
                                        <th scope="col">Nội dung</th>
                                        <th class="text-center" colspan="2" width="5%">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td>{{$dat->post_title}}</td>
                                            <td><img src="{{url('/').'/'.$dat->post_img}}" width="100" height="80"></td>
                                            <td><div class="post-content-text">{!! strip_tags(preg_replace("/<img[^>]+\>/i", "(image) ", $dat->post_content)) !!}</div></td>
                                            <td><a href="{{url('admin/posts/'.$dat->id.'/edit')}}" class="btn btn-outline-info"><i class="fa  fa-pencil"></i></a></td>
                                            <td>
                                                <form action="{{route('posts.destroy', $dat->id)}}" method="POST">
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger"><i class="fa  fa-times"></i></button>
                                                    {{csrf_field()}}
                                                </form>
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