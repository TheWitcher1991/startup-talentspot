$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: false,
        margin: 20,
        nav: true,
        navText: [
            '<span class="mdi mdi-arrow-left"></span>',
            '<span class="mdi mdi-arrow-right"></span>'
        ],
        responsive: {
            800: {
                items: 3
            }
        }
    })

    $(document).on('click', '.create__contact', () => {
        $('.modal__full').fadeIn(200).css('display', 'flex')
        $('body').css('overflow', 'hidden')
    })

    $(document).on('click', '.modal__title', () => {
        $('.modal__full').fadeOut(200)
        $('body').css('overflow', 'auto')
    })

    $(document).on('click', '.mobile__menu__bth', function() {

        if ($(this).hasClass('mdi-menu')) {
            $(this).removeClass('mdi-menu')
            $(this).addClass('mdi-close')
        } else {
            $(this).removeClass('mdi-close')
            $(this).addClass('mdi-menu')
        }

        $('.mobile__menu').fadeToggle(200)
    })

    $(document).on('click', '.mobile__menu a', e => {
        if ($('.mobile__menu__bth').hasClass('mdi-menu')) {
            $('.mobile__menu__bth').removeClass('mdi-menu')
            $('.mobile__menu__bth').addClass('mdi-close')
        } else {
            $('.mobile__menu__bth').removeClass('mdi-close')
            $('.mobile__menu__bth').addClass('mdi-menu')
        }

        $('.mobile__menu').fadeOut(0)
    })

    $(window).scroll(() => {
        let scroll = $(window).scrollTop()
        if (scroll > 64) {
            $('.arrow__up').fadeIn(200)
            $('.arrow__up').css({display: 'flex'})
        } else {
            $('.arrow__up').fadeOut(200)
        }
    })

    $('html, body').on('click', '.arrow__up', e => {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: 0
        }, 400)
    })

    var cookieName = "showBannerCookies";

    var createCookie = function (name, value, days) {
        var expires;
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    };

    const getCookie = c_name => {
        if (document.cookie.length > 0) {
            c_start = document.cookie.indexOf(c_name + "=");
            if (c_start !== -1) {
                c_start = c_start + c_name.length + 1;
                c_end = document.cookie.indexOf(";", c_start);
                if (c_end === -1) {
                    c_end = document.cookie.length;
                }
                return unescape(document.cookie.substring(c_start, c_end));
            }
        }
        return '';
    };

    let cookie = getCookie(cookieName);

    $(".cookie__block").toggle(cookie === '', 0)


    $(".cookie__ok").click(function () {
        //console.log("Creating cookie!");
        createCookie(cookieName, 1, 30);
        $(".cookie__block").toggle(0)
    });
})


