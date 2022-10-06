/**
 *
 * -----------------------------------------------------------------------------
 *
 * Template : WorldClipingpath - Agency Solution
 * Author : QTAcademy
 * Author URI : http://QTAcademy.com/
 *
 * -----------------------------------------------------------------------------
 *
 **/

(function ($, window, document) {
    "use strict";

    var $testimonials = $(".wc-testimonials");
    if ($testimonials.length) {
        $testimonials.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
            centerMode: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    }

    $(document).on("ready", function () {
        $(".fileinput").each((i, el) => {
            const $widget = $(el);
            const $input = $widget.children(".fileinput__input").eq(0);
            const $button = $widget.find(".fileinput__button").eq(0);
            const $statusText = $widget.find(".fileinput__status-text").eq(0);
            $button.click((e) => $input.trigger(e));
            $input.change((e) => $statusText.text(e.target.value));
        });

        $(".popup-video").magnificPopup({
            disableOn: 700,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
        });

        $(".wc-portfolio-item").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1],
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (item) {
                    return item.el.attr("title");
                },
            },
        });

        (function () {
            $(".accordion-item").on(
                "show.bs.collapse hide.bs.collapse",
                function (e) {
                    if (e.type == "show") {
                        $(this).addClass("active");
                    } else {
                        $(this).removeClass("active");
                    }
                }
            );
        }.call(this));
        /*----------------------------------------------------*/
        /*  MOBILE MENU
        /*---------------------------------------------------*/
        //Submenu Dropdown Toggle
        if ($(".wc-main-header li.dropdown ul").length) {
            $(".wc-main-header li.dropdown").append(
                '<div class="dropdown-btn"><i class="icofont-simple-down"></i></div>'
            );

            //Dropdown Button
            $(".wc-main-header li.dropdown .dropdown-btn").on(
                "click",
                function () {
                    $(this).prev("ul").slideToggle(500);
                }
            );
        }

        /*----------------------------------------------------*/
        /*  Mobile Nav Hide Show
        /*---------------------------------------------------*/

        if ($(".wc-mobile-menu").length) {
            $(".wc-mobile-menu .menu-box").mCustomScrollbar();

            var mobileMenuContent = $(
                ".wc-main-header .nav-outer .wc-main-menu"
            ).html();
            $(".wc-mobile-menu .menu-box .menu-outer").append(
                mobileMenuContent
            );
            $(".wc-sticky-header .wc-main-menu").append(mobileMenuContent);

            //Menu Toggle Btn
            $(".wc-mobile-menu .menu-backdrop,.wc-mobile-menu .close-btn").on(
                "click",
                function () {
                    $("body").removeClass("wc-mobile-menu-visible");
                }
            );
            //Dropdown Button
            $(".wc-mobile-menu li.dropdown .dropdown-btn").on(
                "click",
                function () {
                    $(this).toggleClass("open");
                    $(this).prev("ul").slideToggle(500);
                }
            );
            //Menu Toggle Btn
            $(".mobile-nav-toggler").on("click", function () {
                $("body").addClass("wc-mobile-menu-visible");
            });
        }

        /*----------------------------------------------------*/
        /*  Header Style
        /*---------------------------------------------------*/
        function headerStyle() {
            if ($(".wc-main-header").length) {
                var windowpos = $(window).scrollTop();
                var siteHeader = $(".wc-main-header");
                var scrollLink = $(".scroll-to-top");
                var sticky_header = $(".wc-main-header .wc-sticky-header");
                if (windowpos > 100) {
                    siteHeader.addClass("fixed-header");
                    sticky_header.addClass("animated slideInDown");
                    scrollLink.fadeIn(300);
                } else {
                    siteHeader.removeClass("fixed-header");
                    sticky_header.removeClass("animated slideInDown");
                    scrollLink.fadeOut(300);
                }
            }
        }

        /*---------------------*/
        /*  PopUp js
        /*---------------------*/
        function magnificPopupJs(item, type) {
            $(item).magnificPopup({ type: type });
        }

        /*
        /*----------------------------------------------------*/
        /*  Back Top Link Js
        /*---------------------------------------------------*/
        var offset = 200;
        var duration = 500;

        $(window).on("scroll", function () {
            if ($(this).scrollTop() > offset) {
                $(".back-to-top").fadeIn(400);
            } else {
                $(".back-to-top").fadeOut(400);
            }
        });

        $(".back-to-top").on("click", function (event) {
            event.preventDefault();
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                600
            );
            return false;
        });

        $("body").toggleClass("loaded");
        setTimeout(function () {
            $("body").addClass("loaded");
        }, 3000);
        /*----------------------------------------------------*/
        /*  Function Call
        /*---------------------------------------------------*/
        headerStyle();
        //funFacts();
        magnificPopupJs(".wc-video-player", "iframe");
        //progressBar();

        //$(window).scroll(funFacts);
        $(window).scroll(headerStyle);
    });

    jQuery(window).on("load", function () {
        /*------------------*/
        /*  Preloader js
        /*------------------*/
        $("#wc-preload").fadeOut(1000);
    });

    function editableField($eb, $ei) {
        var $count = 0;
        //Editable input fields
        $($eb).on("click", function () {
            $count++;
            if ($count < 2) {
                $($ei).prop("readonly", false).focus();
                $($ei).prop("placeholder", "");
                $($ei).val("");
                $(this).addClass("hide");
                $(this).closest(".editable-field").addClass("editing");
            } else {
                $($ei).prop("readonly", false).focus();
                $($eb).addClass("hide");
                $(this).closest(".editable-field").addClass("editing");
            }
        });

        $($ei).on("blur", function () {
            $($eb).removeClass("hide");
            $($ei).prop("readonly", true);
            $(this).closest(".editable-field").removeClass("editing");
        });
    }

    editableField(".edit-user-btn", ".editable-user");
    editableField(".edit-email-btn", ".editable-email");
    editableField(".edit-name-btn", ".editable-name");
    editableField(".edit-phone-btn", ".editable-phone");

    function readURL(input, imagePreview) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(imagePreview).css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $(imagePreview).hide();
                $(imagePreview).fadeIn(650);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function () {
        readURL(this, "#imagePreview");
    });
    $("#imageCover").change(function () {
        readURL(this, "#coverPreview");
    });
})(jQuery, window, document);
