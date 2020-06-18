$(document).ready(function () {
    var NavY = $('nav').offset().top;

    var stickyNav = function () {
        var ScrollY = $(window).scrollTop();

        if (ScrollY > NavY) {
            $('nav').addClass('sticky');
            $('nav img').addClass('stickyImg');
            $('nav ul li').addClass('stickyTxt');
            $('ul').addClass('stickyUl');
            $('label #cancel').addClass('stickyCancel');
            $('label #btn').addClass('stickyCancel');

        } else {
            $('nav').removeClass('sticky');
            $('nav img').removeClass('stickyImg');
            $('nav ul li').removeClass('stickyTxt');
            $('ul').removeClass('stickyUl');
            $('label #cancel').removeClass('stickyCancel');
            $('label #btn').removeClass('stickyCancel');
        }
    };

    stickyNav();

    $(window).scroll(function () {
        stickyNav();
    });
});