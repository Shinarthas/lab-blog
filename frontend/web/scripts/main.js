function firstscreenanimate() {
    var thunderrise, flash;

    thunderrise = Math.floor($(window).scrollTop() * (200 / 750));
    flash = Math.floor($(window).scrollTop() * (200 / 750));

    $('.first-screen__thunderrise').css({
        'transform': 'translateX(' + thunderrise + 'px)',
    });

    $('.first-screen__flash').css({
        'transform': 'translateY(' + '-' + flash + '%)',
    });
}
(function() {
    firstscreenanimate();
    $(window).scroll(function() {
        firstscreenanimate();
    });
})();