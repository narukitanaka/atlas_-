<?php get_header(); ?>
  <main>

    <div class="under_head head-center">
      <div class="inner">
        <div class="ttl-wrap under_head_ttl">
          <div class="en">CONTACT</div>
          <h1>お問い合わせ</h1>
        </div>
      </div>
    </div>

    <section class="p-under p-contact thanks">
      <div class="inner">

        <div>

          <div class="content">
            <p>
              この度はアトラス埋込型信号機株式会社へお問い合わせいただき誠にありがとうございます。
              お送り頂きました内容を確認の上、2-3日営業日以内に折り返しご連絡させて頂きます。
              また、ご入力頂いたメールアドレスへ、自動返信の確認メールをお送りしております。
            </p>
            <p>
              しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、
              迷惑メールフォルダに振り分けられている可能性がございます。
              以上の内容をご確認の上、お手数ですがもう一度フォームよりお問い合わせいただきますようお願い申し上げます。
            </p>
            <div class="btn-wrap">
              <a class="btn bgc-wh" href="<?php echo home_url('/'); ?>">
                ホームへ戻る
                <svg xmlns="http://www.w3.org/2000/svg" width="19.62" height="22.608" viewBox="0 0 19.62 22.608">
                  <path id="パス_30" data-name="パス 30" d="M11.3,0l11.3,19.62H17.669L11.3,8.841,4.939,19.62H0Z"
                    transform="translate(19.62) rotate(90)" fill="#fff" />
                </svg>
              </a>
            </div>
          </div>

          <aside>
            <div class="sidebar">
              <div class="step">
                <span>1</span>
                入力
              </div>
              <div class="step">
                <span>2</span>
                確認
              </div>
              <div class="step current">
                <span>3</span>
                完了
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <div class="textSwiper01 swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-text01.svg" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-text01.svg" alt=""></div>
        </div>
      </div>
    </div><!-- /.textSwiper01 -->

  </main>
<?php get_footer(); ?>