/* Getting the value of the input with the id of use_id. */
var use_id= $("#use_id").val();

$(document).ready(function(){
   /* Enviando una solicitud POST a la URL `../../controller/usuario.php?op=mostrar` con los datos
   `{use_id:use_id}` y luego ejecutando la función `function(data){` con los datos de respuesta. */
    $.post("../../controller/usuario.php?op=mostrar",{use_id:use_id},function(data){
    /* Analizando la cadena JSON en un objeto JavaScript.*/
    data = JSON.parse(data);
        /* Establecer el valor de la entrada con el id de use_nombre al valor de use_nombre
        propiedad del objeto de datos. */
        $("#use_nombre").val(data.use_nombre);
        $("#use_apellido").val(data.use_apellido);  
    });
});

