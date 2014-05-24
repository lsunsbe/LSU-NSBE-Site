function hover(id) {
    "use strict";
    var element = document.getElementById(id);
    if (element){
        element.style.backgroundColor = "red";
    }
}

function leave(id) {
    "use strict";
    var element = document.getElementById(id);
    if (element){
        element.style.backgroundColor = "green";
    }
}