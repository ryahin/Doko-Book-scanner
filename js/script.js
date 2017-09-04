$(document).ready(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 70)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 71
    });
    $(window).paroller({
        factor: 0.6,            // multiplier for scrolling speed and offset
        type: 'background',     // background, foreground
        direction: 'vertical' // vertical, horizontal, TODO: diagonal
    });
    $('.modal-close').click(function(){
        $('#popup-form').modal('toggle');
    });
});