<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>『保存しない』イベント情報</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script src="js/openclose.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/vivus.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if lt IE 10]>
<style>
.up, .left, .right, .transform1, .transform2 {opacity:1;}
.upstyle, .leftstyle, .rightstyle, .transform1style, .transform2style {transition: 0s 0s;}
.up {bottom: 0px;}
.left {left: 0px;}
.right {right: 0px;}
.transform1 {transform: scaleX(1);}
</style>
<![endif]-->
</head>

<body>

<div id="container">

@include('layouts.header')
@yield('header')

<div id="contents">

<div id="main">

<section>

<h2>EVENT<span>イベント情報</span></h2>

<table class="ta1">
<caption>2018年　イベント情報</caption>
<tr>
<th>1月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>2月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>3月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>4月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>5月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>6月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>7月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>8月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>9月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>10月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>11月</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>12月<br><img src="images/1.jpg" alt=""></th>
<td>ここに説明など入れて下さい。サンプルテキスト。<br>
<img src="images/1.jpg" alt=""></td>
</tr>
</table>

</section>

</div>
<!--/#main-->

<div id="sub">

<h2>ARCHIVE</h2>
<ul class="submenu">
<li><a href="/event2020">2020年</a></li>
<li><a href="/event2019">2019年</a></li>
<li><a href="/event2018">2018年</a></li>
</ul>

</div>
<!--/#sub-->

</div>
<!--/#contents-->

@include('layouts.footer')
@yield('footer')

</div>
<!--/#container-->

<!--小さな端末用（900px以下端末）メニュー-->
@include('layouts.nav')
@yield('nav')

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　900px以下-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--パララックス用ファイル読み込み-->
<script src="js/jquery.inview.js"></script>
<script src="js/jquery.inview_set.js"></script>

</body>
</html>
