$(document).ready(function() {
    if (screen.width < 960) {
        $(document).on('click', '.make-change-button', function () {
            $('.bought-together-change').addClass('active-change-item');
            $('body').addClass('make-change-item-product')
        })
    } else {
        $('.make-change-button').mouseup(function(e) {
            $('.bought-together-change').removeClass('active-change-item');
            $(e.target).parents('.bought-together-change').addClass('active-change-item');
        });

        $(document).mouseup(function(e) {
            var container = $('.bought-together-change');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.removeClass('active-change-item')
            }
        });
        $(document).on('keyup',function(evt) {
            if (evt.keyCode == 27 && $('.bought-together-change').hasClass('active-change-item')) {
                $('.bought-together-change').removeClass('active-change-item')
            }
        });
    }

    $(document).on('click', '.make-change-cancel, .make-change-cancel-background', function () {
        $('.bought-together-change').removeClass('active-change-item');
        $('body').removeClass('make-change-item-product');
    })

    $('.similar-products-list').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
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

    $(document).on('click', '.js-customer-button, .action-cancel', function () {
        $('#moduleReviewForm').slideToggle();
        $(this).toggleClass('comment-active')
        // if ('.js-customer-button').hasClass('comment-active') {
        //     $(this).text('Hủy').addClass('js-close-form');
        // } else {
        //     $(this).text('Đánh giá và nhận xét').removeClass('js-close-form');
        // }
    })

    $(document).on('click', '.js-reply-comment', function () {
        $(this).next().slideDown();
    })

    $(document).on('click', '.product-sub-title', function () {
        $(this).next().slideToggle();
    })

    $(document).on('click', '.js-viewmore-btn', function () {
        $(this).find('.viewmore-text').hide();
        $(this).find('.loading-icon').show();
        setTimeout(function () {
            $('.viewmore-text').show();
            $('.loading-icon').hide();
        }, 1000)
    })

    if (screen.width < 780) {
        $('.contentbox').find('img').removeAttr('style');
    }
});
