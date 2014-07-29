function setUnhidden(position) {
    "use strict"; 
    var positions = ["president","vpresident","secretary","treasurer","progchair","commservchair","conplanchair","memchair","publication","socialchair","financechair","nsbesenate","procollinit","telecom","hist","senate","chairemer","parliamen"];
    var i = 0;
    for (; i < positions.length; i++){ 
        var currentPosition = document.getElementById(positions[i]);
        if (positions[i] == position){
            currentPosition.className = "visible";
        } else{
            currentPosition.className = "hidden";
            if (positions[i] == "memchair"){
            }
        }
        
        
    }

}