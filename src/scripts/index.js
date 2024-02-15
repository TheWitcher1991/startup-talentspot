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
})


