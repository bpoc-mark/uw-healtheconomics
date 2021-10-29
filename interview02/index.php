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

  <title>薬剤師インタビュー | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Interview">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <p>INTERVIEW</p>
            <h3>薬剤師インタビュー</h3>
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
                <a href="/interview02/">薬剤師インタビュー</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="row">
            <div class="col">
              <div class="txt_cont">
                <p>より深く薬と投薬の勉強をしたい</p>
                <span class="num">02.</span>
                <h3>大杉 茉梨恵<span>Marie Ohsugi</span></h3>
              </div>
            </div>
            <div class="col">
              <img src="/images/interview/img_1.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="txt_cont">
              <div class="list">
                <h3>薬剤師になろうと思った動機は？</h3>
                <p>	
                家族に医療従事者がいますので、自然に理系を選択しました。就職難の時代だったので、手に職を持ちたいという理由から薬剤師になりました。</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <img src="/images/interview/img_1.jpg" alt="">
              </div>
              <div class="col">
              <h3>ハロー薬局に入社されるまでの経歴について教えて下さい</h3>
              <p>大学卒業後、2年間大手ドラッグストアに勤務しました。配属先の店舗は調剤と接客が半々の店で、調剤業務だけではなくOTCの知識や接客方法も学ぶ事ができました。ドラッグストアは就業時間が遅く休みが不定休なのでなかなか自分の時間を作れませんでしたが、自分で薬を選択し患者さんに提供できるという良さがありました。しかしそれだけに責任が伴い統合的な知識が必要になります。そこで改めて調剤薬局で薬と投薬の勉強をしたいと考えるようになりました。<br>
また、いずれは地元に帰ってきたいと思っていましたので、浜松で転職先を探しました。<br>
その時の条件が、個人経営でなく県内だけに複数店舗を持つ薬局でした。全国展開の大型チェーンだと転居を伴う異動もあるからです。<br>
そして複数科の処方箋を取り扱い、薬剤師人数も多い店舗を希望しました。<br>
これらの条件と会社、店舗の雰囲気で希望にかなっていたのがハロー薬局です。勤めて3年目に入りましたが、今でもとても楽しくやりがいを持って働かさせていただいています。</p>
              </div>
            </div>
            <div class="txt_cont">
              <div class="list">
                <h3>ハロー薬局に入社されての印象は</h3>
                <p>	
店舗の雰囲気や社員の方々がとても明るく、働きやすいなという印象でした。
東田町店は、近隣に医療機関が数多くあるため幅広い診療科目の処方箋を応需し、取り扱う薬品数も多いので、とても勉強になります。
その他にもハロー薬局は県内に複数の店舗がありますので、配属先以外の店舗へ応援に行くことも大変勉強になっています。</p>
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
