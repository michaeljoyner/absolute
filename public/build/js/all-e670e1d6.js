$(function() {
    sportCarousel.init();
    $('.menu-toggle').click(function() {
        $('#site_wrapper').toggleClass('show-nav');
    });
    $('body').bind('touchmove', function(ev) {
        if($('#site_wrapper').hasClass('show-nav')) {
            ev.preventDefault();
        }
    });
    $('.sport-carousel').click(function(ev) {
        var posX = $(this).position().left;
        var clickPos = ev.pageX - posX;
        if(clickPos >= ($(this).width() / 2)) {
            sportCarousel.showNext();
        } else {
            sportCarousel.showPrevious();
        }
    });
    $('.icon-holder').click(function() {
        var id = parseInt(this.id.substring(10));
        sportCarousel.selectSlide(id);
        sportCarousel.showCarousel();
    });
    $('body').keyup(function(ev) {
        if(ev.keyCode === 27) {
            sportCarousel.hideCarousel();
        }
    });
    $('.next-arrow').click(function() {
        sportCarousel.showNext();
    });
    $('.prev-arrow').click(function() {
        sportCarousel.showPrevious();
    });
    $('#exit-button').click(function() {
        sportCarousel.hideCarousel();
    });
    $('.current-page #home-nav-icon').click(function() {
        if($('body').hasClass('carousel-open')) {
            sportCarousel.hideCarousel();
        }
    });
});

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