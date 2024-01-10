jQuery(document).ready(function ($) {
    $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();
        let targetId = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(targetId).offset().top
        }, 1000);
    });
});
