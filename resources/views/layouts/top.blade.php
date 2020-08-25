<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>コント集団『保存しない』</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script src="{{ asset('js/openclose.js') }}"></script>
<script src="{{ asset('js/fixmenu_pagetop.js') }}"></script>
<script src="{{ asset('js/vivus.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--パララックス用ファイル読み込み-->
<script src="{{ asset('js/jquery.inview.js') }}"></script>
<script src="{{ asset('js/jquery.inview_set.js') }}"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<style>
.slide1,.slide2,.slide3 {background: url(images/1.jpg) no-repeat center center;}
.up, .left, .right, .transform1, .transform2 {opacity:1;}
.upstyle, .leftstyle, .rightstyle, .transform1style, .transform2style {transition: 0s 0s;}
.up {bottom: 0px;}
.left {left: 0px;}
.right {right: 0px;}
.transform1 {transform: scaleX(1);}
</style>
<![endif]-->
</head>

<body class="home">

<div id="container">
@include('layouts.svg')
@yield('svg')

@include('layouts.header')
@yield('header')

@include('layouts.contents')
@yield('contents')

@include('layouts.footer')
@yield('footer')

</div>
<!--/#container-->

@include('layouts.nav')
@yield('nav')

</body>
</html>
