jQuery(document).ready(function ($) {
    $('.main-menu-item-with-submenu').on('click', function (event) {
        event.preventDefault();
        $(this).toggleClass('submenu-open');


        let $submenuElement = $(this).find('.top-level-sub-menu');
        let $hoverElement = $(this).find('.top-level-link');
        if ($(this).hasClass('submenu-open')) {
            $submenuElement.addClass('top-level-sub-menu-open');
            $hoverElement.addClass('disable-hover');
        } else {
            $submenuElement.removeClass('top-level-sub-menu-open');
            $hoverElement.removeClass('disable-hover');
        }
    });


    $(document).on('click', function (e) {
        if (!$(e.target).closest('.main-menu-item-with-submenu').length) {
            $('.main-menu-item-with-submenu').removeClass('submenu-open');
            $('.top-level-sub-menu').removeClass('top-level-sub-menu-open');
            $('.top-level-link').removeClass('disable-hover');
        }
    });

    $('.top-level-sub-menu').on('click', function (e) {
        e.stopPropagation();
    });

});