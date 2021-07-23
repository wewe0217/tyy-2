require('./bootstrap');
require('jquery-zoom');
require('lightbox2');

togglefade = function (id) {
    $(id).fadeToggle();
};

myscroll=function(id){
    id='#'+id;
    var offset = $(id).offset();
    var top = offset.top-60;
    $('html, body').animate({scrollTop:top}, 800);
};

  $(window).on('load',function () {
      var $func=[
        function () { $("#loading_cover").animate({left:'100%'},800,myfunc);},
        function () { $("#loading_success").delay(800).animate({height:"200vmax",width:"200vmax",},800,myfunc);},
        function () { $("#loading").fadeOut();}
    ];
    var myfunc=function () {
        $(document).dequeue("loading");
      }
    $(document).queue("loading",$func);
    myfunc()
    })
