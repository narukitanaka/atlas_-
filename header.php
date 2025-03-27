<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/fav.png" />
  <!-- <meta name="robots" content="index, follow"> -->
  <meta name="format-detection" content="telephone=no">
  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.0.1/dist/css/yakuhanjp.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <!-- Adobeフォント -->
  <script>
    (function (d) {
      var config = {
        kitId: 'foz2etg',
        scriptTimeout: 3000,
        async: true
      },
        h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Open+Sans:wght@700&display=swap"
    rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <title>アトラス埋め込み式信号機 株式会社</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <header id="header">
    <div class="header-inner">

      <div class="logo img-box">
        <a href="<?php echo home_url('/'); ?>">
          <img class="white" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
          <img class="black" src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" alt="">
        </a>
      </div>

      <div class="nav_wrap">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
          <li class="parent">
            取扱製品
            <div>
              <div>
                <a href="<?php echo home_url('/product01'); ?>">- 面発光床信号灯</a>
                <a href="<?php echo home_url('/product02'); ?>">- 横断歩道安全誘導灯</a>
                <a href="<?php echo home_url('/product03'); ?>">- 横断歩道照明ボラード</a>
              </div>
            </div>
          </li>
          <li><a href="<?php echo home_url('/test-information'); ?>">試験情報</a></li>
          <li><a href="<?php echo home_url('/company'); ?>">会社概要</a></li>
          <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
        </ul>
        <div class="btn-area"><a class="btn btn-wh" href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></div>
      </div>

      <div class="hamberger-wrap">
        <div class="ham-inner">
          <div class="hambager-content">
            <button type="button" class="hambager">
              <span class="c-line"></span>
              <span class="c-line"></span>
              <span class="c-line"></span>
            </button>
          </div><!-- /.hambager-content -->
        </div>
      </div><!-- hamberger-wrap -->

    </div><!-- /.header-inner -->

    </div>
  </header>

  <div class="drawer-menu">
    <div class="drawer-menu_inner">
      <div class="nav-wrap">
        <nav>
          <ul>
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li class="parent">
              取扱製品
              <div class="child">
                <a href="<?php echo home_url('/product01'); ?>">- 面発光床信号灯</a>
                <a href="<?php echo home_url('/product02'); ?>">- 横断歩道安全誘導灯</a>
                <a href="<?php echo home_url('/product03'); ?>">- 横断歩道照明ボラード</a>
              </div>
            </li>
            <li><a href="<?php echo home_url('/test-information'); ?>">試験情報</a></li>
            <li><a href="<?php echo home_url('/company'); ?>">会社概要</a></li>
            <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
          </ul>
        </nav>
      </div><!-- /.nav-wrap -->

      <div class="btn-wrap">
        <a class="btn bgc-blue" href="<?php echo home_url('/contact'); ?>">
          お問い合わせ
          <svg xmlns="http://www.w3.org/2000/svg" width="19.62" height="22.608" viewBox="0 0 19.62 22.608">
            <path id="パス_30" data-name="パス 30" d="M11.3,0l11.3,19.62H17.669L11.3,8.841,4.939,19.62H0Z"
              transform="translate(19.62) rotate(90)" fill="#fff" />
          </svg>
        </a>
      </div>

    </div><!-- /.drawer-menu_inner -->
  </div><!-- /.drawer-menu -->