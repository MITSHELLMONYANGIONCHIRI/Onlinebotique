$(document).ready(function() {
    // Initialize the carousel with Slick Carousel
    $('#carausel-6-columns-2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false
    });

    // Stop the carousel movement when the mouse is over the carousel
    $('#carausel-6-columns-2').hover(function() {
        $('#carausel-6-columns-2').slick('slickPause');
    }, function() {
        // Restart the carousel movement when the mouse leaves the carousel
        $('#carausel-6-columns-2').slick('slickPlay');
    });
});