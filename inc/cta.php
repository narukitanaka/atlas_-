<section id="cta" class="fadeIn<?php 
    if (is_single() || is_archive()) {
        echo ' p-news'; 
    } elseif (is_page(array('product01', 'product02', 'product03'))) {
        echo ' p-product';
    } elseif (is_page('company')) {
        echo ' company';
    } elseif (is_page('test-information')) {
        echo ' p-test';
    }
?>">
  <?php if(is_single() || is_archive()): ?>
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
  <?php endif; ?>
  <div class="inner">
    <div class="content">
      <div class="ttl-wrap">
        <div class="en">CONTACT</div>
        <h2>お問い合わせ</h2>
      </div>
      <p>製品に関するお問い合わせなど、<br class="u-sp">お気軽にご相談ください。</p>
      <div class="btn-wrap">
        <a class="btn bgc-blue" href="<?php echo home_url('/contact'); ?>">
          お問い合わせフォーム
          <svg xmlns="http://www.w3.org/2000/svg" width="19.62" height="22.608" viewBox="0 0 19.62 22.608">
            <path id="パス_30" data-name="パス 30" d="M11.3,0l11.3,19.62H17.669L11.3,8.841,4.939,19.62H0Z"
              transform="translate(19.62) rotate(90)" fill="#fff" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>