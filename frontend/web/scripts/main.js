function firstscreenanimate() {
    var lab3m, flash;

    lab3m = Math.floor($(window).scrollTop() * (200 / 750));
    flash = Math.floor($(window).scrollTop() * (200 / 750));

    $('.first-screen__lab3m').css({
        'transform': 'translateX(' + lab3m + 'px)',
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