/*jslint browser: true*/
/*global $, jQuery*/




$(document).ready(function(){    
    $('#submitbutton').click(function( e ){
        $.ajax({
            type: "post",
            url: "contactsubmit.php",
            data: {name: $('#name').val(), email: $('#email').val(), 
                  subject: $('#subject').val(), message: $('#message').val()},
            success: function(data){
                window.alert(data);
            }
        })   
        e.preventDefault(); 
    });
});