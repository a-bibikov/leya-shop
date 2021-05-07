$(document).ready(function(){
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

    const alert = $('.alert');
    $('a[href*="ADD2BASKET"]').on('click', (e) => {
        e.preventDefault();
        const url = e.target.href;
        console.log(e)
        $.ajax({
            url: url,
            async: false,
            success: () => {
                alert.addClass('active');
                e.target.classList.add('active');
                e.target.innerHTML = 'В корзине';
            }
        })
    })
    $('.js-alert-close').on('click', () => {
        alert.removeClass('active');
    })

    const menu = $('.menu');
    $('.js-menu-show').on('click', () => {
        menu.addClass('active');
    })
    $('.js-menu-close').on('click', () => {
        menu.removeClass('active');
    })

    window.addEventListener('scroll', function(e) {
        let scrollPosition = window.scrollY;
        console.log(scrollPosition)
        if(scrollPosition > 1400) {
            $('.scroll').addClass('active');
        } else {
            $('.scroll').removeClass('active');
        }
    });
    $('.js-scroll-top').on('click', () => {
        window.scrollTo(0, 0);
    })
});