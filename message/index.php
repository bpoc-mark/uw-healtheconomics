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

  <title>メッセージ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Message">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <p>MESSAGE</p>
            <h3>メッセージ</h3>
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
                <a href="/message/">メッセージ</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <!-- <div class="img_cont row">
                  <div class="col">
                    <img src="/images/message/img_1.jpg" alt="">
                  </div>
                  <div class="col">
                    <img src="/images/message/img_2.jpg" alt="">
                    <img src="/images/message/img_3.jpg" alt="">
                  </div>
                </div> -->
                <img src="/images/message/bg_img.jpg" class="sp" alt="">
              </div>
              <div class="col">
                <div class="p_content">
                  <p>私どもは、1992年創業以来、地域の皆様に支えられ成長を続けてまいりました。<br>
                    おかげさまで、薬局店舗も拡大し、ご支援くださる地域・関係者の方々に心より感謝申し上げます。</p>
                  <p>
                  少子高齢化の進む日本社会において、医療を取り巻く環境は刻々と変化しています。<br>
                  その中で、調剤薬局の役割はこれまで以上に重要性を帯びてきています。<br>
                  単に薬を提供するだけに留まらず、患者さまの良きパートナーとして積極的な関わりが求められています。
                  </p>
                  <p>「健康」とは全ての人にとって何ものにも代え難いものです。</p>
                  <p>
                  最も身近な医療人として、患者さま一人ひとりと真摯に向き合い、安心・安全で良質な医療サービスを提供し、医療を通じて人々の健康と幸福に貢献することこそが私どもの果たすべき使命です。
                  </p>
                  <p>
                  常に患者さまの視点に立ち、信頼に応える「かかりつけ薬局」として、グループで培ってきたノウハウを最大限に活かし、ホスピタリティを追及する薬局づくりに勇往邁進して参ります。
                  </p>
                </div>
                <h4>
                代表取締役
                <img src="/images/message/name.png" alt="">
                </h4>
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
