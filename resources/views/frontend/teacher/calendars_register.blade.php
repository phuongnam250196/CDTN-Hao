@extends('frontend.master')
@section('title', 'Giáo viên | Lịch trực')
@section('main')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        @include('frontend.navbar.nav_teacher')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Thông tin đăng ký trực</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-md-10">
                                      @if(session('messages'))
                                        <p class="alert alert-danger">{{session('messages')}}</p>
                                      @endif
                                        <form method="POST" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Tiêu đề</label>
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                            @if($errors->has('title'))
                                              <p class="help text-danger">{{ $errors->first('title') }}</p>
                                            @endif
                                          </div>
                                          <div class="form-group">
                                            <label>Ngày mượn</label>
                                            <input type="date" class="form-control" name="date_borrow" value="{{old('date_borrow')}}">
                                            @if($errors->has('date_borrow'))
                                              <p class="help text-danger">{{ $errors->first('date_borrow') }}</p>
                                            @endif
                                          </div>
                                          {{-- <div class="form-group">
                                            <label>Thời gian bắt đầu</label>
                                            <input type="time" class="form-control" name="start">
                                          </div>
                                          <div class="form-group">
                                            <label>Thời gian kết thúc</label>
                                            <input type="time" class="form-control" name="end">
                                          </div> --}}
                                          <div class="form-group">
                                            <label>Ca trông</label>
                                            <select name="ca" class="form-control">
                                              <option value="">Chọn ca trực</option>
                                              <option value="1">Ca 1-2</option>
                                              <option value="2">Ca 3-4-5</option>
                                              <option value="3">Ca 6-7</option>
                                              <option value="4">Ca 8-9</option>
                                              <option value="5">Buổi sáng</option>
                                              <option value="6">Buổi Chiều</option>
                                              <option value="7">Cả ngày</option>
                                            </select>
                                            @if($errors->has('ca'))
                                              <p class="help text-danger">{{ $errors->first('ca') }}</p>
                                            @endif
                                          </div>
                                          
                                          {{-- <div class="form-group">
                                            <label>Nhận xét</label>
                                            <textarea name="description" id="" class="form-control" cols="30" rows="4">{{old('description')}}</textarea>
                                          </div> --}}
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                                            <a href="{{url('teacher/calendars')}}" class="btn btn-secondary">Hủy bỏ</a>
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