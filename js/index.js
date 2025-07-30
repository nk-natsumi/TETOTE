// WordPress + jQuery 対応まとめスクリプト
jQuery(function ($) {
    // ハンバーガーメニュー切替
    $('.menu-trigger').on('click', function () {
        $(this).toggleClass('active');
        $('.hamburger__menu, .header__bar, body').toggleClass('active');
    });

    // ビューポート幅制御（375px未満固定）
    const viewport = document.querySelector('meta[name="viewport"]');
    const switchViewport = () => {
        const value = window.outerWidth > 375
            ? 'width=device-width,initial-scale=1'
            : 'width=375';
        if (viewport.getAttribute('content') !== value) {
            viewport.setAttribute('content', value);
        }
    };
    window.addEventListener('resize', switchViewport);
    switchViewport();

    // フェードインアニメーション
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in-up').forEach(el => {
        observer.observe(el);
    });

    // ヘッダー追従処理
    const header = document.querySelector('.header');
    const fv = document.querySelector('.top-fv') || document.querySelector('.fv');
    const initialHeaderHeight = header.offsetHeight;

    window.addEventListener('scroll', () => {
        const scrollY = window.pageYOffset;
        const fvHeight = fv ? fv.offsetHeight : 0;
        if (scrollY >= fvHeight) {
            header.classList.add('top-scrolled');
            document.body.style.marginTop = `${initialHeaderHeight}px`;
        } else {
            header.classList.remove('top-scrolled');
            document.body.style.marginTop = '0';
        }
    });

    // FVスライド切替
    const $imgs = $('.fv-img');
    let current = 0;
    $imgs.eq(current).addClass('active');
    setInterval(() => {
        $imgs.eq(current).removeClass('active');
        current = (current + 1) % $imgs.length;
        $imgs.eq(current).addClass('active');
    }, 5000);

    // Swiper 初期化（トップabout）
    if (document.querySelector('.top-about__swiper')) {
        new Swiper('.top-about__swiper', {
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
                767: { spaceBetween: 24 },
                1024: { spaceBetween: 34, slidesPerView: 2.7 },
            },
        });
    }

    // Swiper 初期化（スタッフ）
    if (document.querySelector('.staff__swiper')) {
        new Swiper('.staff__swiper', {
            loop: true,
            speed: 500,
            slidesPerView: 1.38,
            spaceBetween: 23,
            allowTouchMove: false,
            freeMode: true,
            freeModeMomentum: false,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                767: { slidesPerView: 2.6, spaceBetween: 33 },
                1199: { slidesPerView: 3.61, spaceBetween: 43 },
            },
        });
    }

    // サイドバー目次スクロール
    const tocLinks = document.querySelectorAll('.sidebar-toc a');
    const offset = 150;

    tocLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);
            if (target) {
                const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

    const headings = Array.from(tocLinks).map(link => {
        const id = link.getAttribute('href').substring(1);
        return document.getElementById(id);
    });

    window.addEventListener('scroll', () => {
        let currentId = '';
        const scrollY = window.pageYOffset;
        headings.forEach((heading) => {
            if (!heading) return;
            const sectionTop = heading.offsetTop - offset - 10;
            if (scrollY >= sectionTop) {
                currentId = heading.id;
            }
        });
        tocLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${currentId}`);
        });
    });

    // ページ内リンク スムーススクロール
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        const headerHeight = $('.header').outerHeight();
        const target = $(this.hash);
        if (target.length) {
            const position = target.offset().top - headerHeight;
            $('html, body').animate({ scrollTop: position }, 500);
        }
    });

    // Contact Form 7：送信ボタン無効制御
    function checkRequiredFields() {
        let isValid = true;
        $('.wpcf7-form input[required], .wpcf7-form textarea[required], .wpcf7-form select[required]').each(function () {
            if (!$(this).val()) isValid = false;
        });
        $('.wpcf7-submit').prop('disabled', !isValid);
    }

    $(document).on('input change', '.wpcf7-form input, .wpcf7-form textarea, .wpcf7-form select', checkRequiredFields);
    checkRequiredFields();

    // FAQアコーディオン
    $('.faq__item summary').on('click', function (e) {
        e.preventDefault();
        const $details = $(this).parent();
        if ($details.attr('open')) {
            $details.removeAttr('open');
        } else {
            $('.faq__item').removeAttr('open');
            $details.attr('open', true);
        }
    });
});
