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

      $('.lazy').lazy({
        effect: "fadeIn",
        effectTime: 800,
        threshold: 200
      });
});
