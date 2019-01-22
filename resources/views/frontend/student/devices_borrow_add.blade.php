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
                                <li class="title">Bạn đang xem thiết bị: {{$data->device_name}}</li>
                            </ul>

                            <div >
                                <div class="info">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Loại</label>
                                            <select name="type" class="form-control">
                                                <option value="">Chọn loại thiết bị</option>
                                                <option value="Cảm biến nhiệt">Cảm biến nhiệt</option>
                                                <option value="Cảm biến ẩm">Cảm biến ẩm</option>
                                            </select>
                                            @if($errors->has('type'))
                                              <p class="help text-danger">{{ $errors->first('type') }}</p>
                                            @endif
                                          </div>
                                          <div class="form-group">
                                            <label>Số lượng mượn</label>
                                            <input type="number" name="count" class="form-control">
                                            @if($errors->has('count'))
                                              <p class="help text-danger">{{ $errors->first('count') }}</p>
                                            @endif
                                          </div>
                                        
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Mượn</button>
                                            <a href="{{url('student/devices')}}" class="btn btn-secondary">Hủy bỏ</a>
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
@endsection