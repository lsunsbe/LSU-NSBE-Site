function myFunction() {
    "use strict";
    document.write("<p>Hello</p>"); 
    
}

function setUnhidden(position) {
    "use strict"; 
    var positions = ["president", "vpresident", "telecom", "hist"];
    var i = 0;
    for (; i < positions.length; i++){ 
        var currentPosition = document.getElementById(positions[i]);
        console.log(currentPosition);
        if (positions[i] == position){
            currentPosition.className = "visible";
        } else{
            currentPosition.className = "hidden";
        }
    }
}
