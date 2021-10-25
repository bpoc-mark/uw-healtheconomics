<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="h_left">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></p>';
		}
		?>
	</div>

	<nav class="h_right">
		<ul>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>HOME</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>ハロー薬局について</a></li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>店舗一覧</a></li>
			<li id="emp_info"><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>採用情報</a>
				<ul class="sub_menu">
					<li>
						<a href=""  <?php if ($str[1] == "") {
							echo ' class="here"';
						} ?>><span class="sp">インタビュー</span> 01.曾根庸介</a>
					</li>
					<li>
						<a href=""  <?php if ($str[1] == "") {
							echo ' class="here"';
						} ?>><span class="sp">インタビュー</span> 02.加藤 茉莉恵</a>
					</li>
					<li>
						<a href=""  <?php if ($str[1] == "") {
							echo ' class="here"';
						} ?>><span class="sp">インタビュー</span> 03.鈴木 康成</a>
					</li>
					<li>
						<a href=""  <?php if ($str[1] == "") {
							echo ' class="here"';
						} ?>>募集要項</a>
					</li>
					<li>
						<a href=""  <?php if ($str[1] == "") {
							echo ' class="here"';
						} ?>>採用エントリーフォーム</a>
					</li>
				</ul>
			</li>
			<li><a href="/" <?php if ($str[1] == "") {
				echo ' class="here"';
			} ?>>会社概要</a></li>
			<li><a href="/message/" <?php if ($str[1] == "message") {
				echo ' class="here"';
			} ?>>メッセージ</a></li>
		</ul>
	</nav>

	<div class="menu sp" id="header_menu">
		<span class="line line-t"></span>
		<span class="line line-m"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>
</div>
