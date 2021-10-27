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

  <title>店舗一覧 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Store">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_sect">
        <div class="wrapper">
          <div class="container">
            <p>OUR STORE</p>
            <h3>店舗一覧</h3>
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
                <a href="/store/">店舗一覧</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="store_cont">
              <h3>浜松エリア</h3>
              <div class="row">
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n1.svg" alt="">
                        ハロー薬局 東田町店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒430-0929 静岡県浜松市中区中央1-15-1</p>
                            <a class="map" href="https://www.google.com/maps/place/1-ch%C5%8Dme-15-1+Ch%C5%AB%C5%8D,+Naka+Ward,+Hamamatsu,+Shizuoka+430-0929,+Japan/@34.7096282,137.7328888,17z/data=!3m1!4b1!4m5!3m4!1s0x601ade701c249061:0xeb9410aadeea0945!8m2!3d34.7096238!4d137.7350775" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:053-413-1288" class="tel">053-413-1288</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月～金</span>8:30～18:30</p>
                            <p class="time"><span class="">土</span>8:30～12:30</p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●JR浜松駅から遠鉄バス<br>10番のりば、85系統・労災篠ヶ瀬、71系統・労災東高笠　井、74系統・労災さぎのみや、78系統・労災産業展示館行　き、又は11番のりば、西循環元浜方面行き2系統 県総合　庁舎経由早出行きにて県総合庁舎バス停下車、徒歩1分</p>
                            <p class="access">●遠州鉄道遠州病院前駅より徒歩3分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n2.svg" alt="">
                        ハロー薬局 蜆塚店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒432-8018 静岡県浜松市中区蜆塚4丁目15-2</p>
                            <a class="map" href="https://www.google.com/maps/place/4-ch%C5%8Dme-15+Shijimizuka,+Naka+Ward,+Hamamatsu,+Shizuoka+432-8018,+Japan/@34.7115082,137.7033018,17z/data=!3m1!4b1!4m5!3m4!1s0x601adee9ee72585b:0xaa90b1f1f0ff1102!8m2!3d34.7116618!4d137.7056813" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:053-454-8656" class="tel">053-454-8656</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月・火・木・金</span>8:45～18:00</p>
                            <p class="time"><span class="">水・土</span>8:45～12:30</p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●JR浜松駅から遠鉄バス<br>西循環または鴨江医療センター行きにて<br>根上り松バス停下車、徒歩５分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n3.svg" alt="">
                        ハロー薬局 坪井店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒431-0202 静岡県浜松市西区坪井町4699</p>
                            <a class="map" href="https://www.google.com/maps/place/4699+Tsuboich%C5%8D,+Nishi+Ward,+Hamamatsu,+Shizuoka+431-0202,+Japan/@34.6827069,137.6503573,17z/data=!3m1!4b1!4m5!3m4!1s0x601ad97322377933:0xd888feff5e360c7d!8m2!3d34.6827025!4d137.652546" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:053-445-4666" class="tel">053-445-4666</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月～水・金</span>8:30～18:00</p>
                            <p class="time"><span class="">土</span>8:30～12:30</p>
                            <p class="time"><span class="">木・日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●JR舞阪駅より徒歩1分遠鉄バス馬郡バス停・系統番号10<br>「舞阪町内・浜松駅」行きより坪井新田バス停下車、<br>徒歩3分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n4.svg" alt="">
                        すみれ薬局 引佐店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒431-2213 静岡県浜松市北区引佐町金指1024-6</p>
                            <a class="map" href="https://www.google.com/maps/place/1024-6+Inasach%C5%8D+Kanasashi,+Kita+Ward,+Hamamatsu,+Shizuoka+431-2213,+Japan/@34.8190874,137.6795936,17z/data=!3m1!4b1!4m5!3m4!1s0x601b26ab88619397:0x719fc55a9bf52ca4!8m2!3d34.819083!4d137.6817823" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:053-542-1611" class="tel">053-542-1611</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月～金 </span>8:45～17:45</p>
                            <p class="time"><span class="">土・日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●天竜浜名湖線金指駅より徒歩5分</p>
                            <p class="access">●遠鉄バス奥山・渋川方面行きにて引佐高校前バス停下車、　徒歩5分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="store_cont">
              <h3>磐田・袋井エリア</h3>
              <div class="row">
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n5.svg" alt="">
                        ハロー薬局 豊田店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒438-0816 静岡県磐田市宮之一色823-3</p>
                            <a class="map" href="https://www.google.com/maps/place/823-3+Miyanoisshiki,+Iwata,+Shizuoka+438-0816,+Japan/@34.7180321,137.8247795,17z/data=!3m1!4b1!4m5!3m4!1s0x601ae69415f9e201:0x9c87b2c8016bc67e!8m2!3d34.7180277!4d137.8269682" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:0538-34-8613" class="tel">0538-34-8613</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月・火・木・金</span>8:30～18:00</p>
                            <p class="time"><span class="">水・土</span>8:30～12:30</p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n6.svg" alt="">
                        ハロー薬局 豊田北店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒438-0816 静岡県磐田市宮之一色686-3</p>
                            <a class="map" href="https://www.google.com/maps/place/686-3+Miyanoisshiki,+Iwata,+Shizuoka+438-0816,+Japan/@34.7162713,137.8242024,15.75z/data=!4m5!3m4!1s0x601ae695c93cd751:0xdde47005167855d2!8m2!3d34.7196316!4d137.826891" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:0538-33-3450" class="tel">0538-33-3450</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月～水・金</span>8:30～13:00  15:00～18:30</p>
                            <p class="time"><span class="">木・土</span>8:30～12:00</p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n7.svg" alt="">
                        ハロー薬局 下山梨店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒437-0123 静岡県袋井市下山梨2-14-3</p>
                            <a class="map" href="https://www.google.com/maps/place/Japan,+%E3%80%92437-0123+Shizuoka,+Fukuroi,+Shimoyamanashi,+2-ch%C5%8Dme%E2%88%92%EF%BC%91%EF%BC%94%E2%88%923/@34.7831347,137.9069763,17z/data=!3m1!4b1!4m5!3m4!1s0x601ae35b266c9743:0x4fd3bf14971b2dab!8m2!3d34.7831303!4d137.909165" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:0538-49-3131" class="tel">0538-49-3131</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月・火・木・金</span>8:30～18:30 </p>
                            <p class="time"><span class="">水</span>8:30～17:00 </p>
                            <p class="time"><span class="">土</span>8:30～12:00 </p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●JR袋井駅から静鉄バス秋葉中遠線にて下山梨バス停下　車、徒歩3分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="store_cont">
              <h3>東部エリア</h3>
              <div class="row">
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n8.svg" alt="">
                        ハロー薬局 富士店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒417-0061 静岡県富士市伝法1989-85</p>
                            <a class="map" href="https://www.google.com/maps/place/1989+Denb%C5%8D,+Fuji,+Shizuoka+417-0061,+Japan/@35.1739044,138.6787024,17z/data=!3m1!4b1!4m5!3m4!1s0x601bd52a41ad7df1:0x589b460c21f87227!8m2!3d35.1739!4d138.6808911" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:0545-55-2111" class="tel">0545-55-2111</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月〜金</span>9:00～18:00</p>
                            <p class="time"><span class="">土</span>9:00～13:00</p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●JR富士駅より”吉原中央駅行き”バス40分、<br>中央駅にて乗り換え“茶の木平行き”バス10分、<br>「西国久保上」バス停下車徒歩3分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="accordion">
                    <div class="accordion_head">
                      <h4 class="accordion_header">
                        <img src="/images/store/n9.svg" alt="">ハロー薬局 万野店
                      </h4>
                      <a href="" class="sp accordion_btn"></a>
                    </div>
                    <div class="accordion_body">
                      <ul class="store_info">
                        <li class="row address">
                          <div class="col">
                            <p>住所</p>
                          </div>
                          <div class="col">
                            <p>〒418-0001 静岡県富士宮市万野原新田3117-11</p>
                            <a class="map" href="https://www.google.com/maps/place/3117+Mannohara+Shinden,+Fujinomiya,+Shizuoka+418-0001,+Japan/@35.2454517,138.6242384,17z/data=!3m1!4b1!4m5!3m4!1s0x601bd13a4d509fe7:0xd489c309b6fdd668!8m2!3d35.2454473!4d138.6264271" target="_blank">map<img src="/images/store/arrow_img.png" alt=""></a>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>TEL</p>
                          </div>
                          <div class="col">
                            <p><a href="tel:0544-29-7966" class="tel">0544-29-7966</a></p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>営業時間</p>
                          </div>
                          <div class="col">
                            <p class="time"><span class="">月〜金</span>9:00～18:00</p>
                            <p class="time"><span class="">土</span>9:00～13:00</p>
                            <p class="time"><span class="">日・祝日</span>定休日</p>
                          </div>
                        </li>
                        <li class="row">
                          <div class="col">
                            <p>アクセス</p>
                          </div>
                          <div class="col">
                            <p class="access">●JR富士宮駅より富士急静岡バス山宮・篠坂方面行き<br>下万野バス停下車、徒歩6分</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
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

  <script>
    $('.store_cont .row .col .accordion').matchHeight();
  </script>
</body>

</html>
