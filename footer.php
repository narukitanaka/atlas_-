  <footer>
    <div class="inner">

      <div>
        <div class="logo img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></div>
        <table>
          <tr>
            <th>所在地</th>
            <td>大阪府大阪市北区堂島浜1-1-8 角屋堂島パークビル5F</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>06-6616-8811</td>
          </tr>
          <tr>
            <th>Eメール</th>
            <td>info@atlas-signal.jp</td>
          </tr>
        </table>
        <div class="btn-wrap">
          <a class="btn bgc-wh" href="<?php echo home_url('/contact'); ?>">
            お問い合わせ
            <svg xmlns="http://www.w3.org/2000/svg" width="19.62" height="22.608" viewBox="0 0 19.62 22.608">
              <path id="パス_30" data-name="パス 30" d="M11.3,0l11.3,19.62H17.669L11.3,8.841,4.939,19.62H0Z"
                transform="translate(19.62) rotate(90)" fill="#fff" />
            </svg>
          </a>
        </div>
      </div>

      <div class="nav-wrap">
        <nav>
          <ul>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li>
              取扱製品
              <div class="little-nav">
                <a href="<?php echo home_url('/product01'); ?>">- 面発光床信号灯</a>
                <a href="<?php echo home_url('/product02'); ?>">- 横断歩道安全誘導灯</a>
                <a href="<?php echo home_url('/product03'); ?>">- 横断歩道照明ボラード</a>
              </div>
            </li>
          </ul>
          <ul>
            <li><a href="<?php echo home_url('/test-information'); ?>">試験情報</a></li>
            <li><a href="<?php echo home_url('/company'); ?>">会社概要</a></li>
            <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
          </ul>
        </nav>
      </div>

    </div>
    <p><small>© アトラス埋込型信号機株式会社 All Rights Reserved.</small></p>
  </footer>

  <!-- js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <?php wp_footer(); ?>
</body>

</html>