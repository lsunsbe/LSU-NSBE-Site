/*jslint browser: true*/
/*global $, jQuery*/


var i = 0;

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
