(function ($) {
    "use strict";

    /*--------------------------
  preloader
  ---------------------------- */
    $(window).on("load", function () {
        var pre_loader = $("#preloader");
        pre_loader.fadeOut("slow", function () {
            $(this).remove();
        });
    });

    /*---------------------
   TOP Menu Stick
  --------------------- */
    var s = $("#sticker");
    var pos = s.position();
    $(window).on("scroll", function () {
        var windowpos = $(window).scrollTop() > 300;
        if (windowpos > pos.top) {
            s.addClass("stick");
            $(".sticky-logo").css({ width: "130px" });
            $(".menu-responsive").css({
                top: "70px",
            });
        } else {
            s.removeClass("stick");
            if ($(window).width() < 991) {
                $(".sticky-logo").css({ width: "130px" });
                $(".menu-responsive").css({
                    top: "70px",
                });
            } else {
                $(".sticky-logo").css({ width: "auto" });
                $(".menu-responsive").css({
                    top: "100px",
                });
            }
        }
        if ($(window).width() < 768) {
            $(".menu-responsive").css({
                top: "60px",
            });
        }
    });

    $(window).on("resize", function () {
        if ($(window).width() < 991) {
            $(".sticky-logo").css({ width: "130px" });
            $(".menu-responsive").css({
                top: "70px",
            });
        } else {
            $(".sticky-logo").css({ width: "auto" });
            $(".menu-responsive").css({
                top: "100px",
            });
        }

        if ($(window).width() < 768) {
            $(".menu-responsive").css({
                top: "60px",
            });
        }
    });
    let visible = false;
    $("#btn-menu").on("click", function () {
        if (visible) {
            $(".menu-responsive").css({
                visibility: "hidden",
                opacity: 0,
            });
            visible = false;
        } else {
            $(".menu-responsive").css({
                visibility: "visible",
                opacity: 1,
            });
            visible = true;
        }
    });

    /*----------------------------
   Navbar nav
  ------------------------------ */
    var main_menu = $(".main-menu ul.navbar-nav li ");
    main_menu.on("click", function () {
        main_menu.removeClass("active");
        $(this).addClass("active");
    });

    var responsive_menu = $(".menu-responsive ul li ");
    responsive_menu.on("click", function () {
        responsive_menu.removeClass("responsive-active");
        responsive_menu.map(() => {
            responsive_menu.children("a").removeClass("responsive-active");
        });
        $(this).children("a").addClass("responsive-active");
        $(".menu-responsive").css({ visibility: "hidden", opacity: 0 });
        visible = false;
    });

    /*----------------------------
   wow js active
  ------------------------------ */
    new WOW().init();

    $(".navbar-collapse a").on("click", function () {
        $(".navbar-collapse.collapse").removeClass("in");
    });

    //---------------------------------------------
    //Nivo slider
    //---------------------------------------------
    $("#ensign-nivoslider").nivoSlider({
        effect: "random",
        slices: 15,
        boxCols: 12,
        boxRows: 8,
        animSpeed: 500,
        pauseTime: 5000,
        startSlide: 0,
        directionNav: true,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: false,
    });

    /*----------------------------
   Scrollspy js
  ------------------------------ */
    var Body = $("body");
    Body.scrollspy({
        target: ".navbar-collapse",
        offset: 80,
    });

    /*---------------------
    Venobox
  --------------------- */
    var veno_box = $(".venobox");
    veno_box.venobox();

    /*----------------------------
  Page Scroll
  ------------------------------ */
    const scrollEffect = (element) => {
        var page_scroll = element;
        page_scroll.on("click", function (event) {
            var $anchor = $(this);
            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop: $($anchor.attr("href")).offset().top - 55,
                    },
                    1500,
                    "easeInOutExpo"
                );
            event.preventDefault();
        });
    };
    scrollEffect($("a.page-scroll"));
    scrollEffect($(".sus-btn"));
    scrollEffect($(".ready-btn"));
    scrollEffect($("#view_faq_btn"));

    /*--------------------------
    Back to top button
  ---------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });

    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    /*----------------------------
   Parallax
  ------------------------------ */
    // var well_lax = $(".wellcome-area");
    // well_lax.parallax("50%", 0.4);
    // var well_text = $(".wellcome-text");
    // well_text.parallax("50%", 0.6);

    /*--------------------------
   collapse
  ---------------------------- */
    var panel_test = $(".panel-heading a");
    panel_test.on("click", function () {
        panel_test.removeClass("active");
        $(this).addClass("active");
    });

    /*---------------------
   Testimonial carousel
  ---------------------*/
    var test_carousel = $(".testimonial-carousel");
    test_carousel.owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });
    /*----------------------------
   isotope active
  ------------------------------ */
    // portfolio start
    $(window).on("load", function () {
        var $container = $(".awesome-project-content");
        $container.isotope({
            filter: "*",
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: false,
            },
        });
        var pro_menu = $(".project-menu li a");
        pro_menu.on("click", function () {
            var pro_menu_active = $(".project-menu li a.active");
            pro_menu_active.removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr("data-filter");
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: false,
                },
            });
            return false;
        });
    });
    //portfolio end

    /*---------------------
   Circular Bars - Knob
--------------------- */
    if (typeof $.fn.knob != "undefined") {
        var knob_tex = $(".knob");
        knob_tex.each(function () {
            var $this = $(this),
                knobVal = $this.attr("data-rel");

            $this.knob({
                draw: function () {
                    $(this.i).val(this.cv + "%");
                },
            });

            $this.appear(
                function () {
                    $({
                        value: 0,
                    }).animate(
                        {
                            value: knobVal,
                        },
                        {
                            duration: 2000,
                            easing: "swing",
                            step: function () {
                                $this
                                    .val(Math.ceil(this.value))
                                    .trigger("change");
                            },
                        }
                    );
                },
                {
                    accX: 0,
                    accY: -150,
                }
            );
        });
    }
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li")
            .eq($("fieldset").index(next_fs))
            .addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = now * 50 + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        transform: "scale(" + scale + ")",
                        position: "absolute",
                    });
                    next_fs.css({ left: left, opacity: opacity });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeInOutBack",
            }
        );
    });

    $(".previous").click(function () {
        if (animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li")
            .eq($("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = (1 - now) * 50 + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({ left: left });
                    previous_fs.css({
                        transform: "scale(" + scale + ")",
                        opacity: opacity,
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: "easeInOutBack",
            }
        );
    });

    $(".submit").click(function () {
        return false;
    });
})(jQuery);
