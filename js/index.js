$(document).ready(function () {
    $(".menu-trigger").click(function () {
        $(this).toggleClass("active");
        $(".hamburger__menu, .header__bar , body").toggleClass("active");

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

    (function () {
        if ($('body').hasClass('home')) { // トップページのみ対象
            const $header = $('.header__bar');
            const fvHeight = $('.top-fv').outerHeight(); // ファーストビューの高さ取得

            $(window).on('scroll', function () {
                if ($(this).scrollTop() > fvHeight) {
                    $header.addClass('scrolled');
                } else {
                    $header.removeClass('scrolled');
                }
            });
        }
    })();

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target); // 一度だけ実行したいとき
            }
        });
    }, {
        threshold: 0.1 // 画面に10％見えたら発火
    });

    document.querySelectorAll(".fade-in-up").forEach(el => {
        observer.observe(el);
    });

    const header = document.querySelector('.header');
    const initialHeaderHeight = header.offsetHeight;

    window.addEventListener('scroll', function () {
        const scrollY = window.pageYOffset;
        const viewportHeight = window.innerHeight; // 100vh 相当

        if (scrollY >= viewportHeight) {
            header.classList.add('scrolled'); // ← ここで 'scrolled' を追加
            document.body.style.marginTop = initialHeaderHeight + 'px';
        } else {
            header.classList.remove('scrolled'); // ← ここで削除
            document.body.style.marginTop = '0';
        }
    });





    const topAboutSwiper = new Swiper(".top-about__swiper", {
        loop: true,
        speed: 500,
        spaceBetween: 16,
        slidesPerView: 1.36,
        centeredSlides: true,
        allowTouchMove: false,
        freeMode: true,
        freeModeMomentum: false,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        breakpoints: {
            767: {
                spaceBetween: 24
            },
            1024: {
                spaceBetween: 34,
                slidesPerView: 2.7,
            }
        }
    });

    // Swiper 初期化
    const staffSwiper = new Swiper(".staff__swiper", {
        loop: true,
        slidesPerView: 1.38,
        speed: 500,
        spaceBetween: 23,
        allowTouchMove: false,
        freeMode: true,
        freeModeMomentum: false,
        autoplay: {

            delay: 3000,
            disableOnInteraction: false,
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
            1199: {
                slidesPerView: 3.61,
                spaceBetween: 43
            }
        }
    });

});

