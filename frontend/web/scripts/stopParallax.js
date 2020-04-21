$(document).ready(function(){
    if (window.matchMedia('(min-width: 991px)').matches) {
        $(window).on('scroll', function() {
            var fixedElement = $('#last-fixed');
            var offset = fixedElement.offset();
            var top = offset.top;
            var bottom = $(window).height() - top - fixedElement.height();
            bottom = bottom - offset.top;
            console.log(bottom);
            if( bottom < -7220) {
                $('#last-fixed').css('position', 'absolute');
            }
            else if  ($(window).scrollTop() <= ($(document).height() - $(window).height())-400) {
                $('#last-fixed').css('position', 'fixed');
            }
        });
    };
});
