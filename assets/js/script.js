$(document).ready(function() {
    // $("#click").click(function (){
    //     $('html, body').animate({
    //         scrollTop: $("#div1").offset().top
    //     }, 2000);
    // });

    $(window).scroll(function() {
        var headerHeight = $('#header').height()
        if ($(this).scrollTop() > headerHeight) {
            $('.myDiv').addClass('navigation-fixed');
        } else {
            $('.myDiv').removeClass('navigation-fixed');
        }
    });


    $('.navigation-icon').click(function () {
        $('body').addClass('open-menu');
    })

    $('.navigation-background').click(function () {
        $('body').removeClass('open-menu');
    })

    $('.goto-lev3-menu').click( function() {
        $(this).parents('.main-menu').addClass('open-lev3-menu');
        $(this).parents('.has-lev3-menu').addClass('lev3-menu-active');

    })

    if (screen.width > 1100) {
        var heightMenu = $('.main-menu').height();
        $('.banner-wrapper').css('height', heightMenu);
    }

    $('.main-banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false
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

    $('.tab-action-item').click( function () {
         let value = $(this).attr('data-name');
         $(this).addClass('active').siblings().removeClass('active');
         // let targetAction = $(this).parents('.tab-products-list-wrapper').find('data-id=[' + target +']')
         // let targetAction = $(this).parents('.tab-products-list-wrapper').find('.tab-products-list-box[data-id= ' + target + ' ]')
         $(this).parents('.tab-products-list-wrapper').find('.tab-products-list-box[data-id= ' + value + ' ]').addClass('active').siblings().removeClass('active');
    })
});
