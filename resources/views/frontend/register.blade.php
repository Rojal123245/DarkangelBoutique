<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset("admin/css/bootstrap.min.css")}}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/wave/waves.min.css')}}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/notika-custom-icon.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

{{ Form::open(['route'=>'front.saveRegister']) }}
@csrf
<div class="login-content">
    <div class="nk-block toggled" id="l-register">
        <div class="nk-form">
            <div class="input-group">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" name="fullname" placeholder="FullName" required>
                </div>
            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-map"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>
            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-phone"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" name="contactno" placeholder="Contact Number" required>
                </div>
            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                </div>
            </div>

            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                <div class="nk-int-st">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            </div>
            <div class="input-group mg-t-15">
            <button class="btn btn-success pull-right" type="submit" style="margin-top: 15px !important;">
                Submit
            </button>
            </div>
            <a href="{{route('front.login')}}"
               class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
        </div>

        <div class="nk-navigation rg-ic-stl">
            <a href="{{route('front.login')}}" data-ma-block="#l-login" ><i
                    class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
            <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
        </div>
    </div>
</div>
{{ Form::close() }}


<!-- jquery
    ============================================ -->
<script src="{{asset('admin/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('admin/js/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('admin/js/jquery-price-slider.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('admin/js/meanmenu/jquery.meanmenu.js')}}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('admin/js/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/js/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('admin/js/counterup/counterup-active.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/js/sparkline/sparkline-active.js')}}"></script>
<!-- flot JS
    ============================================ -->
<script src="{{asset('admin/js/flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/js/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin/js/flot/flot-active.js')}}"></script>
<!-- knob JS
    ============================================ -->
<script src="{{asset('admin/js/knob/jquery.knob.js')}}"></script>
<script src="{{asset('admin/js/knob/jquery.appear.js')}}"></script>
<script src="{{asset('admin/js/knob/knob-active.js')}}"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{asset('admin/js/chat/jquery.chat.js')}}"></script>
<!--  wave JS
    ============================================ -->
<script src="{{asset('admin/js/wave/waves.min.js')}}"></script>
<script src="{{asset('admin/js/wave/wave-active.js')}}"></script>
<!-- icheck JS
    ============================================ -->
<script src="{{asset('admin/js/icheck/icheck.min.js')}}"></script>
<script src="{{asset('admin/js/icheck/icheck-active.js')}}"></script>
<!--  todo JS
    ============================================ -->
<script src="{{asset('admin/js/todo/jquery.todo.js')}}"></script>
<!-- Login JS
    ============================================ -->
<script src="{{asset('admin/js/login/login-action.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('admin/js/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>
