////////////////////////////////////////////////////////////////////////////////////////
// Swiper
///////////////////////////////////////////////////////////////////////////////////////
function initSwipers() {
  const kvSlider = document.querySelector(".top-kvSwiper");
  if (kvSlider) {
    const kvSwiperInstance = new Swiper(kvSlider, {
      loop: true,
      effect: "fade",
      speed: 2000,
      allowTouchMove: false,
      slidesPerView: 1,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
    });
  }

  const textSwiper01 = document.querySelector(".textSwiper01");
  if (textSwiper01) {
    const textSwiperInstance01 = new Swiper(textSwiper01, {
      loop: true,
      speed: 45000,
      allowTouchMove: false,
      slidesPerView: 0.15,
      spaceBetween: 30,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      breakpoints: {
        // 画面幅が769px以上の場合
        769: {
          slidesPerView: 0.47,
          spaceBetween: 50,
        },
      },
      direction: "horizontal",
      effect: "slide",
    });
  }

  const textSwiper02 = document.querySelector(".textSwiper02");
  if (textSwiper02) {
    const textSwiperInstance02 = new Swiper(textSwiper02, {
      loop: true,
      speed: 45000,
      allowTouchMove: false,
      slidesPerView: 0.2,
      spaceBetween: 30,
      breakpoints: {
        // 画面幅が769px以上の場合
        769: {
          slidesPerView: 0.6,
          spaceBetween: 50,
        },
      },
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      direction: "horizontal",
      effect: "slide",
    });
  }
}
document.addEventListener("DOMContentLoaded", function () {
  initSwipers();
});

////////////////////////////////////////////////////////////////////////////////////////
//上にスクロールしたらヘッダーが出現する
////////////////////////////////////////////////////////////////////////////////////////
(function () {
  const header = document.getElementById("header"); // ヘッダーを取得
  const hH = header.clientHeight; // ヘッダーの高さを取得
  let lastScrollTop = 0; // 最後のスクロール位置を保持する変数

  // スクロールイベントリスナー
  window.addEventListener("scroll", () => {
    const currentScroll =
      window.pageYOffset || document.documentElement.scrollTop;

    // ヘッダーの上下スクロール制御
    if (currentScroll > lastScrollTop && currentScroll > hH) {
      // 下にスクロール
      header.classList.add("header--unpinned");
    } else {
      // 上にスクロール
      header.classList.remove("header--unpinned");
    }

    // ページ上部からの位置に基づくクラス制御
    if (currentScroll > 0) {
      // ページの一番上から離れている場合
      header.classList.add("header--flow");
    } else {
      // ページの一番上にいる場合
      header.classList.remove("header--flow");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // ネガティブなスクロール値を防ぐ
  });
})();

///////////////////////////////////////////
//ハンバーガーメニュー
//////////////////////////////////////////
$(".hambager").on("click", function () {
  navOpen();
});
let navFlg = false;
function navOpen() {
  if (!navFlg) {
    $(".hamberger-wrap").addClass("is-ham-open");
    $(".drawer-menu").addClass("is-drawermenu-open");
    $("header").addClass("is-drawermenu-header");
    navFlg = true;
  } else {
    $(".hamberger-wrap").removeClass("is-ham-open");
    $(".drawer-menu").removeClass("is-drawermenu-open");
    $("header").removeClass("is-drawermenu-header");
    navFlg = false;
  }
}
// ページ内リンクをクリックしたときにメニューを閉じる
$('.drawer-menu a[href^="#"]').on("click", function () {
  if (navFlg) {
    navOpen(); // メニューが開いている場合は閉じる
  }
});

////////////////////////////////////////////////////////////////////////////////////////
// GSAP アニメーション
///////////////////////////////////////////////////////////////////////////////////////
// GSAPフェードイン
const textElements = document.querySelectorAll(".fadeIn");
if (textElements.length > 0) {
  textElements.forEach((element) => {
    gsap.from(element, {
      opacity: 0,
      y: 20,
      duration: 0.8,
      ease: "power2.out",
      scrollTrigger: {
        trigger: element, // 各要素をトリガーに
        start: "top 60%",
        once: true,
      },
    });
  });
}
