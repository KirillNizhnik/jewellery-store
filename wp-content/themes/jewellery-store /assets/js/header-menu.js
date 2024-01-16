jQuery(document).ready(function ($) {
    $('.main-menu-item-with-submenu').on('click', function (event) {
        event.preventDefault();
        let $submenuElement = $(this).find('.top-level-sub-menu');
        let $hoverElement = $(this).find('.top-level-link');
        let $shevron = $(this).find('.header__menu-item-chevron');


        if ($(this).hasClass('submenu-open')) {
            $(this).removeClass('submenu-open');
            $submenuElement.removeClass('top-level-sub-menu-open');
            $shevron.removeClass('rotate-180')
            $hoverElement.removeClass('enable-active');
            $(this).removeClass('grey-hover');
        } else {
            $('.submenu-open').removeClass('submenu-open');
            $('.top-level-sub-menu-open').removeClass('top-level-sub-menu-open');
            $('.enable-active').removeClass('enable-active');
            $('.header__menu-item-chevron').removeClass('rotate-180');
            $('.top-level-menu-item').addClass('grey-hover');

            $(this).removeClass('grey-hover');
            $(this).addClass('submenu-open');
            $submenuElement.addClass('top-level-sub-menu-open');
            $hoverElement.addClass('enable-active');
            $shevron.addClass('rotate-180');
        }
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.main-menu-item-with-submenu').length) {
            $('.main-menu-item-with-submenu').removeClass('submenu-open');
            $('.top-level-sub-menu').removeClass('top-level-sub-menu-open');
            $('.disable-hover').removeClass('disable-hover');
            $('.header__menu-item-chevron').removeClass('rotate-180');
            $('.enable-active').removeClass('enable-active');
            $('.top-level-menu-item').addClass('grey-hover');

        }
    });

    $('.top-level-sub-menu').on('click', function (e) {
        e.stopPropagation();
    });
});
