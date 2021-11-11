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
			<li><a href="/store/" <?php if ($str[1] == "store") {
				echo ' class="here"';
			} ?>>店舗一覧</a></li>
			<li id="emp_info"><a <?php if ($str[1] == "recruit" || $str[1] == "interview01" || $str[1] == "interview02" || $str[1] == "interview03" || $str[1] == "contact") {
				echo ' class="here"';
			} ?>>採用情報</a>
				<ul class="sub_menu">
					<li>
						<a href="/interview01/"  <?php if ($str[1] == "interview01") {
							echo ' class="here"';
						} ?>><span class="sp">インタビュー</span> 01.曾根 庸介</a>
					</li>
					<li>
						<a href="/interview02/"  <?php if ($str[1] == "interview02") {
							echo ' class="here"';
						} ?>><span class="sp">インタビュー</span> 02.加藤 茉梨恵</a>
					</li>
					<li>
						<a href="/interview03/"  <?php if ($str[1] == "interview03") {
							echo ' class="here"';
						} ?>><span class="sp">インタビュー</span> 03.鈴木 康成</a>
					</li>
					<li>
						<a href="/recruit/"  <?php if ($str[1] == "recruit") {
							echo ' class="here"';
						} ?>>募集要項</a>
					</li>
					<li>
						<a href="/contact/"  <?php if ($str[1] == "contact") {
							echo ' class="here"';
						} ?>>採用エントリーフォーム</a>
					</li>
				</ul>
			</li>
			<li><a href="/overview/" <?php if ($str[1] == "overview") {
				echo ' class="here"';
			} ?>>会社概要</a></li>
			<li><a href="/message/" <?php if ($str[1] == "message") {
				echo ' class="here"';
			} ?>>メッセージ</a></li>
			<!-- <li><a href="/about/" <?php if ($str[1] == "about") {
				echo ' class="here"';
			} ?>>ハロー薬局について</a></li> -->
		</ul>
	</nav>

	<div class="menu sp" id="header_menu">
		<span class="line line-t"></span>
		<span class="line line-m"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>
</div>
