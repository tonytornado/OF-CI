// Write your Javascript code.

// GOOGLE MAPS CODE //
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(38.200946, -85.601353),
        zoom: 10,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

// SLIDE IN CODE //
var $window = $(window),
    win_height_padded = $window.height() * 1.15;

$(window).on('scroll', revealOnScroll);

function revealOnScroll() {
    var scrolled = $window.scrollTop();
    $(".revealOnScroll:not(.animated)").each(function () {
        var $this = $(this),
            offsetTop = $this.offset().top;

        if (scrolled + win_height_padded > offsetTop) {
            if ($this.data('timeout')) {
                window.setTimeout(function () {
                    $this.addClass('animated' + $this.data('animation'));
                }, parseInt($this.data('timeout'), 10));
            } else {
                $this.addClass('animated ' + $this.data('animation'));
            }
        }
    });
}

// PARALLAX HEIGHT //
$(document).ready(function () {
    $('.parallax-title').css("height",window.innerHeight);
});


var o = {
    "point": {
        "X": 0,
        "Y": 0
    },
};