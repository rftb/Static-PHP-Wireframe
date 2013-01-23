jQuery(document).ready(function($) {
  $('#mycarousel').jcarousel();

  $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : true,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 177,
            height : 110
          }
        }
      });


    //rss
    $('#zticker').rssfeed('http://www.cityofkennedale.com/support/newsflash.xml',{
        header: false,
        titletag: false,
        date: true,
        content: true
      }, function(e) {
        $.zazar.ticker({selector: '#zticker ul'});
      });


      $('#slides').slides({
        preload: true,
        preloadImage: 'images/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: false
      });

});