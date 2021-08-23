require('./bootstrap');
require('jquery-zoom');
require('lightbox2');
require('owl.carousel');
require('jquery-lazy');

togglefade = function (id) {
    $(id).fadeToggle();
};

myscroll = function (id) {
    id = '#' + id;
    var offset = $(id).offset();
    var top = offset.top - 60;
    $('html, body').animate({ scrollTop: top }, 800);
};

$(window).on('load', function () {
    var $func = [
        function () { $("#loading_cover").animate({ left: '100%' }, 500, myfunc); },
        function () { $("#loading_success").delay(100).animate({ height: "200vmax", width: "200vmax", }, 600, myfunc); },
        function () { $("#loading").fadeOut(); }
    ];
    var myfunc = function () {
        $(document).dequeue("loading");
    }
    $(document).queue("loading", $func);
    myfunc()
})

$(document).ready(function () {
    $('.view').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        center: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });


    $(".mylist").on('click',function () {
        var src=$(this).attr('href');
        if (src=='/img/coffee/price.jpg'||src=='/img/rooms/price.jpg') {
            $(".lb-container").zoom({url:src});
        }else{
            $(".lb-container").unbind();
        };
      });


      /*! jQuery & Zepto Lazy - iFrame Plugin v1.5 - http://jquery.eisbehr.de/lazy - MIT&GPL-2.0 license - Copyright 2012-2018 Daniel 'Eisbehr' Kern */
!function(t){t.lazy(["frame","iframe"],"iframe",function(r,a){var e=this;if("iframe"===r[0].tagName.toLowerCase()){var o=r.attr("data-error-detect");"true"!==o&&"1"!==o?(r.attr("src",r.attr("data-src")),e.config("removeAttribute")&&r.removeAttr("data-src data-error-detect")):t.ajax({url:r.attr("data-src"),dataType:"html",crossDomain:!0,xhrFields:{withCredentials:!0},success:function(t){r.html(t).attr("src",r.attr("data-src")),e.config("removeAttribute")&&r.removeAttr("data-src data-error-detect")},error:function(){a(!1)}})}else a(!1)})}(window.jQuery||window.Zepto);

      $('.lazy').lazy({
        effect: "fadeIn",
        effectTime: 800,
        threshold: 200
      });
});
