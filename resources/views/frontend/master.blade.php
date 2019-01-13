<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>@yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('/frontend')}}/img/core-img/tlu.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('/frontend')}}/img/core-img/tlu.png" width="40" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item @if(Request::is('intro')) active @endif" >
                                    <a class="nav-link text-uppercase" href="{{url('/intro')}}">Giới thiệu</a>
                                </li>
                                <li class="nav-item @if(Request::is('news')) active @endif">
                                    <a class="nav-link text-uppercase" href="{{url('/news')}}">Bài viết</a>
                                </li>
                                <li class="nav-item @if(Request::is('device')) active @endif">
                                    <a class="nav-link text-uppercase" href="{{url('/device')}}">Trang thiết bị</a>
                                </li>
                                <li class="nav-item @if(Request::is('project')) active @endif">
                                    <a class="nav-link text-uppercase" href="{{url('/project')}}">Đồ án</a>
                                </li>
                                <li class="nav-item @if(Request::is('contact')) active @endif">
                                    <a class="nav-link text-uppercase" href="{{url('/contact')}}">Liên hệ</a>
                                </li>
                                <li class="nav-item @if(Request::is('user/login')) active @endif">
                                    <a class="nav-link text-uppercase" href="{{url('/user/login')}}">Đăng nhập</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Tìm kiếm ít thôi">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url({{asset('/frontend')}}/img/blog-img/dhtl.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url({{asset('/frontend')}}/img/blog-img/dhtl2.jpg);"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Đậu Minh Quân - Hệ thống Đại học doanh nghiệp TLU</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Tạo Xuân Hào - Hệ thống quản lý thông tin đồ án và phòng LAB</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Đặng Hồng Hùng - Website thương mại điện tử</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Hoàng Đình Tuyển - Hệ thống quản lý cây gia phả dòng họ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <!-- cắt tại đây -->
    @yield('main')
    <!-- end cắt tại đây -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="{{url('/')}}"><img src="{{asset('/frontend')}}/img/core-img/tlu.png" width="40" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Chào mừng bạn đến với website của chúng tôi!</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="{{url('/')}}">Trang chủ</a></li>
                            <li><a href="{{url('/intro')}}">Giới thiệu</a></li>
                            <li><a href="{{url('/news')}}">Bài viết</a></li>
                            <li><a href="{{url('/device')}}">Trang thiết bị</a></li>
                            <li><a href="{{url('/project')}}">Đố án</a></li>
                            <li><a href="{{url('/contact')}}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Fanpage</h5>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=223986208267206&autoLogAppEvents=1';
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-page" data-href="https://www.facebook.com/thanglonguniversity/" data-tabs="timeline" data-height="190" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thanglonguniversity/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thanglonguniversity/">Thang Long University</a></blockquote></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('/frontend')}}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('/frontend')}}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="{{asset('/frontend')}}/js/plugins.js"></script>
    <!-- Active js -->
    <script src="{{asset('/frontend')}}/js/active.js"></script>

</body>

</html>