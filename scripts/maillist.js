/*jslint browser: true*/
/*global $, jQuery*/

function passwordResponse(data){
    if (data === "failed"){
        window.alert("Password Incorrect");
    } else {
        $('#mainContent').show();
        $('#passwordCont').hide();
        retrieveEmails();
        
    } 
}

function retrieveEmails(){
    var emailString = "";
        $.ajax({
            type: "get",
            url: "mailRetrieve.php",
            success: function (e){
                $('#list').text(e);
            }
        })
}

$(document).ready(function(){  
        $('#passSubmit').click( 
            function (e) {
                $.ajax({
                    type: "post",
                    url: "mailpass.php",
                    data: {password: $('#pass').val()},
                    success: passwordResponse
                })
                e.preventDefault();
            }
        )
        $('#addButton').click( 
            function (e) {
                var inputString = $('#emailVals').val();
                var emails = inputString.split(",");
                for (var i = 0; i < emails.length; i++){
                    emails[i] = emails[i].trim();
                }
                var ajaxString = JSON.stringify(emails);
                    $.ajax({
                        type: "post",
                        url: "mailEdit.php",
                        data: {func: "add", input: ajaxString},
                        success: function (data) {
                            window.alert(data);
                            retrieveEmails();       
                        }})
                    e.preventDefault();
                }
        )
                    
        $('#removeButton').click( 
            function (e) {
                var inputString = $('#emailVals').val();
                var emails = inputString.split(",");
                for (var i = 0; i < emails.length; i++){
                    emails[i] = emails[i].trim();
                }
                var ajaxString = JSON.stringify(emails);
                    $.ajax({
                        type: "post",
                        url: "mailEdit.php",
                        data: {func: "remove", input: ajaxString},
                        success: function (data) {
                            window.alert(data);
                            retrieveEmails();       
                        }})
                    e.preventDefault();
                }
        )
    }
)
