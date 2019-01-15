@extends('frontend.master')
@section('title', 'Đăng nhập')
@section('main')
	<section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Đăng nhập để sử dụng hệ thống</h5>
                        <!-- Contact Form -->
                        <form method="post">
                            @if(session('error'))
                                <p class="alert alert-danger">{{session('error')}}</p>
                            @endif
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Tài khoản</label>
                                        @if($errors->has('name'))
                                          <p class="help text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="password" name="password" id="password" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mật khẩu</label>
                                        @if($errors->any())
                                          <p class="help text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group form-check" style="padding-left: 2.25rem; width:100%;" >
                                    <div class="d-flex" >
                                        <div class="text-left">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="remember" type="checkbox" value="nho"> Ghi nhớ
                                            </label>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="text-right">Quên mật khẩu</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Đăng nhập</button>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection