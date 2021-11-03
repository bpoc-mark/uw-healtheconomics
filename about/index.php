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
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>ハロー薬局について | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="About">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <p>ABOUT US</p>
            <h3>ハロー薬局について</h3>
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
                <a href="/about/">ハロー薬局について</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="row">
            <div class="col c-anim-up">
              <div class="txt_cont">
                <span>ABOUT US</span>
                <h3>地域に密着した“かかりつけ薬局”<br>として健康を共に考え、<br>健やかな生活の実現をサポートします。</h3>
                <p>医療を取り巻く環境が変化していく中、薬剤師の役割はますます重要性を帯びてきています。<br>医療を支えるのは人であり、何よりも信頼関係が不可欠です。<br>最も身近な医療人として、患者様一人ひとりと真摯に向き合い、安心・安全で良質な医療サービスを提供することこそ私たちの使命です。<br>常に患者さまの視点に立ち、医療を通じて地域のみなさまの健康と幸福に貢献し、信頼に応える「かかりつけ薬局」としてのあり方を追求し続けます。</p>
              </div>
            </div>
            <div class="col c-anim-up">
              <img src="/images/about/img_1.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="list">
              <h3 class="l_head c-anim-up">調 剤</h3>
              <p class="l_desc c-anim-up">医師との連携・豊富な薬学知識により正確な調剤と適切な服薬指導を行っています。</p>
              <div class="row">
                <div class="col c-anim-up">
                  <h4>最も身近なヘルスアドバイザー</h4>
                  <p>地域医療を担うチームの一員として、医師に信頼され、地域のみなさまのヘルスアドバイザーとして、患者さまの病気や薬に対する疑問や不安に耳を傾け、コミュニケーションを大切にしたきめ細やかな対応を心掛けています。</p>
                </div>
                <div class="col c-anim-up">
                  <h4>薬剤師のスキルアップ</h4>
                  <p>私たちは「薬のスペシャリスト」として、患者さまにご満足いただけるサービスを提供できるよう、様々な研修を行っています。<br>特にOJTでは、先輩薬剤師の豊富な経験と実績に基づくノウハウを学び人間性・医療知識のレベルアップを図っています。<br>また、e-ラーニングによる認定薬剤師の取得や、メーカー・薬剤師会主催の勉強会等へもせっっ極的に参加しています。</p>
                </div>
              </div>
            </div>
            <div class="list">
              <h3 class="l_head c-anim-up">介護・在宅医療</h3>
              <div class="row">
                <div class="col c-anim-up">
                  <h4>薬剤師の職能を最も活かせる分野</h4>
                  <p>介護医療の発達とともに、在宅医療の現場にも薬剤師の存在価値が高まっています。<br>調剤業務に留まらず、薬剤師としての専門性の高い知識を在宅の分野でも発揮し、地域のみなさまの健康をサポートしていきます。</p>
                </div>
                <div class="col c-anim-up">
                  <h4>訪問服薬指導や介護用品を販売</h4>
                  <p>在宅介護を受けている患者さまに、医師の処方箋のもと、個々のニーズに応じた服薬支援を行っています。そこで得られた情報は、医師へフィードバックし緊密な連携体制を築いています。<br>また介護用品に関する相談やアドバイス、販売に至るまで、あらゆる面からより良い療養生活を送るためのバックアップを行なっています。</p>
                </div>
              </div>
            </div>
            <div class="list c-anim-up">
              <h3 class="l_head c-anim-up">一般薬（OTC薬）</h3>
              <div class="row">
                <div class="col c-anim-up">
                  <h4>スタッフ全員が医薬品のコンサルタント</h4>
                  <p>ハロー薬局は、単に薬を販売するドラッグストアではありません。患者さまに安心して薬をご使用いただくために、様々な相談におうじ、セルフメディケーションのお手伝いをしています。</p>
                </div>
                <div class="col c-anim-up">
                  <img src="/images/about/img_2.jpg" alt="">
                </div>
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
