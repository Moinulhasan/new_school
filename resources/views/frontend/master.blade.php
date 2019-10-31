<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Edua</title>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/edua-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/cubeportfolio.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootsnav.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/loader.css')}}">

<link rel="icon" href="{{asset('frontend/images/')}}/favicon.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<div class="loader">
  <div class="bouncybox">
      <div class="bouncy"></div>
    </div>
</div>

@include('frontend.inc.header')



@yield('mainContent')


@include('frontend.inc.footer')



<script src="{{asset('frontend/js/jquery-2.2.3.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/bootsnav.js')}}"></script>
<script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
<script src="{{asset('frontend/js/jquery-countTo.js')}}"></script>
<script src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/functions.js')}}"></script>

</body>
</html>
