$(document).ready(function() {          


//img tag to svg 
jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});





//////////////////////autoheight
function heightGiver(){
  $('.heightReceiver').css('height',$('.heightGiver').height());
}


////////////////////height full window



// ///////////////////////////////////////////////////header menu
var menuHeaderOpen=false;
function openHeaderMenu(){
  menuHeaderOpen = !menuHeaderOpen;
  if(menuHeaderOpen == true){
    $(".menuHeaderRow").addClass("menuExpanded");
  }
  else{
    $(".menuHeaderRow").removeClass("menuExpanded");
  }
  return 0;
}


/////////////hide info in scroll


var scroll = $(window).scrollTop();
if (scroll >= 30) {
    $("#header").addClass("headerHide");
    $("#header .container").addClass("headerAdjust");
} 
else {
    $("#header").removeClass("headerHide");
    $("#header .container").removeClass("headerAdjust");
}
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    

    if (scroll >= 30) {
        $("#header").addClass("headerHide");
        $("#header .container").addClass("headerAdjust");
    } 
    else {
        $("#header").removeClass("headerHide");
        $("#header .container").removeClass("headerAdjust");
    }


    var limit = $('#indexMain').outerHeight()/1.5;
    if(scroll <= limit){
       var parallax = scroll/1.6;
       parallax += 'px';
       $(".sliderSlick").css('top',parallax);
    }
    
});



///////////////header
var burger = false;
$("#burger").click(function(){
    if (burger == false) {
        $("#smallMenu").addClass("smallMenuExpanded");
        burger = true;
    } 
    else {
        $("#smallMenu").removeClass("smallMenuExpanded");
        burger = false;
    }
});




});//fin jguery initial




//slick
$(document).ready(function(){
  $('.sliderSlick').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 7000,
    // fade: true,
    pauseOnHover: false
  });
});



/////////////////////////////////////load more button post



