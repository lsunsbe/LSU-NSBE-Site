/*jslint browser: true*/
/*global $, jQuery*/


 

$(document).ready(function(){    
    $('#gobutton').click(function( e ){
        $( "#gobutton" ).fadeOut(200);
        var emailaddress = $('#emailbox').val;
        $('#emailbox').val = "";
        $.ajax({
            type: "post",
            url: "emailsubmit.php",
            data: {e: $('#emailbox').val()},
            success: function(data){
                window.alert(data);
                $( "#gobutton" ).fadeIn(200);
                $('#emailbox').val = emailaddress;
            }
        })
        e.preventDefault(); 
       
    });
    $('h4').click(function (e)
    {
        $(this).toggle(function(){$(this).fadeOut('slow');});
    });
});
