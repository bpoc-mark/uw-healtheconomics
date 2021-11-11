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
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title>採用エントリーフォーム | <?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main id="Contact" class="sfm1">
			<section class="jumbo_sect">
				<div class="wrapper">
					<div class="container">
						<p>ENTRY</p>
						<h3>採用エントリーフォーム</h3>
					</div>
				</div>
			</section>
			<section class="breadcrumbs pc">
				<div class="wrapper">
					<div class="container">
						<ul>
						<li>
							<a href="/">HOME</a>
						</li>
						<li>
							<a href="/contact/">採用エントリーフォーム</a>
						</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="form-sec">
				<div class="form_wrap container">
					<p>必須項目をご入力の上、「入力内容を確認する」ボタンを押下してください。</p>


					<form method="post" name="sfm-form" id="sfm-form" action="./">
						<table>
							<tr>
								<th>お名前<span class="need">必須</span></th>
								<td><input type="text" name="name_s" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>ふりがな<span class="need">必須</span></th>
								<td><input type="text" name="furigana_s" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>性別 <span class="need">必須</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="gender_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item" type="radio" name="gender_s[]" value="男性" id="type01" />&nbsp;
												<label for="type01">男性</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="gender_s[]" value="女性" id="type02" />&nbsp;
												<label for="type02">女性</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<th>生年月日 <span class="need">必須</span></th>
								<td>
									<ul class="bday_cont">
										<li>
											<label for="type01">
												<input type="text" name="year_s" class="bday_year datePicker flatpickr-input" value="" title="" placeholder="">年
											</label>
										</li>
										<li>
											<label for="type01">
												<input type="text" name="month_s" class="bday_month" value="" title="" placeholder="">月
											</label>
											<!-- <div class="select-box">
												<select name="month_s" required value="" title="">
													<option name="month_s[]" value="" disabled="disabled" selected hidden></option>
													<option name="month_s[]" value="January">January</option>
													<option name="month_s[]" value="February">February</option>
													<option name="month_s[]" value="March">March</option>
													<option name="month_s[]" value="April">April</option>
													<option name="month_s[]" value="May">May</option>
													<option name="month_s[]" value="June">June</option>
													<option name="month_s[]" value="July">July</option>
													<option name="month_s[]" value="August">August</option>
													<option name="month_s[]" value="September">September</option>
													<option name="month_s[]" value="October">October</option>
													<option name="month_s[]" value="November">November</option>
													<option name="month_s[]" value="December">December</option>
												</select>
											</div> -->
										</li>
										<li>
											<label for="type01">
												<input type="text" name="day_s" class="bday_day" value="" title="" placeholder="">日
											</label>
											<!-- <div class="select-box">
												<select name="day_s" required value="" title="">
													<option name="day_s[]" value="" disabled="disabled" selected hidden></option>
													<option name="day_s[]" value="1">1</option>
													<option name="day_s[]" value="2">2</option>
													<option name="day_s[]" value="3">3</option>
													<option name="day_s[]" value="4">4</option>
													<option name="day_s[]" value="5">5</option>
													<option name="day_s[]" value="6">6</option>
													<option name="day_s[]" value="7">7</option>
													<option name="day_s[]" value="8">8</option>
													<option name="day_s[]" value="9">9</option>
													<option name="day_s[]" value="10">10</option>
													<option name="day_s[]" value="11">11</option>
													<option name="day_s[]" value="12">12</option>
													<option name="day_s[]" value="13">13</option>
													<option name="day_s[]" value="14">14</option>
													<option name="day_s[]" value="15">15</option>
													<option name="day_s[]" value="16">16</option>
													<option name="day_s[]" value="17">17</option>
													<option name="day_s[]" value="18">18</option>
													<option name="day_s[]" value="19">19</option>
													<option name="day_s[]" value="20">20</option>
													<option name="day_s[]" value="21">21</option>
													<option name="day_s[]" value="22">22</option>
													<option name="day_s[]" value="23">23</option>
													<option name="day_s[]" value="24">24</option>
													<option name="day_s[]" value="25">25</option>
													<option name="day_s[]" value="26">26</option>
													<option name="day_s[]" value="27">27</option>
													<option name="day_s[]" value="28">28</option>
													<option name="day_s[]" value="29">29</option>
													<option name="day_s[]" value="30">30</option>
													<option name="day_s[]" value="31">31</option>
												</select>
											</div> -->
										</li>
									</ul>
								</td>
							</tr>

							<tr>
								<th>最終学歴<span class="optional">任意</span></th>
								<td><input type="text" name="education" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>TEL<span class="need">必須</span></th>
								<td><input type="text" name="tel_s" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>メールアドレス<span class="need">必須</span></th>
								<td><input type="text" name="email_s" value="" title="" placeholder=""></td>
							</tr>

							<tr class="address">
								<th>住所<span class="optional">任意</span></th>
								<td>
									<span class="zip-wrap">
										<input class="zip" type="text" name="zip" size="10" maxlength="8" placeholder="">
									</span>
									<input class="ad_btn" type="button" value="住所自動入力"><br>
									<input class="text02" type="text" name="address" size="60" placeholder="">
								</td>
							</tr>

							<tr>
								<th>採用形態 <span class="need">必須</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="recruitment_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item3" type="radio" name="recruitment_s[]" value="新卒採用" id="type03" />&nbsp;
												<label for="type03">新卒採用</label>
											</li>
											<li>
												<input class="checkbox_item4" type="radio" name="recruitment_s[]" value="中途採用" id="type04" />&nbsp;
												<label for="type04">中途採用</label>
											</li>
											<li>
												<input class="checkbox_item5" type="radio" name="recruitment_s[]" value="パート採用" id="type05" />&nbsp;
												<label for="type05">パート採用</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<th>お問い合わせ内容<span class="optional">任意</span></th>
								<td><textarea name="message" title=""></textarea></td>
							</tr>

						</table>

						<div class="overscroll">
							<h3>個人情報保護方針</h3>
							<p>ヘルスエコノミクス研究所は、事業活動によりお客様からご提供いただいた個人情報を下記の原則に則り適正に管理するとともに、 お客様からいただいた個人情報をそのサービス向上のために積極的に活用していくことを宣言します。</p>
							<ul>
								<li>
									<strong>１．収集範囲の制限</strong>
									<p>個人情報の収集は、正当な事業活動の範囲内で、収集目的を明確に定め、その目的達成に必要な限度において、行うものとします。</p>
								</li>
								<li>
									<strong>２．利用制限</strong>
									<p>本人の同意がある場合、または法令に規定のある場合を除いては、本人に開示もしくは本人の同意を得た目的以外に、個人情報を利用してはならないものとします。</p>
								</li>
								<li>
									<strong>３．収集制限</strong>
									<p>個人情報は、適法・公正な手段により収集されなければならず、必要な場合には、利用目的等について本人へ通知もしくは同意を得て収集されるものとします。</p>
								</li>
								<li>
									<strong>４．データ内容の正確性等</strong>
									<p>個人情報を保有する場合には、その利用目的に沿ったもので、かつ、正確・安全・最新の状態で保有するものとします。</p>
								</li>
							</ul>
						</div>

						<div class="agree_area">
							<input type="checkbox" name="agree" id="checkAgree">
							<label for="checkAgree" class="checkAgree">個人情報保護方針について同意する</label>
						</div>

						<div class="submit_area">
							<span>
								<input id="checkSubmit" type="submit" value="入力内容を確認する" class="pushbtn" />
								<img src="/images/top/section_2/arrow_img.png" alt="">
							</span>
						</div><!-- submit_area -->


						<input type="hidden" name="mailToNum" value="0" />
						<input type="hidden" name="mode" value="CONFIRM" />
					</form>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
				tel: function(value, element) {
					return this.optional(element) || /^[0-9]+[0-9.-]+$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				furigana_s: {
					required: true
				},
				'gender_s[]': {
					required: true,
				},
				year_s: {
					required: true
				},
				month_s: {
					required: true
				},
				day_s: {
					required: true
				},
				tel_s: {
					tel: true,
					required: true,
				},
				email_s: {
					email: true,
					required: true,
				},
				// 'radio_s[]': {
				// 	required: true,
				// },
				// zip_s: {
				// 	required: true
				// },
				// select_s: {
				// 	required: true
				// },
				// address_s: {
				// 	required: true,
				// },
				'recruitment_s[]': {
					required: true,
				},
				// message_s: {
				// 	required: true,
				// }
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				tel_s: {
					tel: "正しい電話番号を入力してください"
				},
				// check_s: {
				// 	required: "チェックボックスを選択してください"
				// }
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parents('ul'));
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else if (element.attr("name") == "year_s") {
							error.appendTo(element.parents('li'));
						}else if (element.attr("name") == "month_s") {
							error.appendTo(element.parents('li'));
						}else if (element.attr("name") == "day_s") {
							error.appendTo(element.parents('li'));
						}else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip', '', 'address', 'address');
			});
		});

		// flatpickr('.datePicker', {
		// 	disableMobile: "true",
		// 	minDate: new Date().fp_incr(4),
		// 	// disable:[
		// 	// function(date) {
		// 	// 		return (date.getDay() === 3);
		// 	// 	}
		// 	// ],
		// });
	</script>
</body>

</html>
