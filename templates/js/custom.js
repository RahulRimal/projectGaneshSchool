// Important Js Functions starts here

$(document).ready(function () {
  // Hide principal read more icons start here
  $("#p-message-read-more-icons").hide(100);
  $("#p-message-read-more").text(" Read More");

  // hide the topbutton on page load/ready.
  $(".scroll-to-top-box").hide();
});

// Important Js Functions ends here

// Header Alert starts here

$(document).ready(function () {
  $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
  });
});

// Header Alert ends here

// LightSlider Section Starts here
$(document).ready(function () {
  $("#lightSlider").lightSlider({
    item: 1,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 10,

    addClass: "",
    mode: "fade",
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
    pager: false,
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

// Plus two lightslider starts here

$(document).ready(function () {
  $(".programslightSlider").lightSlider({
    item: 3,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 0,

    addClass: "",
    mode: "slide",
    useCSS: true,
    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: "linear", //'for jquery animation',////

    speed: 900, //ms'
    auto: true,
    loop: true,
    slideEndAnimation: true,
    pause: 3000,
    pauseOnHover: true,
    slideEndAnimation: true,

    keyPress: false,
    controls: true,
    prevHtml:
      '<i class="fas fa-chevron-circle-left" style="font-size: 40px; color: var(--primary-color)!important;"></i>',
    nextHtml:
      '<i class="fas fa-chevron-circle-right" style="font-size: 40px; color: var(--primary-color)!important;"></i>',

    rtl: false,
    adaptiveHeight: false,

    vertical: false,
    verticalHeight: 500,
    vThumbWidth: 100,

    thumbItem: 10,
    pager: false,
    gallery: false,
    galleryMargin: 5,
    thumbMargin: 5,
    currentPagerPosition: "middle",

    enableTouch: true,
    enableDrag: true,
    freeMove: true,
    swipeThreshold: 40,

    responsive: [
      {
        breakpoint: 768,
        settings: {
          item: 1,
        },
      },
      {
        breakpoint: 420,
        settings: {
          item: 1,
        },
      },
    ],

    onBeforeStart: function (el) {},
    onSliderLoad: function (el) {},
    onBeforeSlide: function (el) {},
    onAfterSlide: function (el) {},
    onBeforeNextSlide: function (el) {},
    onBeforePrevSlide: function (el) {},
  });
});

// Plus two lightslider ends here

// Toggling read more icons starts here

$(document).ready(function () {
  $("#p-message-read-more").click(function () {
    $("#p-message-read-more-icons")
      .slideToggle(100)
      .delay(101)
      .toggleClass("d-flex");

    $(this).text() == " Read More"
      ? $(this).text(" Show Less")
      : $(this).text(" Read More");
  });
});

// Toggling read more icons ends here

// Toppers slider starts here

$(document).ready(function () {
  $(".topper-slider").lightSlider({
    item: 5,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 0,

    addClass: "",
    mode: "slide",
    useCSS: true,
    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: "linear", //'for jquery animation',////

    speed: 900, //ms'
    auto: true,
    loop: true,
    slideEndAnimation: true,
    pause: 2000,
    pauseOnHover: false,
    slideEndAnimation: true,

    keyPress: false,
    controls: true,
    // prevHtml: '<i class="fas fa-chevron-circle-left" style="font-size: 40px; color: var(--primary-color)!important;"></i>',
    // nextHtml: '<i class="fas fa-chevron-circle-right" style="font-size: 40px; color: var(--primary-color)!important;"></i>',

    rtl: false,
    adaptiveHeight: false,

    vertical: false,
    verticalHeight: 500,
    vThumbWidth: 100,

    thumbItem: 10,
    pager: false,
    gallery: false,
    galleryMargin: 5,
    thumbMargin: 5,
    currentPagerPosition: "middle",

    enableTouch: true,
    enableDrag: true,
    freeMove: true,
    swipeThreshold: 40,

    responsive: [
      {
        breakpoint: 768,
        settings: {
          item: 1,
        },
      },
      {
        breakpoint: 420,
        settings: {
          item: 1,
        },
      },
    ],

    onBeforeStart: function (el) {},
    onSliderLoad: function (el) {},
    onBeforeSlide: function (el) {},
    onAfterSlide: function (el) {},
    onBeforeNextSlide: function (el) {},
    onBeforePrevSlide: function (el) {},
  });
});

// Toppers slider starts here

//testmonials starts heres//

// Testinomial slider starts here

$(document).ready(function () {
  $("#testinomialSlider").lightSlider({
    item: 3,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 0,

    addClass: "",
    mode: "slide",
    useCSS: true,
    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: "linear", //'for jquery animation',////

    speed: 900, //ms'
    auto: true,
    loop: true,
    slideEndAnimation: true,
    pause: 2000,
    pauseOnHover: true,
    slideEndAnimation: true,

    keyPress: false,
    controls: true,
    // prevHtml: '<i class="fas fa-chevron-circle-left" style="font-size: 40px; color: var(--primary-color)!important;"></i>',
    // nextHtml: '<i class="fas fa-chevron-circle-right" style="font-size: 40px; color: var(--primary-color)!important;"></i>',

    rtl: false,
    adaptiveHeight: false,

    vertical: false,
    verticalHeight: 500,
    vThumbWidth: 100,

    thumbItem: 10,
    pager: false,
    gallery: false,
    galleryMargin: 5,
    thumbMargin: 5,
    currentPagerPosition: "middle",

    enableTouch: true,
    enableDrag: true,
    freeMove: true,
    swipeThreshold: 40,

    responsive: [
      {
        breakpoint: 768,
        settings: {
          item: 1,
        },
      },
      {
        breakpoint: 420,
        settings: {
          item: 1,
        },
      },
    ],

    onBeforeStart: function (el) {},
    onSliderLoad: function (el) {},
    onBeforeSlide: function (el) {},
    onAfterSlide: function (el) {},
    onBeforeNextSlide: function (el) {},
    onBeforePrevSlide: function (el) {},
  });
});

// Testinomial slider ends here

//testmonials  ends heres//

// Scroll to top starts here

// Scroll to top

$(document).ready(function () {
  $(".scroll-to-top-box").click(function () {
    $(window).scrollTop(5);
  });
});

// hide / show scroll to top button

//Check to see if the window is top if not then display button
$(window).scroll(function () {
  if ($(this).scrollTop() > 2500) {
    // $(".scroll-to-top-box").show().fadeIn();
    $(".scroll-to-top-box").show();
  } else {
    // $(".scroll-to-top-box").fadeOut().hide();
    $(".scroll-to-top-box").hide();
  }
});

// Scroll to top ends here

// Management Page starts here

// Management page slider starts here


$(document).ready(function () {
  $("#managementCourseSlider").lightSlider({
    item: 1,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 0,

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
    pager: false,
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



// Management page slider ends here

// Management Page ends here


// Management Staffs Slider starts here

$(document).ready(function () {
  $("#adimnAndManagementStaffsSlider").lightSlider({
    item: 4,
    autoWidth: false,
    slideMove: 1, // slidemove will be 1 if loop is true
    slideMargin: 0,

    addClass: "",
    mode: "slide",
    useCSS: true,
    cssEasing: "ease", //'cubic-bezier(0.25, 0, 0.25, 1)',//
    easing: "linear", //'for jquery animation',////

    speed: 900, //ms'
    auto: true,
    loop: true,
    slideEndAnimation: true,
    pause: 1500,
    pauseOnHover: true,
    slideEndAnimation: true,

    keyPress: false,
    controls: true,
    prevHtml:
      '<i class="fas fa-chevron-circle-left" style="font-size: 40px; color: var(--primary-color)!important;"></i>',
    nextHtml:
      '<i class="fas fa-chevron-circle-right" style="font-size: 40px; color: var(--primary-color)!important;"></i>',

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

    responsive: [
      {
        breakpoint: 768,
        settings: {
          item: 2,
        },
      },
      {
        breakpoint: 420,
        settings: {
          item: 2,
        },
      },
    ],

    onBeforeStart: function (el) {},
    onSliderLoad: function (el) {},
    onBeforeSlide: function (el) {},
    onAfterSlide: function (el) {},
    onBeforeNextSlide: function (el) {},
    onBeforePrevSlide: function (el) {},
  });
});

// Management Staffs Slider ends here
