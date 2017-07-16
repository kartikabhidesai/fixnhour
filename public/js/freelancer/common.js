
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 13, 10000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );


$(window).scroll(function(){
  var sticky = $('body'),
      scroll = $(window).scrollTop();
  if (scroll >= 100) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
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
