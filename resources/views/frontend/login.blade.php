@extends('frontend.master')
@section('title', 'Liên hệ')
@section('main')
	<section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Đăng nhập để sử dụng hệ thống</h5>
                        <!-- Contact Form -->
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Tài khoản</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Mật khẩu</label>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection