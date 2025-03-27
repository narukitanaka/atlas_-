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

    <section class="p-under p-contact">
      <div class="inner">
        <p>
          製品に関するお問い合わせや導入については下記のフォームよりご連絡ください。<br>
          担当者より追ってご連絡差し上げます。
        </p>
        <div>

          <div class="content">
            <?php echo do_shortcode('[contact-form-7 id="71cd7fa" title="お問い合わせ"]'); ?>
          </div>

          <aside>
            <div class="sidebar">
              <div class="step current">
                <span>1</span>
                入力
              </div>
              <div class="step">
                <span>2</span>
                確認
              </div>
              <div class="step">
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