// Header
// Header - Slider
jQuery(document).ready(function() {
    jQuery('.tp-banner').revolution(
        {
        dottedOverlay: 'none',
        delay: 100000,
        startwidth: 1800,
        startheight: 900,

        hideThumbs: 200,
        thumbWidth: 90,
        thumbHeight: 40,
        thumbAmount: 2,

        navigationType: 'bullet',
        navigationArrows: 'solo',
        navigationStyle: 'round',

        touchenabled: 'on',
        onHoverStop: 'off',

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        spinner: 'none',
        keyboardNavigation: 'off',

        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',

        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: 'off',

        autoHeight: 'off',
        forceFullWidth: 'off',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1900,

        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
        });
});
// setTimeout(function () {
//     jQuery('.tp-banner').show().revolution({
//         dottedOverlay: 'none',
//         delay: 5000,
//         startwidth: 1800,
//         startheight: 900,
//
//         hideThumbs: 200,
//         thumbWidth: 90,
//         thumbHeight: 40,
//         thumbAmount: 2,
//
//         navigationType: 'bullet',
//         navigationArrows: 'solo',
//         navigationStyle: 'round',
//
//         touchenabled: 'on',
//         onHoverStop: 'off',
//
//         swipe_velocity: 0.7,
//         swipe_min_touches: 1,
//         swipe_max_touches: 1,
//         drag_block_vertical: false,
//
//         spinner: 'none',
//         keyboardNavigation: 'off',
//
//         navigationHAlign: 'center',
//         navigationVAlign: 'bottom',
//         navigationHOffset: 0,
//         navigationVOffset: 20,
//
//         soloArrowLeftHalign: 'left',
//         soloArrowLeftValign: 'center',
//         soloArrowLeftHOffset: 20,
//         soloArrowLeftVOffset: 0,
//
//         soloArrowRightHalign: 'right',
//         soloArrowRightValign: 'center',
//         soloArrowRightHOffset: 20,
//         soloArrowRightVOffset: 0,
//
//         shadow: 0,
//         fullWidth: 'on',
//         fullScreen: 'off',
//
//         stopLoop: 'off',
//         stopAfterLoops: -1,
//         stopAtSlide: -1,
//
//         shuffle: 'off',
//
//         autoHeight: 'off',
//         forceFullWidth: 'off',
//         fullScreenAlignForce: 'off',
//         minFullScreenHeight: 0,
//         hideNavDelayOnMobile: 1900,
//
//         hideThumbsOnMobile: 'off',
//         hideBulletsOnMobile: 'off',
//         hideArrowsOnMobile: 'off',
//         hideThumbsUnderResolution: 0,
//
//         hideSliderAtLimit: 0,
//         hideCaptionAtLimit: 0,
//         hideAllCaptionAtLilmit: 0,
//         startWithSlide: 0,
//         fullScreenOffsetContainer: ''
//     });
// }, 1000);

function sliderLeftBox() {
    const sliderLeftBoxText = $('.slider-left-box').find('.text');
    const wgSliderWidth = sliderLeftBoxText.width();
    sliderLeftBoxText.css({
        left: '-' + (wgSliderWidth / 2 - 6) + 'px',
        top: '-' + (wgSliderWidth / 2 + 30) + 'px',
    })
}

sliderLeftBox();
$(window).resize(function () {
    sliderLeftBox();
});

let countInterval = 0;
const interval = setInterval(function () {
    sliderLeftBox();
    countInterval++;
    if (countInterval === 40) {
        clearInterval(interval);
    }
}, 100)

// Home page
function setHeightBoxProject() {
    if ($(window).width() > 767) {
        const heightBoxProject = $('.img-get-height-box').height();
        $('.box-project-feature').find('.info').height(heightBoxProject - 120 - 50)
    }
}

setHeightBoxProject();
jQuery(document).ready(function () {
    setHeightBoxProject();
});
$(window).resize(function () {
    setHeightBoxProject();
})

$(".box-testimonial .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    dots: false,
    dotsEach: true,
    autoplay: true,
    autoplayTimeout: 5000,
});

$('.menu-mobile').on('click', function (e) {
    $('.main-nav').slideToggle(100);
});
wow = new WOW({boxClass: 'wow', animateClass: 'animated', offset: 0, mobile: false, live: true});
wow.init();
