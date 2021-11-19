$(document).ready(function() {
    $('.filter-icon').click(function () {
        $('body').addClass('open-filter');
    })

    $('.closefilter, .filter-backgroud').click(function () {
        $('body').removeClass('open-filter');
    })

    $('.list-child-category').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    arrows:  false,
                }
            },
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    arrows:  false,
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows:  false,
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    arrows:  false,
                }
            }
        ]
    })

});
