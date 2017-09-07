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
        factor: 0.6, // multiplier for scrolling speed and offset
        type: 'background', // background, foreground
        direction: 'vertical' // vertical, horizontal, TODO: diagonal
    });
    $('.modal-close').click(function() {
        $('#popup-form').modal('toggle');
    });
    $('.buy-modal-close').click(function() {
        $('#buy-form').modal('toggle');
    });
    var bookSpreadOffsetTop = $('#book-spread').offset().top;
    var bookSpreadHeight = $('#book-spread').height();
    var viewPortHeight = $(window).height();
    var topScroll = bookSpreadOffsetTop - viewPortHeight / 2;
    var bottomScroll = bookSpreadOffsetTop + viewPortHeight / 2;
    $(document).scroll(function(event) {
        if ($(document).scrollTop() > topScroll && $(document).scrollTop() < bottomScroll) {
            $('#book-spread').addClass('show-animation');
        } else {
            $('#book-spread').removeClass('show-animation');
        }
    });
    $('.buy-button').click(function(e) {
        e.preventDefault();
        var selectedModel = $(this).attr('data-model');
        $('#model').val(selectedModel);
    });
    $('.politics').click(function(e) {
        e.preventDefault();
        $('.politics-info').fadeToggle();
    });
    // $('#button-send-by').click(function(e){
    //     e.preventDefault();
    // });
    $("#buy-selected-model").validate({
        rules: {
            user_email: {
                required: true,
                email: true
            },
            model: {
                required: true
            }
        },
        // выводимые сообщения при нарушении соответствующих правил
        messages: {
            "user_email": {
                required: "Необходимо указать почтовый ящик",
                email: "Пожалуйста, укажите корректный почтовый ящик"
            },
            "model": {
                required: "Необходимо выбрать модель сканера"
            }
        },

        // указаваем обработчик
        submitHandler: function(form) {
            $.post(
                'submit.php',
                $(form).serialize(),
                function(data) {
                    if (data.message) {
                        $('#form-message').html(data.message);
                    }
                    if (data.success) {
                        $('#form-message').removeClass('alert-danger');
                        $('#form-message').addClass('alert-success');
                        $(form).find('input').prop('disabled', true);
                        $(form).find('textarea').prop('disabled', true);
                    } else {
                        $('#form-message').removeClass('alert-success');
                        $('#form-message').addClass('alert-danger');
                    }
                }
            );
        }
    });
});