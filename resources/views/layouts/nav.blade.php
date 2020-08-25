@section('nav')
<nav id="menubar-s">
<ul>
<li><a href="/">HOME</a></li>
<li><a href="/news">NEWS</a></li>
<li><a href="/profile">PROFILE</a></li>
<li><a href="/event">EVENT</a></li>
<li><a href="https://note.com/nosave_buchan">BUTA-NOTE</a></li>
<li><a href="/contact">CONTACT</a></li>
</ul>
</nav>
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
@endsection