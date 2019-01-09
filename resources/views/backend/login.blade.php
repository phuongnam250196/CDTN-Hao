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
    <title>Trang đăng nhập</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="backend/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="backend/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="backend/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="backend/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="backend/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="backend/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                @foreach($errors as $err)
                        <p>{{$err}}</p>
                    @endforeach
                    @if(session("error"))
                        <p class="alert alert-danger">{{session('error')}}</p>
                    @endif
                <div class="login-form">
                    
                    <form method="POST">
                        <div class="form-group">
                            <label>Tài khoản</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Tài khoản">
                            @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                            @if ($errors->has('password'))
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="nho" value="nho"> Ghi nhớ
                            </label>
                            <label class="pull-right">
                                <a href="#">Quên mật khẩu?</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Đăng nhập</button>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="backend/vendors/jquery/dist/jquery.min.js"></script>
    <script src="backend/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="backend/assets/js/main.js"></script>
</body>

</html>
