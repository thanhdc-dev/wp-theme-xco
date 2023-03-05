jQuery('[data-fancybox="images"]').fancybox({
    transitionEffect: "circular",
    buttons: [
        "zoom",
        "fullScreen",
        "thumbs",
        "close"
    ]
});
jQuery(document).ready(function () {
    jQuery("#slide-big.owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
        dotsEach: true,
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'slideOutUp',
        animateIn: 'fadeInUp',
    });
    jQuery("#slide-thumbs.owl-carousel").owlCarousel({
        items: 4,
        loop: true,
        nav: true,
        navText: ['<img src="/wp-content/themes/thanhdc/assets/images/arrow_left.png">', '<img src="/wp-content/themes/thanhdc/assets/images/arrow_right.png">'],
        dots: true,
        dotsEach: true,
        autoplay: true,
        margin: 15,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 4,
            }
        },
    });
    const slideThumbs = jQuery('#slide-thumbs');
    slideThumbs.find('.owl-nav').removeClass('disabled');
    slideThumbs.on('changed.owl.carousel', function (event) {
        jQuery(this).find('.owl-nav').removeClass('disabled');
        jQuery('#slide-thumbs').find('.owl-dot').each(function (index, value) {
            if (jQuery(value).hasClass('active')) {
                jQuery('#slide-big').find('.owl-dot').each(function (index2, value) {
                    if (index2 === index) {
                        jQuery(value).trigger('click');
                    }
                });
            }
        })
    });
    const $category = jQuery('#data-category').attr('data-category');
    jQuery('a[data-id="' + $category + '"]').addClass('active')
});
