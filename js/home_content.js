$('#myCarousel').carousel({
    interval: false
});

var i;

$('.carousel-control').on("mouseover", function () {
    var control = $(this),
        interval = 300;

    i = setInterval(function () {
        control.trigger("click");
    }, interval);
})
.on("mouseout", function () {
    clearInterval(i);
});