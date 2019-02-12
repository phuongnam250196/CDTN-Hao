@extends('backend.master')
@section('title', 'Đề tài | Thêm mới')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thêm mới </strong> Đề tài
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class="form-control-label">Tên đề tài</label>
                                    <input type="text" name="project_name" placeholder="VD: Nghiên cứu HTML & CSS" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Ảnh minh họa</label>
                                    {{-- <input type="file" name="post-img" class="form-control"> --}}
                                    <input id="img" type="file" name="project_img" class="form-control" style="display: none" onchange="changeImg(this)" ><br>
                                    <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="200">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Người hướng dẫn</label>
                                    <input type="text" name="project_instructor" placeholder="VD: GV. Mai Thúy Nga" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Người thực hiện</label>
                                    <input type="text" name="project_confectioner" placeholder="VD: Tạ Xuân Hào" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Ngày bắt đầu</label>
                                    <input type="date" name="project_data_start" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Ngày kết thúc</label>
                                    <input type="date" name="project_data_finish" placeholder="Nhập tiêu đề" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nội dung</label>
                                    <textarea name="project_content" class="ckeditor" id="project_content" cols="30" rows="10" class="form-control"></textarea>
                                   <script type="text/javascript">
                                    var editor = CKEDITOR.replace('project_content',{
                                      language:'vi',
                                      filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
                                      filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
                                      filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                      filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                    });
                                  </script>
                                </div>
                                {{-- <div class="form-group">
                                    <label class=" form-control-label">Thư viện ảnh</label>
                                    <input required type="file" class="form-control" name="project_gallery[]" placeholder="address" multiple>
                                </div> --}}
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Thêm mới
                                </button>
                                <a href="{{url('admin/projects')}}" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Hủy bỏ
                                </a>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div>
@stop