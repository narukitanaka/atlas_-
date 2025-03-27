<?php get_header(); ?>
  <main>

    <div class="under_head head-left">
      <div class="inner">
        <div class="ttl-wrap under_head_ttl">
          <div class="en">COMPANY PROFILE</div>
          <h1>会社概要</h1>
        </div>
      </div>
      <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/p-company_kv.jpg" alt=""></div>
    </div>

    <div class="textSwiper01 swiper company">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-text01.svg" alt=""></div>
        </div>
        <div class="swiper-slide">
          <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/slider-text01.svg" alt=""></div>
        </div>
      </div>
    </div><!-- /.textSwiper01 -->


    <section class="p-under p-company">
      <div class="inner">
        <div class="left">
          <div class="ttl-wrap">
            <div class="en">COMPANY PROFILE</div>
            <h2>会社概要</h2>
          </div>
        </div>
        <div class="right">
          <table>
            <tr>
              <th>会社名</th>
              <td>アトラス埋込型信号機株式会社</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>岩谷 昌洋</td>
            </tr>
            <tr>
              <th>設立</th>
              <td>2023年5月</td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>1000万円</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>
                〒530-0004<br>
                大阪府大阪市北区堂島浜1-1-8 角屋堂島パークビル5 階
              </td>
            </tr>
            <tr>
              <th>TEL</th>
              <td>06-6616-8811</td>
            </tr>
            <tr>
              <th>FAX</th>
              <td>06-6616-8812</td>
            </tr>
          </table>
        </div>
      </div>
    </section>


    <?php get_template_part('inc/cta'); ?>

  </main>
<?php get_footer(); ?>