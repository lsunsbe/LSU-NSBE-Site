/*jslint browser: true*/
/*global $, jQuery*/

$('.purposebutton').click(function(e){
    $(this).parent().find('.active').removeClass('active');
    $(this).addClass('active');
    $('#description').find('.active').removeClass('active');
    console.log($(this).attr('id'));
    var id = "#" + $(this).attr('id');
    $('#description').find(id).addClass('active');
});

