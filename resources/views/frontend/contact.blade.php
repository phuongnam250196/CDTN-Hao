@extends('frontend.master')
@section('title', 'Liên hệ')
@section('main')
	<section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    @if(session('messages'))
                        <p class="alert alert-success">{{session('messages')}}</p>
                    @endif
                    <div class="contact-form">
                        <h5>Nhập thông tin liên hệ</h5>
                        <!-- Contact Form -->
                        <form method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Họ & tên</label>
                                        @if($errors->has('name'))
                                          <p class="help text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                        @if($errors->has('email'))
                                          <p class="help text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nội dung</label>
                                        @if($errors->has('message'))
                                          <p class="help text-danger">{{ $errors->first('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Gửi</button>
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