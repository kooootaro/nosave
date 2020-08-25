<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>『保存しない』プロフィール</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<script src="{{ asset('js/openclose.js') }}"></script>
<script src="{{ asset('js/fixmenu_pagetop.js') }}"></script>
<script src="{{ asset('js/vivus.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body class="c1">

<div id="container">
@include('layouts.header')
@yield('header')

<div id="contents">

<div id="main">

<h2>MEMBER<span>メンバー</span></h2>
<div class="clear transform1">

<aside class="fl w25"><img src="{{ asset('images/ichiro2.png') }}" alt=""></aside>

	<section class="fr w70">
	<h2>阿久津一郎太</h2>
	<p>コント集団『保存しない』メンバー。</p>
	<p>90年代生まれ。<br>
	演出、脚本、編集、投稿、宣伝、その他諸々を担当。<br>
	サカナクション好き。<br>
	「一人で見て、一人で笑い、一人で満足できる」の精神。<br>
	※このサイトの情報は全て一郎太が作成しております
	</p>
	</section>

</div>

<div class="clear transform2">
<aside class="fl w25"><img src="{{ asset('images/buta.png') }}" alt=""></aside>

	<section class="fr w70">
	<h2>ぶーちゃん</h2>
	<p>コント集団『保存しない』メンバー。</p>
	<p>豚小屋生まれ。<br>
	動物なら人間のタブーに踏み込んでも有耶無耶にできるんじゃないかという考えによりスカウトされた豚。<br>
    noteにて『蔑み生まれナルシスト育ち』を執筆中<br>
    詳しくはメニューにあるBUTA-NOTEより</p>
	</section>

</div>
</div>
<!--/#main-->
</div>
<!--/#contents-->

@include('layouts.footer')
@yield('footer')

</div>
<!--/#container-->

<!--小さな端末用（900px以下端末）メニュー-->
@include('layouts.nav')
@yield('nav')

<!--パララックス用ファイル読み込み-->
<script src="{{ asset('js/jquery.inview.js') }}"></script>
<script src="{{ asset('js/jquery.inview_set.js') }}"></script>

</body>
</html>