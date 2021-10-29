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
                <a href="/interview01/">薬剤師インタビュー</a>
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
                <p>自宅を改良して調剤薬局を開局</p>
                <span class="num">01.</span>
                <h3>曽根 庸介<span>Yosuki Sone</span></h3>
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
                <h3>ハロー薬局に入社されるまでの経歴について教えて下さい</h3>
                <p>	
                  大学卒業後、CFSコーポレーション（ハックドラッグ）に10年間勤務し、マーチャンダイジング・マーケティング業務に携わっていました。営業的な仕事が好きでそういう分野の薬局に就職していました。<br>
                  両親も高齢になってきたので、そろそろ地元に戻らなければ・・・という時に、ちょうど医薬分業の話があり、牛乳屋を営んでいた実家を改良して調剤薬局をオープンさせたいという想いがありました。<br>
                  実際に、調剤薬局を開局するには近隣の調剤薬局などとの関係もあって、難しい問題が多かったのですが、2006年1月にハロー薬局のホームページを見て、ここなら何だか相談にのってくれるのでは？と思い、まずメールをしました。<br>
                  面接の際に、「患者さんひとりひとりを大切にすればいい」という社長の言葉に共感し、この会社なら信頼できると思い入社を決意しました。店舗名は、牛乳屋を受け継ぎ「みるく薬局」とし、ハローグループの中の1店舗として2006年9月に開局しました。</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <img src="/images/interview/img_1.jpg" alt="">
              </div>
              <div class="col">
              <h3>薬局オープンまでは、どのような活動をされていたのですか？</h3>
              <p>不定期ですが初めの3ヶ月間は富士店で研修をしました。とても楽しかったです。患者さんとのコミュニケーションや色んな発見がありました。それまでの調剤薬局のイメージは、受け身的でドクターの処方を間違えないで薬を渡す、そこに自分の思いとか意見とかを加えてはいけない仕事だと思っていたのですが、そうではなかった。患者さんが調剤薬局に対しても「求めていることがあるんだ」、ということに気づかされました。本当に新鮮な発見でした。患者さんとコミュニケーションを取りながら仕事ができるということはとても嬉しいことです。患者さんとも親しくなれますしね。調剤のイメージがあの研修でガラッと変わりました。</p>
              </div>
            </div>
            <div class="txt_cont">
              <div class="list">
                <h3>実際に薬局をオープンされてから、どんな毎日ですか？</h3>
                <p>毎日すごく楽しいです。私は仕事が遅いのかもしれませんが、一日多くて30人くらいでも、あっと言う間に時間が経ちます。総合病院では予約が組まれているため、事前に薬の仕入れ、病態の知識を得ておくことができ、その準備が、患者さんの要求に応える第一歩となります。私には、患者さんが私のことを信頼してご自分の病気のことをお話してくれることがとても勉強になるんです。患者さんから教えられるんですね。毎日、本当にいろんなことを教えられます。</p>
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
