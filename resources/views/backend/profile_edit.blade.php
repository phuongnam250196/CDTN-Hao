@extends('backend.master')
@section('title', 'Profile | Cập nhật')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Cập nhật </strong> thông tin cá nhân
                        </div>
                        <form  method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class="form-control-label">Tài khoản</label>
                                    <input type="text" name="post_title" value="{{$data->email}}" placeholder="Nhập tiêu đề" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Ảnh minh họa</label>
                                    {{-- <input type="file" name="post-img" class="form-control"> --}}
                                    <input id="img" type="file" name="avatar" value="{{$data->avatar}}" class="form-control" style="display: none" onchange="changeImg(this)" >
                                    <img id="avatar" class="thumbnail" src="{{url('/').'/'.$data->avatar}}" width="100%">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nội dung</label>
                                    <textarea name="content" class="ckeditor" id="content" cols="30" rows="10" class="form-control">{{$data->content}}
                                    </textarea>
                                   <script type="text/javascript">
                                    var editor = CKEDITOR.replace('content',{
                                      language:'vi',
                                      filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
                                      filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
                                      filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                      filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                    });
                                  </script>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                                </button>
                                {{-- <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Hủy bỏ
                                </button> --}}
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
@stop