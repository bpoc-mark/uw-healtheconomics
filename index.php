<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<!-- <img src="/images/top/main.jpg" alt=""> -->
					<picture>
						<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
						<source srcset="/images/top/sp/main.jpg" media="(max-width: 899px)" type="image/webp">
						<source srcset="/images/top/main.jpg" media="(min-width: 900px)">
						<img src="/images/top/sp/main.jpg" alt="">
					</picture>
					<div class="container">
						<picture>
							<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
							<source srcset="/images/top/sp/main_txt.png" media="(max-width: 899px)" type="image/webp">
							<source srcset="/images/top/main_txt.png" media="(min-width: 900px)">
							<img src="/images/top/sp/main_txt.png" alt="">
						</picture>
						<a href="">
							Scroll
							<span></span>
						</a>
					</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<div class="txt_cont">
								<span class="c-anim-up">ABOUT US</span>
								<h3 class="c-anim-up">医師との連携・豊富な薬学知識により<br>
									正確な調剤と適切な服薬指導を<br>
									行っています。</h3>
								<p class="c-anim-up">
									医療を取り巻く環境が変化していく中、薬剤師の役割はますます重要性を帯びてきています。<br>
									医療を支えるのは人であり、何よりも信頼関係が不可欠です。<br>
									最も身近な医療人として、患者様一人ひとりと真摯に向き合い、安心・安全で良質な医療サービスを提供することこそ私たちの使命です。<br>
									常に患者さまの視点に立ち、医療を通じて地域のみなさまの健康と幸福に貢献し、信頼に応える「かかりつけ薬局」としてのあり方を追求し続けます。
								</p>
								<ul>
									<li class="c-anim-up">
										<a href="" class="btn_link">
											メッセージ
											<img src="/images/top/section_2/arrow_img.png" alt="">
										</a>
									</li>
									<li class="c-anim-up">
										<a href="" class="btn_link">
											会社概要
											<img src="/images/top/section_2/arrow_img.png" alt="">
										</a>
									</li>
									<li class="c-anim-up">
										<a href="" class="btn_link">
											ハロー薬局について
											<img src="/images/top/section_2/arrow_img.png" alt="">
										</a>
									</li>
									<li class="c-anim-up">
										<a href="" class="btn_link">
											店舗一覧
											<img src="/images/top/section_2/arrow_img.png" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col">
							<img data-aos="fade-left" src="/images/top/section_2/img_1.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="row">
						<div class="col">
							<div class="img_cont">
								<div class="item">
									<img data-aos="fade-right" data-aos-delay="300" src="/images/top/section_3/img_2.jpg" alt="">
									<img data-aos="fade-right" src="/images/top/section_3/img_3.jpg" alt="" class="p-l-60">
								</div>
								<div class="item">
									<img data-aos="fade-right" src="/images/top/section_3/img_4.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col">
							<div class="txt_cont">
								<span class="c-anim-up">RECRUIT</span>
								<h3 class="c-anim-up">
									私たちヘルスエコノミクス研究所は<br>
									静岡県下に9店舗広がる<br>
									ハロー薬局を運営しています。
								</h3>
								<p class="c-anim-up">
								ハロー薬局では今まで培ってきたノウハウを元に、充実した研修制度を導入し、未来ある薬剤師を強力にバックアップし、信頼される薬剤師の育成を目指しています。
								</p>
								<div class="sp c-anim-up">
									<div class="img_cont">
										<div class="item">
											<img src="/images/top/section_3/img_2.jpg" alt="">
											<img src="/images/top/section_3/sp/img_3.jpg" alt="" class="p-r-40">
										</div>
										<div class="item">
											<img src="/images/top/section_3/sp/img_4.jpg" alt="">
										</div>
									</div>
								</div>
								<ul class="list">
									<li class="c-anim-up">
										<p><span>01.</span>患者さんだけを見つめるまなざしを</p>
										<a href="" class="btn_link">
											薬剤師 <span>曾根 庸介</span>
											<img src="/images/top/section_3/arrow_img.png" alt="">
										</a>
									</li>
									<li class="c-anim-up">
										<p><span>02.</span>豊富な知識と経験を患者さんのために</p>
										<a href="" class="btn_link">
											薬剤師 <span>加藤 茉梨恵</span>
											<img src="/images/top/section_3/arrow_img.png" alt="">
										</a>
									</li>
									<li class="c-anim-up">
										<p><span>03.</span>患者様一人一人に寄り添った医療を提供する</p>
										<a href="" class="btn_link">
											薬剤師 <span>鈴木 康成</span>
											<img src="/images/top/section_3/arrow_img.png" alt="">
										</a>
									</li>
								</ul>
								<ul class="btn_cont">
									<li class="c-anim-up">
										<a href="" class="btn_link">
											募集要項
											<img src="/images/top/section_2/arrow_img.png" alt="">
										</a>
									</li>
									<li class="c-anim-up">
										<a href="" class="btn_link">
											採用エントリーフォーム
											<img src="/images/top/section_2/arrow_img.png" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
