/*jslint browser: true*/
/*global $, jQuery*/

function slideSwitch() {
    var $current = $('#frontimage img.active');
    console.log($current);
    var $next = $current.next();
    console.log($next);
    $current.removeClass('active');
    $next.addClass('active');
}

    $(function() {
        setInterval( "slideSwitch()", 5000 );
    });
