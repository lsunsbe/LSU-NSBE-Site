/*jslint browser: true*/
/*global $, jQuery*/




$(document).ready(function(){    
    $('#submitbutton').click(function( e ){
        console.log("Test");
        $.ajax({
            type: "post",
            url: "email/contactsubmit.php",
            data: {name: $('#name').val(), email: $('#email').val(), 
                  subject: $('#subject').val(), message: $('#message').val()},
            success: function(data){
                window.alert(data);
            }
        })   
        e.preventDefault(); 
    });
});