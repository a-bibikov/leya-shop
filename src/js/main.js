$(document).ready(function() {
    $('#welcome__slider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        margin: 0,
        merge: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay: true,
        lazyLoad: true,
        autoplayTimeout: 50000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
    });
});