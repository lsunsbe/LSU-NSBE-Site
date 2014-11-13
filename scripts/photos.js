/*jslint browser: true*/
/*global $, jQuery*/


$(document).ready(function(){
    $.ajax({
        type: "get",
        url: "http://localhost/photopagewriter.php",
        success: function(data){
            $('#gallerycontainer').append(data);
            
        }
    })

    $('.album').click( function(){
        
    }
    );
});