$( document ).ready(function() {
    $('.dropdown').on('mouseenter mouseleave click tap', function() {
        if ($(window).width() > 1024) {
            $(this).find('.dropdown-menu').slideToggle(200);
        }
    });
});