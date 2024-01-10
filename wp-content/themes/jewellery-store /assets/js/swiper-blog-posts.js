const swiper2 = new Swiper('.design-blog-container', {
        freeMode: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.design-blog-right-btn',
            prevEl: '.design-blog-left-btn',
        },
    }
);