$(document).ready(function () {
var owl = $('.owl-carousel').owlCarousel({
    items: 3, // Set the number of visible items in the carousel
    loop: true,
    center: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1000, // Adjust as needed
    responsive: {
    0: {
        items: 1, // Number of items to show on small screens
    },
    768: {
        items: 3, // Number of items to show on larger screens
    },
    },
});

// Play the first video by default
var firstVideo = $('.carousel-video').eq(0);
firstVideo[0].play();

// When a video comes into center view, play it
owl.on('translated.owl.carousel', function (event) {
    var currentItem = event.item.index;
    var videos = $('.carousel-video');

    // Pause all videos
    videos.each(function () {
    this.pause();
    });

    // Play the video in the center
    var centerVideo = videos.eq(currentItem);
    centerVideo[0].play();
});
});