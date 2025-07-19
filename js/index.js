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

    //header追走

    const header = document.querySelector('.header');
    const initialHeaderHeight = header.offsetHeight;

    window.addEventListener('scroll', function () {
        const scrollY = window.pageYOffset;
        const viewportHeight = window.innerHeight; // 100vh 相当

        if (scrollY >= viewportHeight) {
            header.classList.add('top-scrolled');
            document.body.style.marginTop = initialHeaderHeight + 'px';
        } else {
            header.classList.remove('top-scrolled');
            document.body.style.marginTop = '0';
        }
    });

    const $imgs = $('.fv-img');
    let current = 0;

    $imgs.eq(current).addClass('active');

    setInterval(() => {
        $imgs.eq(current).removeClass('active');
        current = (current + 1) % $imgs.length;
        $imgs.eq(current).addClass('active');
    }, 5000);




    const swiperElement = document.querySelector('.top-about__swiper');

    if (swiperElement) {
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
    }
    const staffSwiperElement = document.querySelector('.staff__swiper');

    if (staffSwiperElement) {
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
    }


    const tocLinks = document.querySelectorAll('.sidebar-toc a');
    const offset = 150; // ヘッダー高さ（必要に応じて調整）

    // スムーズスクロール（クリック時）
    tocLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);

            if (target) {
                const top = target.getBoundingClientRect().top + window.pageYOffset - offset;

                window.scrollTo({
                    top: top,
                    behavior: 'smooth'
                });
            }
        });
    });

    // アクティブ表示（スクロール連動）
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
                currentId = heading.getAttribute('id');
            }
        });

        tocLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${currentId}`);
        });
    });
});


