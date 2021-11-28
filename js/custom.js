// LightSlider Section Starts here
$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item: 3,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,
 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 900, //ms'
        auto: true,
        loop: true,
        slideEndAnimation: true,
        pause: 4000,
 
        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
 
        responsive : [],
 
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
});


// LightSlider Section Ends here


// Toggling read more icons starts here

function toggleReadMoreIcons(readMoreBtn)
{
    var readMoreSection = document.querySelector(".read-more-icons");

    readMoreSection.classList.toggle('d-none');
    readMoreSection.classList.toggle('d-block');

    if(readMoreSection.classList.contains('d-none'))
    {
        readMoreSection.classList.remove('d-flex');
        readMoreSection.classList.remove('justify-content-start');
        setReadMoreText(false, readMoreBtn);
    }
    else
    {
        readMoreSection.classList.add('d-flex');
        readMoreSection.classList.add('justify-content-start');
        setReadMoreText(true, readMoreBtn);
    }


}

function setReadMoreText(readMoreActive, textArea)
{
    if(readMoreActive)
        textArea.innerHTML = " Show Less";
    else
    textArea.innerHTML = " Read More";
}



// Toggling read more icons ends here

//testmonials starts heres//


//testmonials  ends heres//