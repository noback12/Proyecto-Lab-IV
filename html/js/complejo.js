"use strict"



//alert("prueba");
//window.alert("Hello world!");


//onclick = "GetSelected()"
function GetSelected() {
        //creo un array.
        var selected = new Array();
 
        //Referencio el div donde tengo los asientos.
        var tblFruits = document.getElementById("asientos");
 
        //Referencia a todos los CheckBoxes en el div.
        var chks = tblFruits.getElementsByTagName("INPUT");
        
        //Recorro y meto todos los valores checkeados en un array
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) {
                selected.push(chks[i].value);
            }
        }
 
        //Display the selected CheckBox values.
        if (selected.length > 0) {
            //alert("Selected values: " + selected.join(","));
            document.getElementById("reservas").value = selected.join(",");
        }
};
