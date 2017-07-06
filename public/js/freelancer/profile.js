
$(window).scroll(function(){
  var sticky = $('body'),
      scroll = $(window).scrollTop();
  if (scroll >= 100) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
});

$(".compl-status > a").click(function () {
  $(".compl-status > a").removeClass('active');
  $(this).addClass('active');
});
$("#in-complate-btn").click(function () {
  $("#hist-in-progress").hide();
  $("#hist-complate").show();
});
$("#in-porgress-btn").click(function () {
  $("#hist-complate").hide();
  $("#hist-in-progress").show();
});



$(document).ready(function() {
    var $lightbox = $('#lightbox');
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });




});







// script for text colleps //
var text = $('.text-overflow'),
     btn = $('.read-more'),
       h = text[0].scrollHeight; 

if(h > 120) {
	btn.addClass('less');
	btn.css('display', 'inline');
}

btn.click(function(e) 
{
  e.stopPropagation();

  if (btn.hasClass('less')) {
      btn.removeClass('less');
      btn.addClass('more');
      btn.text('Show less');

      text.animate({'height': h});
  } else {
      btn.addClass('less');
      btn.removeClass('more');
      btn.text('Show more');
      text.animate({'height': '120px'});
  }  
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
$(document).ready(function() {
   $( '.user-noti' ).hover(
	 function(){
       $('.notifiaction-drop').slideDown(50);
     },
     function(){
       $('.notifiaction-drop').slideUp(50);
     }
   );


   $( '.user-drop' ).hover(
	 function(){
       $('.user-dropdown').slideDown(50);
     },
     function(){
       $('.user-dropdown').slideUp(50);
     }
   );

});
  $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        
    });

    $('document').ready(function(){
        //INITIALIZE THE PLUGIN
        $('#grid').grid({
	          columnWidth: 235, //The width of each columns, if you set it to 'auto' it will use the columns instead
	          captionType: 'grid-fade', // 'grid', 'grid-fade', 'classic' the type of caption effect
      	});

    });    
       