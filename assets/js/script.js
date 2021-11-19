$(document).ready(function() {
    // $("#click").click(function (){
    //     $('html, body').animate({
    //         scrollTop: $("#div1").offset().top
    //     }, 2000);
    // });

    $(window).scroll(function() {
        var headerHeight = $('#header').height()
        if ($('.banner-wrapper').length > 0) {
            heightBanner = $('.banner-wrapper').height()
        } else {
            heightBanner = 0
        }
        if ($(this).scrollTop() > (headerHeight + heightBanner)) {
            $('#navigation').addClass('navigation-fixed');
        } else {
            $('#navigation').removeClass('navigation-fixed');
        }
    });


    $('.navigation-icon').click(function () {
        $('body').addClass('open-menu');
    })

    $('.user-area').click(function () {
        $('body').addClass('open-user');
    })

    $('.closecart, .login-background-mobile').click(function () {
        $('body').removeClass('open-user');
    })



    if ($(window).width() > 1024) {
        $('.navigation').hover(function () {
            $('.navigation-background').addClass('init-background');
            $('.main-menu').show();
        }, function () {
            $('.navigation-background').removeClass('init-background')
            $('.main-menu').hide();
        }, 300);

        $('.category-menu-item').hover(function () {
            $(this).find('.lev3-menu-box').show()
        }, function () {
            $(this).find('.lev3-menu-box').hide()
        }, 300);

        $('.has-lev4-menu').hover(function () {
            $(this).find('.lev4-menu-box').show()
        }, function () {
            $(this).find('.lev4-menu-box').hide()
        }, 300);
    } else {

    }

    $('.back-to-menu').click( function () {
        $(this).parents('.main-menu').removeClass('open-lev3-menu');
        $(this).parents('.has-lev3-menu').removeClass('lev3-menu-active');
    })

    $('.goto-lev3-menu').click( function() {
        $(this).parents('.main-menu').addClass('open-lev3-menu');
        $(this).parents('.has-lev3-menu').addClass('lev3-menu-active');
    })

    $('.navigation-background').click(function () {
        $('body').removeClass('open-menu');
        $('.main-menu').removeClass('open-lev3-menu');
        $('.has-lev3-menu').removeClass('lev3-menu-active');
    })

    if (screen.width > 1100) {
        var heightMenu = $('.main-menu').height();
        $('.banner-wrapper').css('min-height', heightMenu);
    }


    $(document).mouseup(function(e) {
        var segment = $('.segment-order-tracking');
        if (!segment.is(e.target) && segment.has(e.target).length === 0) {
            $('#form-search-order').hide();
        } else {
            $('#form-search-order').show();
        }
    });

    $('#hide-segment').click (function () {
        $('#form-search-order').hide()
    })


    $(document).mouseup(function(e) {
        var searchSuggestion = $('#search-header');
        if (!searchSuggestion.is(e.target) && searchSuggestion.has(e.target).length === 0) {
            $('#popular-search-suggestion').hide();
        } else {
            $('#popular-search-suggestion').show();
        }
    });

    $('#keyword').bind('keyup change',function(){
        $('.search-loading').show();
        setTimeout(function () {
            $('.search-loading').hide();
        }, 1000)

        if(this.value.length > 3){
            $('.keyword-member').hide();
            $('.product-member').show();
        }
        else {
            $('.keyword-member').show();
            $('.product-member').hide();
        }
    });

    if (screen.width < 960) {
        $('.mini-cart-link').click(function () {
            $('body').addClass('open-miniCart');
        });

        $('.closecart, .mini-cart-background').click(function () {
            $('body').removeClass('open-miniCart');
        });
    } else {
        $(document).mouseup(function(e) {
            var miniCart = $('.mini-cart');
            if (!miniCart.is(e.target) && miniCart.has(e.target).length === 0) {
                $('.mini-cart-contain').hide();
            } else {
                $('.mini-cart-contain').show();
            }
        });
    }


    $('.main-banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.flashsale-list').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                }
            },
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    $('.tab-products-list-box').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                }
            },
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    $('.brands-wrapper').slick({
        slidesToShow: 6,
        slidesToScroll: 6,
        infinite: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                }
            },
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    $('.hot-products-list').slick({
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
                    infinite: true,
                }
            },
            {
                breakpoint: 990,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    variableWidth: true
                }
            }
        ]
    })

    $('.tab-action-item').click( function () {
         let value = $(this).attr('data-name');
         $(this).addClass('active').siblings().removeClass('active');
         $(this).parents('.tab-products-list-wrapper').find('.tab-products-list-box[data-id= ' + value + ' ]').addClass('active').siblings().removeClass('active');
    })

    $('.search-area').click( function () {
         $('.main-seach-form').slideToggle();
         $('.open-search, .close-search').toggle();
    })


    $('.news-add-to-cart').click( function () {
        $('.cart-popup').addClass('active');
        setTimeout(function () {
            $('.cart-popup').removeClass('active');
        }, 1000)
    })
});
