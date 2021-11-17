"use strict"

/*$( "#id_pelicula" ).change(function() {
     var str = "" +  "<?= $p['id_pelicula'] ?>" ;
     
   $( "#test").text( str  );

});
*/

//alert("prueba");



$(function() {
  var checkboxes = $("input[type=checkbox]")

  // set the styles based on the initial state on load
  checkboxes.is(':checked').css('background-color', 'red')

  // update the styles as the checkbox states are changed
  checkboxes.on('change', function() {
    var checkbox = $(this)

    checkbox.css('background-color', checkbox.is(':checked') ? 'red' : 'transparent'))
  });
