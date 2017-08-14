
$(function() {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [13, 10000],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
});


$(window).scroll(function() {
    var sticky = $('body'),
            scroll = $(window).scrollTop();
    if (scroll >= 100)
        sticky.addClass('header-fixed');
    else
        sticky.removeClass('header-fixed');
});


$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function() {
    $('.user-noti').hover(
            function() {
                $('.notifiaction-drop').slideDown(50);
            },
            function() {
                $('.notifiaction-drop').slideUp(50);
            }
    );


    $('.user-drop').hover(
            function() {
                $('.user-dropdown').slideDown(50);
            },
            function() {
                $('.user-dropdown').slideUp(50);
            }
    );

});

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();


});
$(document).ready(function() {

    hideMsgBox();

    function hideMsgBox() {
        setTimeout(function() {
            $("#errorSection").slideUp(3000);
        }, 5000);
    }


    $('.user-noti').hover(
            function() {
                $('.notifiaction-drop').slideDown(50);
            },
            function() {
                $('.notifiaction-drop').slideUp(50);
            }
    );


    $('.user-drop').hover(
            function() {
                $('.user-dropdown').slideDown(50);
            },
            function() {
                $('.user-dropdown').slideUp(50);
            }
    );

});
function openmodel(element, modalId) {
    // Get the modal
    var modal = document.getElementById(modalId);

    // Get the button that opens the modal
    var btn = document.getElementById(element);

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}