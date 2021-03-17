var currentLeft;
function featuresSetup() {
    var bodyWidth = $('#features-fixed .container').width();
    var cols = 4;
    var width = bodyWidth / cols;
    currentLeft = 0;
    $('#features-fixed .body .wrapper .item').css('width', width+'px');
    $('#features-fixed .body .wrapper').css('left', '0px');
    featuresScroll();
}

function featuresScroll() {
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();
    var scrollBottom = scrollTop + windowHeight;
    var sectionTop = $("#features").offset().top;
    var top = sectionTop - scrollTop;

    top = top < 0 ? 0 : top;

    $("#features-fixed").css({
        top: top + "px",
    });

    $(".targets").each(function (index, el) {
        var top = $(this).offset().top;
        var bottom = top + $(this).height();
        var itemsInView = (top <= scrollBottom && bottom >= scrollBottom);
        if (itemsInView) {
            var item = $(this).data('item');
            featuresShowitem(item);
        }
    });
}

var featuresPrevItem;
function featuresShowitem(item) {
    if (featuresPrevItem !== item) {
        featuresPrevItem = item;
        var width = $('#features-fixed .container').width();
        var cols = 4;
        // returns the page number matching the item (e.g. 1,2,3 = 1, 2,3,4 = 2)
        var page = Math.ceil(item/cols) - 1;
        var left = (width * page) * -1;
        if(currentLeft !== left) {
            $("#features-fixed .body .wrapper").css({ left: left+'px' });
            currentLeft = left;
        }
    }
}

$(document).ready(function () {
    setTimeout(function(){
        featuresSetup();
    }, 250);
});

$(window).scroll(function(){
    featuresScroll();
});

$(window).resize(function(){
    featuresScroll();
});