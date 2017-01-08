require('./parallax.min');

window.setHeaderBackground = function (position) {
    const $header = $('.home header');

    if (position > 75) {
        $header.addClass('with-bg');
    } else {
        $header.removeClass('with-bg');
    }
}

$(document).ready(() => {
    const $parallax = $('.parallax-window');
    const $window = $(window);
    const $root = $('html, body');
    const $headerHeight = $('header').height();

    window.setHeaderBackground($window.scrollTop());

    $parallax.parallax({
        imageSrc: $parallax.data('image-src')
    });

    $window.scroll(() => {
        window.setHeaderBackground($window.scrollTop());
    });

    $('a[href*=\\#]').on('click', function(event) {
        event.preventDefault();
        $root.animate({
            scrollTop: $(this.hash).offset().top - $headerHeight
        }, 500);
    });
});
