/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function(){
	$('.frontimage').slick({
        dots: true,
        infinite: true,
        speed: 360,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5500
        
	});
});


var i = 0;
/*
function slideSwitch() {
    var $currentPhoto = $('#frontimage img.active');
    $currentPhoto.fadeOut("fast");
    $currentPhoto.removeClass('active');
    
    i = i + 1;
    if (i == $('#frontimage img').length){
        i = 0;
        
    }
    
    $($('#frontimage img').get(i)).addClass("active");
    $($('#frontimage img').get(i)).fadeIn("fast");
}

    $(function() {
        setInterval( "slideSwitch()", 5000 );
    });
*/