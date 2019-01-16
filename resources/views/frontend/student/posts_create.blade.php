@extends('frontend.master')
@section('title', 'Sinh viên | Tạo bài viết')
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
                                <li class="title">Viết bài</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Tiêu đề bài viết</label>
                                                <input type="text" class="form-control" name="post_title">
                                                @if($errors->has('post_title'))
                                                  <p class="help text-danger">{{ $errors->first('post_title') }}</p>
                                                @endif
                                              </div>
                                            <div class="form-group">
                                                <label class=" form-control-label">Ảnh minh họa</label> <br>
                                                <input id="img" type="file" name="post_img" class="form-control" style="display: none" onchange="changeImg(this)" >
                                                <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="200">
                                                @if($errors->has('post_img'))
                                                  <p class="help text-danger">{{ $errors->first('post_img') }}</p>
                                                @endif
                                            </div>
                                              <div class="form-group">
                                                <label class=" form-control-label">Nội dung</label>
                                                <textarea name="post_content" class="ckeditor" id="post_content" cols="30" rows="10" class="form-control"></textarea>
                                                </textarea>
                                                @if($errors->has('post_content'))
                                                  <p class="help text-danger">{{ $errors->first('post_content') }}</p>
                                                @endif
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
                                              <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Thêm mới</button>
                                                <a href="{{url('student/posts')}}" class="btn btn-secondary">Hủy bỏ</a>
                                              </div>
                                              {{csrf_field()}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jquery-click-img')
    <script src="{{asset('/frontend')}}/js/jquery/jquery-2.2.4.min.js"></script>
@stop