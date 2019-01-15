/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import  Swiper from 'swiper';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// let cart = require('./components/Cart.vue');
//
// const app = new Vue({
//     el: '#app',
//     components: {
//         cart
//     },
// });

$(document).ready(function () {
    //page url
    var pageUrl = window.location.href
    if(pageUrl.includes('detail')){
        setTimeout(startSwiper, 200);
    }else{
    //swiper for main carousel
    var swiper = new Swiper('#carousel', {
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    //swiper for most sale books
    var mostSale = new Swiper('#mostSales', {
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });
    //swiper for most sales detail page
    }
    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function () {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    if ($('.server-response').hasClass('active')) {
        $('.server-response').addClass('sr-active')
    }
    setTimeout(closeServerResponse, 3000);

    if (pageUrl.includes('user-profile')) {
        try {
            $('#userCardNavProfile').addClass('nav-active')
        } catch (err) {

        }
    } else if (pageUrl.includes('user-orders')) {
        try {
            $('#userCardNavOrders').addClass('nav-active')
        } catch (err) {

        }
    } else if (pageUrl.includes('user-cart')) {
        try {
            $('#userCardNavCart').addClass('nav-active')
        } catch (err) {

        }
    }


    if (pageUrl.includes('admin-orders')) {
        try {
            $('#adminCardNavOrders').addClass('nav-active')
        } catch (err) {

        }
    } else if (pageUrl.includes('admin-site')) {
        try {
            $('#adminCardNavSite').addClass('nav-active')
        } catch (err) {

        }
    } else if (pageUrl.includes('admin-book')) {
        try {
            $('#adminCardNavBooks').addClass('nav-active')
        } catch (err) {

        }
    } else if (pageUrl.includes('admin-change-password')) {
        try {
            $('#adminCardNavPass').addClass('nav-active')
        } catch (err) {

        }
    }

})
function closeServerResponse() {
    if ($('.server-response').hasClass('active')) {
        $('.server-response').removeClass('sr-active');
        $('.server-response').removeClass('active')
    }
    // $('.server-response').addClass('d-none');
}
function startSwiper(){
    var mostSaleSwiperDateil = new Swiper('#DetailSlides', {
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false,
        // },
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            500: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });
}

//scroll top

$(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function () {
    $(".scroll").click(function () {
        $("html,body").animate({scrollTop: $(".thetop").offset().top}, "1000");
        return false
    })
})


