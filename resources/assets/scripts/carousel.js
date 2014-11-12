var sportCarousel = {
    oldie: true,

    init: function() {
        if(! $('html').hasClass('lt-ie10')) {
            sportCarousel.oldie = false;
        }
    },
    showCarousel: function() {
        $('#site_wrapper').scrollTop(0);
        $('body').addClass('carousel-open');
        if(sportCarousel.oldie) {
            $('.carousel-wrapper').velocity({left: "0"});
        } else {
            $('.carousel-wrapper').velocity({translateX: "0"});
        }
    },

    hideCarousel: function() {
        $('body').removeClass('carousel-open');
        if(sportCarousel.oldie) {
            $('.carousel-wrapper').velocity({left: "-2000px"});
        } else {
            $('.carousel-wrapper').velocity({translateX: "-2000px"});
        }
    },

    selectSlide: function(id) {
        $('.sport-slide.selected').removeClass('selected');
        $('.sport-slide.next').removeClass('next');
        $('.sport-slide.prev').removeClass('prev');
        var newselect = $('#sport-slide'+id);
        newselect.addClass('selected');
        newselect.next().addClass('next');
        newselect.prev().addClass('prev');

        sportCarousel.checkNavArrows();
    },

    showNext: function() {
        if($('.selected').attr('id') == 'sport-slide16') {
            return;
        }
        $selected = $('.sport-slide.selected');
        $next = $('.sport-slide.next');
        $prev = $('.sport-slide.prev');

        $selected.removeClass('selected').addClass('prev');
        $prev.removeClass('prev');
        $next.removeClass('next').addClass('selected');
        $next.next().addClass('next');

        sportCarousel.checkNavArrows();
    },

    showPrevious: function() {
        if($('.selected').attr('id') == 'sport-slide1') {
            return;
        }
        $selected = $('.sport-slide.selected');
        $next = $('.sport-slide.next');
        $prev = $('.sport-slide.prev');

        $selected.removeClass('selected').addClass('next');
        $prev.removeClass('prev').addClass('selected');
        $next.removeClass('next');
        $prev.prev().addClass('prev');

        sportCarousel.checkNavArrows();
    },

    checkNavArrows: function() {
        if($('.sport-slide.selected').attr('id') == 'sport-slide1') {
            $('.prev-arrow').css('display', 'none');
        } else {
            $('.prev-arrow').css('display', 'block');
        }

        if($('.sport-slide.selected').attr('id') == 'sport-slide16') {
            $('.next-arrow').css('display', 'none');
        } else {
            $('.next-arrow').css('display', 'block');
        }
    }
};