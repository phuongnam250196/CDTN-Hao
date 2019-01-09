@extends('backend.master')
@section('title', 'Bài viết | Thêm mới')
@section("main")
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">                   
                    
                    <div class=" col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong>Thêm mới </strong> Bài viết
                            </div>
                            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label class="form-control-label">Tiêu đề</label>
                                        <input type="text" name="post_title" placeholder="Nhập tiêu đề" class="form-control">
                                        {{-- <span class="help-block">Please enter your email</span> --}}
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Ảnh minh họa</label>
                                        {{-- <input type="file" name="post-img" class="form-control"> --}}
                                        <input id="img" type="file" name="post_img" class="form-control" style="display: none" onchange="changeImg(this)" >
                                        <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="100%">
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Nội dung</label>
                                        <textarea name="post_content" class="ckeditor" id="post_content" cols="30" rows="10" class="form-control"></textarea>
                                        </textarea>
                                       <script type="text/javascript">
                                        var editor = CKEDITOR.replace('post_content',{
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
                                        <i class="fa fa-dot-circle-o"></i> Thêm mới
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