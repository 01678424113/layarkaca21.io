<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>SafeOne | Đăng ký</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <base href="{{asset('')}}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="admin/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="admin/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="admin/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="admin/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="admin/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="admin/assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link href="admin/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-1 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 bs-reset mt-login-5-bsfix">
            <div class="login-bg" style="background-image:url(admin/assets/pages/img/login/bg1.jpg)">
                <span style="margin: 0;color: white;font-size: 50px;padding-left: 30px;font-weight: bold">Safe<span style="color: red">One</span></span>
            </div>
        </div>
        <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">

            <div class="login-content">
                <form method="POST" action="{{ route('doRegister') }}" aria-label="{{ __('Đăng ký') }}">
                    @csrf
                    <h1>Đăng Ký SafeOne Affiliate</h1>
                    <p>Đơn giản tiếp thị liên kết là một hình thức online marketing mà bạn sẽ nhận được hoa hồng khi
                        giới thiệu một khách hàng tiềm năng hoặc bán thành công một sản phẩm cho nhà cung cấp.</p>
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>Enter any username and password. </span>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text"
                                   autocomplete="off" placeholder="Username" name="username" required/></div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group"
                                   type="text" autocomplete="off" placeholder="Tên" name="name"
                                   required/></div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group"
                                   type="password" autocomplete="off" placeholder="Mật khẩu" name="password"
                                   required/></div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group"
                                   type="password" autocomplete="off" placeholder="Nhập lại mật khẩu" name="password_confirmation"
                                   required/></div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group"
                                   type="email" autocomplete="off" placeholder="Email" name="email"
                                   required/></div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group"
                                   type="text" autocomplete="off" placeholder="Số điện thoại" name="phone"
                                   required/></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="forgot-password">
                            </div>
                        </div>
                        <div class="col-sm-8 text-right">
                            <a href="{{route('login')}}" class="btn blue">Đăng nhập</a>
                            <button class="btn green" type="submit">Đăng kí</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; Keenthemes 2015</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-1 -->
<!--[if lt IE 9]>
<script src="admin/assets/global/plugins/respond.min.js"></script>
<script src="admin/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
<script src="admin/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="admin/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
<script src="admin/assets/global/plugins/jquery-validation/js/additional-methods.min.js"
        type="text/javascript"></script>
<script src="admin/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="admin/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="admin/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="admin/assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script src="admin/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="admin/assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
<script type="text/javascript">
    toastr.options = {
        closeButton: true,
        debug: false,
        positionClass: "toast-bottom-right",
        onclick: null,
        showDuration: "1000",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
    };
    @if (Session::has('error'))
        toastr['error']('{!! Session::get("error") !!}');
    @elseif(Session::has('success'))
        toastr['success']('{!! Session::get("success") !!}');
    @elseif(Session::has('warning'))
        toastr['warning']('{!! Session::get("warning") !!}');
    @endif
</script>
</body>

</html>