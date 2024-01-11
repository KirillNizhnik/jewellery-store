jQuery(document).ready(function ($) {
    $('.header__cart').click(function (e) {
        e.stopPropagation();

        $('.shopping_cart_closed').toggleClass('shopping_cart_open');
        $("body").toggleClass("no-scroll");
    });

    $('.close-cart-img').click(function (e) {
        e.stopPropagation();
        $('.shopping_cart_closed').removeClass('shopping_cart_open');
        $("body").removeClass("no-scroll");
    });

    $('.shopping-cart__inner').click(function (e) {
        e.stopPropagation();
    });

    $(document).on('click', function (e) {
        if (!$(e.target).closest('.shopping_cart_closed').length) {
            $('.shopping_cart_closed').removeClass('shopping_cart_open');
            $("body").removeClass("no-scroll");
        }
    });

    $('.add-to-cart').on('click', function (){
        console.log('dadwa');
    })
});


