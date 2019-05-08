{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<title>E-Library</title>--}}

{{--<!-- Fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">--}}


{{--<!-- Styles -->--}}
{{--<style>--}}


{{--.top-right {--}}
{{--position: absolute;--}}
{{--right: 300px;--}}
{{--top: 18px;--}}

{{--}--}}



{{--</style>--}}
{{--</head>--}}
{{--<body>--}}



{{--<div class="top-right links ">--}}
{{--<a href="{{ route('login') }}"><i class="far fa-user"></i>Login</a>--}}
{{--<a href="{{ route('register') }}">Register</a>--}}
{{--</div>--}}

{{--<div>search bar....</div>--}}
{{--<div>slide image....</div>--}}
{{--<div>important book /.....</div>--}}
{{--<div>slide book....</div>--}}
{{--<div>second slide book...</div>--}}
{{--<div>footer....</div>--}}


{{--</body>--}}
{{--</html>--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<!-- CSRF Token -->--}}
{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--<title>eLibery</title>--}}

{{--<!-- Scripts -->--}}
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--<script src="https://js.stripe.com/v3/"></script>--}}


{{--<!-- Fonts -->--}}
{{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">--}}
{{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

{{--<style>--}}
{{--.header {--}}
{{--background: #e9605c;--}}
{{--height: 100px;--}}
{{--}--}}

{{--.footer {--}}
{{--height: auto;--}}
{{--padding-bottom: 30px;--}}
{{--position: relative;--}}
{{--width: 100%;--}}
{{--color: #fff;--}}
{{--border-bottom: 1px solid #CCCCCC;--}}
{{--border-top: 1px solid #DDDDDD;--}}
{{--background: #00003E;--}}
{{--background: -webkit-linear-gradient(to right, #31BDE6, #00003E);--}}
{{--background: linear-gradient(to right, #31BDE6, #00003E);--}}
{{--}--}}

{{--.footer h3 {--}}
{{--border-bottom: 1px solid #BAC1C8;--}}
{{--color: #fff;--}}
{{--font-size: 18px;--}}
{{--font-weight: 600;--}}
{{--line-height: 27px;--}}
{{--padding: 40px 0 10px;--}}
{{--text-transform: uppercase;--}}
{{--}--}}

{{--.footer ul {--}}
{{--font-size: 13px;--}}
{{--list-style-type: none;--}}
{{--margin-left: 0;--}}
{{--padding-left: 0;--}}
{{--margin-top: 15px;--}}
{{--color: #7F8C8D;--}}
{{--}--}}

{{--.footer ul li a {--}}
{{--padding: 0 0 5px 0;--}}
{{--display: block;--}}
{{--}--}}

{{--.footer a {--}}
{{--color: #78828D;--}}
{{--color: #fff;--}}
{{--}--}}

{{--.supportLi h4 {--}}
{{--font-size: 20px;--}}
{{--font-weight: lighter;--}}
{{--line-height: normal;--}}
{{--margin-bottom: 0 !important;--}}
{{--padding-bottom: 0;--}}
{{--}--}}

{{--.subscribe-btn .btn {--}}
{{--border: medium none;--}}
{{--border-radius: 4px;--}}
{{--display: inline-block;--}}
{{--height: 40px;--}}
{{--padding: 0;--}}
{{--width: 100%;--}}
{{--color: #fff;--}}
{{--margin-top: 10px;--}}
{{--}--}}

{{--.subscribe-btn {--}}
{{--overflow: hidden;--}}
{{--}--}}

{{--.social li {--}}
{{--border: 2px solid #B5B5B5;--}}
{{---webkit-border-radius: 50%;--}}
{{---moz-border-radius: 50%;--}}
{{---o-border-radius: 50%;--}}
{{---ms-border-radius: 50%;--}}
{{--border-radius: 50%;--}}
{{--float: left;--}}
{{--height: 36px;--}}
{{--line-height: 36px;--}}
{{--margin: 0 8px 0 0;--}}
{{--padding: 0;--}}
{{--text-align: center;--}}
{{--width: 36px;--}}
{{--transition: all 0.5s ease 0s;--}}
{{---moz-transition: all 0.5s ease 0s;--}}
{{---webkit-transition: all 0.5s ease 0s;--}}
{{---ms-transition: all 0.5s ease 0s;--}}
{{---o-transition: all 0.5s ease 0s;--}}
{{--}--}}

{{--.social li a {--}}
{{--color: #EDEFF1;--}}
{{--}--}}

{{--.social li:hover {--}}
{{--border: 2px solid #2c3e50;--}}
{{--background: #2c3e50;--}}
{{--}--}}

{{--.social li a i {--}}
{{--font-size: 16px;--}}
{{--margin: 0 0 0 5px;--}}
{{--color: #EDEFF1 !important;--}}
{{--}--}}

{{--.carousel-item {--}}

{{--height: 400px;--}}
{{--background: no-repeat center center scroll;--}}
{{---webkit-background-size: cover;--}}
{{---moz-background-size: cover;--}}
{{---o-background-size: cover;--}}
{{--background-size: cover;--}}
{{--}--}}

{{--.name {--}}

{{--margin-top: 25px;--}}
{{--margin-left: 50px;--}}
{{--}--}}

{{--.btn {--}}
{{--margin-top: 30px;--}}
{{--border-radius: 50px;--}}
{{--background: #e9605c;--}}
{{--}--}}
{{--.StripeElement {--}}
{{--box-sizing: border-box;--}}

{{--height: 40px;--}}

{{--padding: 10px 12px;--}}

{{--border: 1px solid transparent;--}}
{{--border-radius: 4px;--}}
{{--background-color: white;--}}

{{--box-shadow: 0 1px 3px 0 #e6ebf1;--}}
{{---webkit-transition: box-shadow 150ms ease;--}}
{{--transition: box-shadow 150ms ease;--}}
{{--}--}}

{{--.StripeElement--focus {--}}
{{--box-shadow: 0 1px 3px 0 #cfd7df;--}}
{{--}--}}

{{--.StripeElement--invalid {--}}
{{--border-color: #fa755a;--}}
{{--}--}}

{{--.StripeElement--webkit-autofill {--}}
{{--background-color: #fefde5 !important;--}}
{{--}--}}
{{--</style>--}}
{{--</head>--}}

{{--<body>--}}
{{--top bar--}}
{{--<div id="app">--}}
{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--<div class="container">--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--eLibrary--}}
{{--</a>--}}
{{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--aria-label="{{ __('Toggle navigation') }}">--}}
{{--<span class="navbar-toggler-icon"></span>--}}
{{--</button>--}}

{{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="navbar-nav mr-auto">--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" data-toggle="modal" data-target="#myModal" href=""><i class="fas fa-phone"></i>contacts us</a>                    </li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="#"><i class="fas fa-users"></i>About us</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--<ul class="navbar-nav ml-auto">--}}
{{--<!-- Authentication Links -->--}}
{{--@guest--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="{{ route('login') }}"><i class="far fa-user"></i>{{ __('Login') }}--}}
{{--</a>--}}
{{--</li>--}}
{{--@if (Route::has('register'))--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="{{ route('register') }}"><i--}}
{{--class="fas fa-sign-in-alt"></i>{{ __('Register') }}</a>--}}
{{--</li>--}}
{{--@endif--}}
{{--@else--}}
{{--<li class="nav-item dropdown">--}}
{{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--{{ __('Logout') }}--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--style="display: none;">--}}
{{--@csrf--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--@endguest--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" href="#"><i class="far fa-file-alt"></i>{{ __('Order History') }}</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}
{{--</div>--}}
{{--<div class="container ">--}}
{{--@if(Session()->has('success'))--}}
{{--<p class="alert alert-success">--}}
{{--{{Session()->get('success')}}--}}
{{--</p>--}}
{{--@endif--}}
{{--</div>--}}
{{--end top bar--}}
{{--search bar--}}
{{--<div class="header col-12">--}}
{{--<div class="col-3"></div>--}}
{{--<div class="container float-right h-100 col-6">--}}
{{--<div class="d-flex justify-content-center ">--}}
{{--<button type="button" class="btn btn-info" data-toggle="dropdown" href="{{url('cart')}}">--}}
{{--<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>--}}
{{--</button>--}}
{{--@if(session('cart')==0)--}}
{{--<a class="btn btn-primary"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart is--}}
{{--empty <span class="badge badge-pill badge-danger"></span></a>--}}
{{--@else--}}
{{--<a href="{{ url('cart') }}" class="btn btn-primary"> <i class="fa fa-shopping-cart"--}}
{{--aria-hidden="true"></i> Cart <span--}}
{{--class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span></a>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class=" name col-3">--}}
{{--<h2><p class="font-italic">e-Libeary</p></h2>--}}
{{--</div>--}}
{{--</div>--}}
{{--<br>--}}
{{--Checkout Form--}}

{{--<!-- Navbar -->--}}

{{--<!--Main layout-->--}}
{{--<main class="mt-5 pt-4">--}}
{{--<div class="container wow fadeIn">--}}

{{--<!-- Heading -->--}}
{{--<h2 class="my-5 h2 text-center">PayMent form</h2>--}}

{{--<!--Grid row-->--}}
{{--<div class="row">--}}

{{--<!--Grid column-->--}}
{{--<div class="col-md-8 mb-4">--}}

{{--<!--Card-->--}}
{{--<div class="card">--}}
{{--<!--Card content-->--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 col-md-offset-3">--}}
{{--<div class="panel panel-default credit-card-box">--}}
{{--<div class="panel-heading display-table" >--}}
{{--<div class="row display-tr" >--}}
{{--<h3 class="panel-title display-td" >Payment Details</h3>--}}
{{--<div class="display-td" >--}}
{{--<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="panel-body">--}}

{{--@if (Session::has('success'))--}}
{{--<div class="alert alert-success text-center">--}}
{{--<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>--}}
{{--<p>{{ Session::get('success') }}</p>--}}
{{--</div>--}}
{{--@endif--}}

{{--<form role="form" action="{{ url('Oder_complete') }}" method="post" class="require-validation"--}}
{{--data-cc-on-file="false"--}}
{{--data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"--}}
{{--id="payment-form">--}}
{{--@csrf--}}

{{--<div class='form-row row'>--}}
{{--<div class='col-xs-12 form-group required'>--}}
{{--<label class='control-label'>Name on Card</label> <input--}}
{{--class='form-control' size='4' type='text'>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class='form-row row'>--}}
{{--<div class='col-xs-12 form-group card required'>--}}
{{--<label class='control-label'>Card Number</label> <input--}}
{{--autocomplete='off' class='form-control card-number' size='20'--}}
{{--type='text'>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class='form-row row'>--}}
{{--<div class='col-xs-12 col-md-4 form-group cvc required'>--}}
{{--<label class='control-label'>CVC</label> <input autocomplete='off'--}}
{{--class='form-control card-cvc' placeholder='ex. 311' size='4'--}}
{{--type='text'>--}}
{{--</div>--}}
{{--<div class='col-xs-12 col-md-4 form-group expiration required'>--}}
{{--<label class='control-label'>Expiration Month</label> <input--}}
{{--class='form-control card-expiry-month' placeholder='MM' size='2'--}}
{{--type='text'>--}}
{{--</div>--}}
{{--<div class='col-xs-12 col-md-4 form-group expiration required'>--}}
{{--<label class='control-label'>Expiration Year</label> <input--}}
{{--class='form-control card-expiry-year' placeholder='YYYY' size='4'--}}
{{--type='text'>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class='form-row row'>--}}
{{--<div class='col-md-12 error form-group hide'>--}}
{{--<div class='alert-danger alert'>Please correct the errors and try--}}
{{--again.</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="row">--}}
{{--<div class="col-xs-12">--}}

{{--<button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now </button>--}}
{{--</div>--}}
{{--</div>--}}

{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4 mb-4">--}}

{{--<!-- Heading -->--}}
{{--<h4 class="d-flex justify-content-between align-items-center mb-3">--}}
{{--<span class="text-muted">Your cart</span>--}}
{{--@if(session('cart')==0)--}}
{{--<span class="badge badge-secondary badge-pill">0</span>--}}
{{--@else--}}
{{--<span class="badge badge-secondary badge-pill">{{ count(session('cart')) }}</span>--}}
{{--@endif--}}
{{--</h4>--}}

{{--<!-- Cart -->--}}
{{--<?php $total = 0 ?>--}}

{{--@if(session('cart'))--}}
{{--@foreach(session('cart') as $id => $details)--}}

{{--<?php $total += $details['price'] * $details['quantity'] ?>--}}
{{--<ul class="list-group mb-3 z-depth-1">--}}
{{--<li class="list-group-item d-flex justify-content-between lh-condensed">--}}
{{--<div>--}}
{{--<h6 class="my-0"><img src=" {{ asset('images/'.$details['photo'])}}" width="100" height="100" class="img-responsive"/></h6>--}}
{{--<small class="text-muted">{{ $details['name'] }}</small>--}}
{{--</div>--}}
{{--<span class="text-muted">Rs{{ $details['price'] }}</span>--}}
{{--</li>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--<li class="list-group-item d-flex justify-content-between">--}}
{{--<span>Total </span>--}}
{{--<strong>Rs{{ $total }}</strong>--}}
{{--</li>--}}
{{--</ul>--}}
{{--<!-- Cart -->--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</main>--}}



{{--</form>--}}
{{--End Checkout Form--}}
{{--footer--}}
{{--<div>--}}
{{--<br/><br/><br/><br/>--}}
{{--<footer>--}}
{{--<div class="footer" id="footer">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">--}}
{{--<h3> About us</h3>--}}
{{--<ul>--}}
{{--<li><a href="#"> Product 1</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">--}}
{{--<h3> Contact us </h3>--}}
{{--<ul>--}}
{{--<li><a href="#"> Services 1 </a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">--}}
{{--<h3> Desigen By </h3>--}}
{{--<ul>--}}
{{--<li>--}}
{{--<div class="input-append subscribe-btn text-center">--}}
{{--<h5>Azeem Tahir</h5>--}}
{{--</div>--}}
{{--</li>--}}
{{--</ul>--}}

{{--</div>--}}
{{--<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6" align="left">--}}
{{--<h3> social</h3>--}}
{{--<ul class="social">--}}
{{--<li><a href="#"> <i class="fab fa-facebook-square"></i></a></li>--}}
{{--<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>--}}
{{--<li><a href="#"> <i class="fab fa-google"></i> </a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6" align="left">--}}
{{--<h3> payment methods</h3>--}}
{{--<ul class="social">--}}
{{--<li><a href="#"> <img style="margin-right: 5px; " src="" alt="" title=""></a></li>--}}
{{--<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>--}}
{{--<li><a href="#"> <i class="fab fa-google"></i> </a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</footer>--}}
{{--</div>--}}
{{--end footer--}}
{{--</body>--}}
{{--<script type="text/javascript" src="https://js.stripe.com/v2/"></script>--}}

{{--<script type="text/javascript">--}}
{{--$(function() {--}}
{{--var $form         = $(".require-validation");--}}
{{--$('form.require-validation').bind('submit', function(e) {--}}
{{--var $form         = $(".require-validation"),--}}
{{--inputSelector = ['input[type=email]', 'input[type=password]',--}}
{{--'input[type=text]', 'input[type=file]',--}}
{{--'textarea'].join(', '),--}}
{{--$inputs       = $form.find('.required').find(inputSelector),--}}
{{--$errorMessage = $form.find('div.error'),--}}
{{--valid         = true;--}}
{{--$errorMessage.addClass('hide');--}}

{{--$('.has-error').removeClass('has-error');--}}
{{--$inputs.each(function(i, el) {--}}
{{--var $input = $(el);--}}
{{--if ($input.val() === '') {--}}
{{--$input.parent().addClass('has-error');--}}
{{--$errorMessage.removeClass('hide');--}}
{{--e.preventDefault();--}}
{{--}--}}
{{--});--}}

{{--if (!$form.data('cc-on-file')) {--}}
{{--e.preventDefault();--}}
{{--Stripe.setPublishableKey($form.data('stripe-publishable-key'));--}}
{{--Stripe.createToken({--}}
{{--number: $('.card-number').val(),--}}
{{--cvc: $('.card-cvc').val(),--}}
{{--exp_month: $('.card-expiry-month').val(),--}}
{{--exp_year: $('.card-expiry-year').val()--}}
{{--}, stripeResponseHandler);--}}
{{--}--}}

{{--});--}}

{{--function stripeResponseHandler(status, response) {--}}
{{--if (response.error) {--}}
{{--$('.error')--}}
{{--.removeClass('hide')--}}
{{--.find('.alert')--}}
{{--.text(response.error.message);--}}
{{--} else {--}}
{{--// token contains id, last4, and card type--}}
{{--var token = response['id'];--}}
{{--// insert the token into the form so it gets submitted to the server--}}
{{--$form.find('input[type=text]').empty();--}}
{{--$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");--}}
{{--$form.get(0).submit();--}}
{{--}--}}
{{--}--}}

{{--});--}}
{{--</script>--}}
{{--<!-- The Modal -->--}}
{{--<div class="modal" id="myModal">--}}
{{--<div class="modal-dialog">--}}
{{--<div class="modal-content">--}}

{{--<!-- Modal Header -->--}}
{{--<div class="modal-header">--}}
{{--<h4 class="modal-title"><i class="fas fa-phone"></i>contacts us</h4>--}}
{{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--</div>--}}
{{--<!-- Modal body -->--}}
{{--<div class="modal-body">--}}
{{--<br>--}}
{{--<label>Name :</label>--}}
{{--<strong>Azeem Tahir</strong>--}}
{{--<br>--}}
{{--<label>Phone #</label>--}}
{{--<strong>03034497159</strong>--}}
{{--<br>--}}
{{--<label>E-mail :</label>--}}
{{--<strong>Azeem.tahir.ch@gmail.com</strong>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}

{{--</html>--}}
{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--<title>E-Library</title>--}}

{{--<!-- Fonts -->--}}
{{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">--}}


{{--<!-- Styles -->--}}
{{--<style>--}}


{{--.top-right {--}}
{{--position: absolute;--}}
{{--right: 300px;--}}
{{--top: 18px;--}}

{{--}--}}



{{--</style>--}}
{{--</head>--}}
{{--<body>--}}



{{--<div class="top-right links ">--}}
{{--<a href="{{ route('login') }}"><i class="far fa-user"></i>Login</a>--}}
{{--<a href="{{ route('register') }}">Register</a>--}}
{{--</div>--}}

{{--<div>search bar....</div>--}}
{{--<div>slide image....</div>--}}
{{--<div>important book /.....</div>--}}
{{--<div>slide book....</div>--}}
{{--<div>second slide book...</div>--}}
{{--<div>footer....</div>--}}


{{--</body>--}}
{{--</html>--}}
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eLibery</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.stripe.com/v3/"></script>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    <style>
        .panel-title {
            display: inline;
            font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
        .header {
            background: #e9605c;
            height: 100px;
        }

        .footer {
            height: auto;
            padding-bottom: 30px;
            position: relative;
            width: 100%;
            color: #fff;
            border-bottom: 1px solid #CCCCCC;
            border-top: 1px solid #DDDDDD;
            background: #00003E;
            background: -webkit-linear-gradient(to right, #31BDE6, #00003E);
            background: linear-gradient(to right, #31BDE6, #00003E);
        }

        .footer h3 {
            border-bottom: 1px solid #BAC1C8;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            line-height: 27px;
            padding: 40px 0 10px;
            text-transform: uppercase;
        }

        .footer ul {
            font-size: 13px;
            list-style-type: none;
            margin-left: 0;
            padding-left: 0;
            margin-top: 15px;
            color: #7F8C8D;
        }

        .footer ul li a {
            padding: 0 0 5px 0;
            display: block;
        }

        .footer a {
            color: #78828D;
            color: #fff;
        }

        .supportLi h4 {
            font-size: 20px;
            font-weight: lighter;
            line-height: normal;
            margin-bottom: 0 !important;
            padding-bottom: 0;
        }

        .subscribe-btn .btn {
            border: medium none;
            border-radius: 4px;
            display: inline-block;
            height: 40px;
            padding: 0;
            width: 100%;
            color: #fff;
            margin-top: 10px;
        }

        .subscribe-btn {
            overflow: hidden;
        }

        .social li {
            border: 2px solid #B5B5B5;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            float: left;
            height: 36px;
            line-height: 36px;
            margin: 0 8px 0 0;
            padding: 0;
            text-align: center;
            width: 36px;
            transition: all 0.5s ease 0s;
            -moz-transition: all 0.5s ease 0s;
            -webkit-transition: all 0.5s ease 0s;
            -ms-transition: all 0.5s ease 0s;
            -o-transition: all 0.5s ease 0s;
        }

        .social li a {
            color: #EDEFF1;
        }

        .social li:hover {
            border: 2px solid #2c3e50;
            background: #2c3e50;
        }

        .social li a i {
            font-size: 16px;
            margin: 0 0 0 5px;
            color: #EDEFF1 !important;
        }

        .carousel-item {

            height: 400px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .name {

            margin-top: 25px;
            margin-left: 50px;
        }

        .btn {
            margin-top: 30px;
            border-radius: 50px;
            background: #e9605c;
        }
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
</head>

<body>
{{--top bar--}}
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                eLibrary
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#myModal" href=""><i class="fas fa-phone"></i>contacts us</a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users"></i>About us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="far fa-user"></i>{{ __('Login') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i
                                            class="fas fa-sign-in-alt"></i>{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="far fa-file-alt"></i>{{ __('Order History') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container ">
    @if(Session()->has('success'))
        <p class="alert alert-success">
            {{Session()->get('success')}}
        </p>
    @endif
</div>
{{--end top bar--}}
{{--search bar--}}
<div class="header col-12">
    <div class="col-3"></div>
    <div class="container float-right h-100 col-6">
        <div class="d-flex justify-content-center ">
            {{--<button type="button" class="btn btn-info" data-toggle="dropdown" href="{{url('cart')}}">--}}
            {{--<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>--}}
            {{--</button>--}}
            @if(session('cart')==0)
                <a class="btn btn-primary"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart is
                    empty <span class="badge badge-pill badge-danger"></span></a>
            @else
                <a href="{{ url('cart') }}" class="btn btn-primary"> <i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i> Cart <span
                            class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span></a>
            @endif
        </div>
    </div>
    <div class=" name col-3">
        <h2><p class="font-italic">e-Libeary</p></h2>
    </div>
</div>
<br>
{{--Checkout Form--}}

<!-- Navbar -->

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" action="{{ url('Oder_complete') }}" method="post" class="require-validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form">
                        @csrf

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                        class='form-control' size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                        autocomplete='off' class='form-control card-number' size='20'
                                        type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                                type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                            </div>
                        </div>
                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <ul class="list-group mb-3 z-depth-1">
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0"><img src=" {{ asset('images/'.$details['photo'])}}" width="100" height="100" class="img-responsive"/></h6>
                                            <small class="text-muted">{{ $details['name'] }}</small>
                                        </div>
                                        <span class="text-muted">Rs{{ $details['price'] }}</span>
                                    </li>
                                    @endforeach
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total </span>
                                        <strong>Rs{{ $total }}</strong>
                                    </li>
                                </ul>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
{{--End Checkout Form--}}
{{--footer--}}
<div>
    <br/><br/><br/><br/>
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> About us</h3>
                        <ul>
                            <li><a href="#"> Product 1</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                        <h3> Contact us </h3>
                        <ul>
                            <li><a href="#"> Services 1 </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> Desigen By </h3>
                        <ul>
                            <li>
                                <div class="input-append subscribe-btn text-center">
                                    <h5>Azeem Tahir</h5>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6" align="left">
                        <h3> social</h3>
                        <ul class="social">
                            <li><a href="#"> <i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-google"></i> </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6" align="left">
                        <h3> payment methods</h3>
                        <ul class="social">
                            <li><a href="#"> <img style="margin-right: 5px; " src="" alt="" title=""></a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fab fa-google"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
{{--end footer--}}
</body>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        var $form         = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
<--The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><i class="fas fa-phone"></i>contacts us</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <br>
                <label>Name :</label>
                <strong>Azeem Tahir</strong>
                <br>
                <label>Phone #</label>
                <strong>03034497159</strong>
                <br>
                <label>E-mail :</label>
                <strong>Azeem.tahir.ch@gmail.com</strong>
            </div>
        </div>
    </div>
</div>

</div>

</html>
