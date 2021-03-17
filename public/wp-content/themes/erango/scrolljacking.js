var currentLeft;
var featuresPrevItem;

function featuresSetup() {
    var bodyWidth = $('#features-fixed .container').width();
    var cols = 3;
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
    var clientsTop = $('#clients').offset().top;

    top = top < 0 ? 0 : top;

    $("#features-fixed").css({
        top: top + "px",
    });

    $(".targets").each(function (index, el) {
        var top = $(this).offset().top;
        var bottom = top + $(this).height();
        var itemInView = (top <= scrollBottom && bottom >= scrollBottom);
        var item = $(this).data('item');
        if (itemInView) {
            featuresShowitem(item);
        } else {
            var lastItem = $(".targets:last-child").data('item');
            if(item == lastItem && featuresPrevItem === lastItem) {
                $("#features-fixed").css({
                    top: (clientsTop - scrollTop) - windowHeight + "px",
                });
            }
        }
    });
}

function featuresShowitem(item) {
    if (featuresPrevItem === item) return;

    featuresPrevItem = item;
    var width = $('#features-fixed .container').width();
    var cols = 3;
    // returns the page number matching the item (e.g. 1,2,3 = 1, 2,3,4 = 2)
    var page = Math.ceil(item/cols) - 1;
    var left = (width * page) * -1;
    if(currentLeft !== left) {
        $("#features-fixed .body .wrapper").css({ left: left+'px' });
        currentLeft = left;
    }
}

$(document).ready(function () {
    featuresSetup();
});

$(window).scroll(function(){
    featuresScroll();
});

$(window).resize(function(){
    featuresScroll();
});