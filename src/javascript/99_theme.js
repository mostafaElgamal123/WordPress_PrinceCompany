/*global window, document, getSiblings ,setInterval, clearInterval,getElements,getElement,getNextSibling,getPrevSibling,setAttributes,getComputedStyle,pageDirection,console*/
/*jslint es6 */
/*=== Theme Customize ===*/
document.addEventListener('DOMContentLoaded', function () {
    'use strict';  


    //===== Main Slider =====//
    var main_slider = getElement('.main-slider .hero-slider');
    if (main_slider) {
        var heroSlider = tns({
            container: main_slider,
            items: 1,
            slideBy: 'page',
            autoplay: true,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
            controls: false,
            responsive: {
                768: {
                    controls: true
                }

            },
        });
        main_slider.closest('.tns-outer').classList.add('hero-slider-outer');
    };

    //===== Certificate Slider =====//
    var certificate_slider = getElement('.certificate-slider .hero-slider');
    if (certificate_slider) {
        var heroSlider = tns({
            container: certificate_slider,           
            slideBy: 'page',
            autoplay: true,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
            controls: false,
            gutter: 10,
            responsive: {
                360: {
                    items: 1,
                },
                768: {
                    items: 3,
                },
                1024: {
                    items: 6,
                }
            },
        });
        certificate_slider.closest('.tns-outer').classList.add('hero-slider-outer');
    };
});