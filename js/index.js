$(document).ready(function () {
    $(".menu-trigger").click(function () {
        $(this).toggleClass("active");
        $(".header__nav, .overlay").toggleClass("active");

    })

    // レスポンシブの375px未満のviewport画面幅を固定
    const viewport = document.querySelector('meta[name="viewport"]');
    function switchViewport() {
        const value =
            window.outerWidth > 375
                ? 'width=device-width,initial-scale=1'
                : 'width=375';
        if (viewport.getAttribute('content') !== value) {
            viewport.setAttribute('content', value);
        }
    }
    addEventListener('resize', switchViewport, false);
    switchViewport();

    const topAboutSwiper = new Swiper(".top-about__swiper", {
        loop: false, // ← ここは false！
        speed: 6000,
        spaceBetween: 16,
        slidesPerView: 2.75,
        centeredSlides: true,
        allowTouchMove: false,
        freeMode: true,
        freeModeMomentum: false,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        },

        breakpoints: {
            767: {
                spaceBetween: 24
            },
            1024: {
                spaceBetween: 34,
                slidesPerView: 2.75,
            }
        }
    });

    // Swiper 初期化
    const staffSwiper = new Swiper(".staff__swiper", {
        loop: true,
        slidesPerView: 1.3,
        speed: 6000,
        spaceBetween: 23,
        allowTouchMove: false,
        autoplay: {
            delay: 0
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // 前後の矢印
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            767: {
                slidesPerView: 2.6,
                spaceBetween: 33
            },
            1024: {
                slidesPerView: 3.55,
                spaceBetween: 43
            }
        }
    });
});


