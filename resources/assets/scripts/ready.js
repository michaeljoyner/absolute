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
