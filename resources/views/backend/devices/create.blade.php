@extends('backend.master')
@section('title', 'Thiết bị | Thêm mới')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">                   
                <div class=" col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thêm mới </strong> Thiết bị
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class="form-control-label">Mã thiết bị</label>
                                    <input type="text" name="device_code" placeholder="VD: TB01" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Tên thiết bị</label>
                                    <input type="text" name="device_name" placeholder="VD: Dell inprision" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Số lượng</label>
                                    <input type="text" name="device_count" placeholder="VD: 12" class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Loại</label>
                                    <input type="text" name="device_type"  class="form-control">
                                    {{-- <span class="help-block">Please enter your email</span> --}}
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Mô tả</label>
                                    <textarea name="device_description" class="ckeditor" id="device_description" cols="30" rows="10" class="form-control"></textarea>
                                   <script type="text/javascript">
                                    var editor = CKEDITOR.replace('device_description',{
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
                                <a href="{{url('admin/devices')}}" class="btn btn-danger btn-sm">
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