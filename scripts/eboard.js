/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function (){
    $('.biography_entry').hide();
    $('#bio_seat0').show();
    $('.name').click(function ( e ) {

        var clicked_id = $(this).attr('id');
        clicked_id = "#bio_" + clicked_id;
        console.log(clicked_id);
        $('.biography_entry').hide();
        $(clicked_id).show();
    });
});

