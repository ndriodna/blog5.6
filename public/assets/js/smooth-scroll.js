$(document).ready(function() {
    $(document).on('click', 'a[href^="#"]', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 900);
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 400) {
            $('#navbar').slideDown(200);
            $('.nav-bar').hide();
            $('.to-top').fadeIn();
        } else {
            $('#navbar').hide();
            $('.nav-bar').show();
            $('.to-top').fadeOut();
        }
    });
});