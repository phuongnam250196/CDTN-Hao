@extends('backend.master')
@section('title', 'Đề tài | Cập nhật')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Cập nhật </strong> Đề tài
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class="form-control-label">Tên đề tài</label>
                                    <input type="text" name="project_name" value="{{$data->project_name}}" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Ảnh minh họa</label>
                                    <input id="img" type="file" name="project_img" value="{{$data->project_img}}" class="form-control" style="display: none" onchange="changeImg(this)" ><br>
                                    @if(!empty($data->project_img))
                                    <img id="avatar" class="thumbnail" src="{{url('/').'/'.$data->project_img}}" width="100%">
                                    @else
                                        <img id="avatar" class="thumbnail" src="{{url('/uploads/images/new_seo-10-512.png')}}" width="200">
                                        
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Người hướng dẫn</label>
                                    <input type="text" name="project_instructor" value="{{$data->project_instructor}}" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Người thực hiện</label>
                                    <input type="text" name="project_confectioner" value="{{$data->project_confectioner}}" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Ngày bắt đầu</label>
                                    <input type="date" name="project_data_start" value="{{$data->project_data_start}}" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Ngày kết thúc</label>
                                    <input type="date" name="project_data_finish" value="{{$data->project_data_finish}}" placeholder="Nhập tiêu đề" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Nội dung</label>
                                    <textarea name="project_content" class="ckeditor" id="project_content" cols="30" rows="10" class="form-control">{{$data->project_content}}</textarea>
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
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Cập nhật
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