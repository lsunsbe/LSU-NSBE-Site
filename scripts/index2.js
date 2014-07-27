/*jslint browser: true*/
/*global $, jQuery*/


 

$(document).ready(function(){    
    $('#gobutton').click(function( e ){
        
        $.ajax({
            type: "post",
            url: "emailsubmit.php",
            data: {e: $('#emailbox').val()},
            success: function(data){
                window.alert(data);
            }
        })   
        e.preventDefault(); 
    });
});