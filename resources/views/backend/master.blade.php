<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('/backend')}}/apple-icon.png">
    <link rel="shortcut icon" href="{{asset('/backend')}}/favicon.ico">

    <link rel="stylesheet" href="{{asset('/backend')}}/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{asset('/backend')}}/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="{{asset('/backend')}}/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    @yield('style-rewrite')
    <script src="{{asset('/backend')}}/vendors/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('/backend')}}/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{asset('/backend')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('/backend')}}/assets/js/main.js"></script>


    <script src="{{asset('/backend')}}/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="{{asset('/backend')}}/assets/js/dashboard.js"></script>
    <script src="{{asset('/backend')}}/assets/js/widgets.js"></script>
    <script src="{{asset('/backend')}}/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="{{asset('/backend')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="{{asset('/backend')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="{{asset('Backend')}}/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="{{asset('Backend')}}/ckfinder/ckfinder.js"></script>
    <style>
        .post-content-text {
            text-align: justify;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 4;
            display: -webkit-box;
            -webkit-box-orient: vertical;
        }
    </style>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><p class="text-uppercase" style="font-size: 24px !important;">Quản lý đồ án</p></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('/backend')}}/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="@if(Request::is('admin')) active @endif">
                        <a href="{{url("/admin")}}"> <i class="menu-icon fa fa-dashboard"></i>Trang chủ </a>
                    </li>
                    <h3 class="menu-title">Các chức năng chính</h3><!-- /.menu-title -->
                    <li class="@if(Request::is('admin/posts') || Request::is('admin/posts/*') || Request::is('admin/post/*')) active @endif">
                        <a href="{{url('/admin/posts/')}}"> <i class="menu-icon fa fa-laptop"></i>Quản lý bài viết</a>
                    </li>
                    <li class="@if(Request::is('admin/calendar')) active @endif">
                        <a href="{{url('/admin/calendar/')}}" class="dropdown-toggle" > <i class="menu-icon fa fa-table"></i>Quản lý lịch trực</a>
                    </li>
                    <li class="@if(Request::is('admin/devices') || Request::is('admin/devices/*')) active @endif">
                        <a href="{{url('/admin/devices/')}}" class="dropdown-toggle"> <i class="menu-icon fa fa-th"></i>Quản lý trang thiết bị</a>
                    </li>
                    <li class="@if(Request::is('admin/projects') || Request::is('admin/projects/*')) active @endif">
                        <a href="{{url('/admin/projects/')}}" class="dropdown-toggle"> <i class="menu-icon fa fa-th"></i>Quản lý đồ án</a>
                    </li>
                    <li class="@if(Request::is('admin/students') || Request::is('admin/students/*')) active @endif">
                        <a href="{{url('/admin/students/')}}"> <i class="menu-icon fa fa-th"></i>Quản lý sinh viên</a>
                    </li>
                    <li class="@if(Request::is('admin/teachers') || Request::is('admin/teachers/*')) active @endif">
                        <a href="{{url('/admin/teachers/')}}"> <i class="menu-icon fa fa-th"></i>Quản lý giáo viên</a>
                    </li>

                    <h3 class="menu-title">Các chức năng phụ</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#"> <i class="menu-icon fa fa-tasks"></i>Quản lý khoa</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('/backend')}}/images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('/backend')}}/images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('/backend')}}/images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('/backend')}}/images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{url('/').'/'.Auth::user()->avatar}}" width="100" height="32" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{asset('/admin/profile')}}"><i class="fa fa-user"></i> My Profile</a>
                            <a class="nav-link" href="{{asset('/logout')}}"><i class="fa fa-power-off"></i> Đăng xuất</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select" style="max-width: 100%;">
                        <p>Xin chào: {{Auth::user()->email}}</p>
                    </div>

                </div>
            </div>
        </header>
        <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1 class="text-capitalize">@yield('title')</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
        @yield('main')
        
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    <script>
        // js chon anh
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    jQuery('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        jQuery(document).ready(function($){
            jQuery('#avatar').click(function($){
                jQuery('#img').click();
            });
        });
    </script>
    @yield('script-rewrite')

</body>

</html>
