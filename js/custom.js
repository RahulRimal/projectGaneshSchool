// Important Js Functions starts here

$(document).ready(function () {
  // Hide principal read more icons start here
  $("#p-message-read-more-icons").hide(100);
  $("#p-message-read-more").text(" Read More");

  // Hide principal read more icons start here
});

// Important Js Functions ends here

// LightSlider Section Starts here
$(document).ready(function () {
  $("#lightSlider").lightSlider({
    item: 3,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 10,

    addClass: "",
    mode: "slide",
    useCSS: true,
    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: "linear", //'for jquery animation',////

    speed: 900, //ms'
    auto: true,
    loop: true,
    slideEndAnimation: true,
    pause: 4000,

    keyPress: false,
    controls: true,
    prevHtml: "",
    nextHtml: "",

    rtl: false,
    adaptiveHeight: false,

    vertical: false,
    verticalHeight: 500,
    vThumbWidth: 100,

    thumbItem: 10,
    pager: true,
    gallery: false,
    galleryMargin: 5,
    thumbMargin: 5,
    currentPagerPosition: "middle",

    enableTouch: true,
    enableDrag: true,
    freeMove: true,
    swipeThreshold: 40,

    responsive: [],

    onBeforeStart: function (el) {},
    onSliderLoad: function (el) {},
    onBeforeSlide: function (el) {},
    onAfterSlide: function (el) {},
    onBeforeNextSlide: function (el) {},
    onBeforePrevSlide: function (el) {},
  });
});

// LightSlider Section Ends here

// Toggling read more icons starts here

$(document).ready(function () {
  $("#p-message-read-more").click(function () {
    $("#p-message-read-more-icons").slideToggle(100).delay(101).toggleClass("d-flex");
    
    // $("#p-message-read-more-icons").children().toggleClass("d-flex");
    // $("#p-message-read-more-icons").children().toggleClass("justify-content-center");

    $(this).text() == " Read More" ? $(this).text(" Show Less") : $(this).text(" Read More");
  });
});

// Toggling read more icons ends here

//testmonials starts heres//

//testmonials  ends heres//
