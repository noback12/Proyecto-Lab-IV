"use strict"

//Cuando checkeen los asientos cambia el color  
function isChecked(elem) {
    elem.parentNode.style.backgroundColor  = (elem.checked) ? "#9bff82" : 'lightblue';
}

