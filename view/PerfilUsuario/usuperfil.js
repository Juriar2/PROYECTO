var usu_id = $('#usu_idx').val();

$(document).ready(function(){
    $.post("../../controller/usuario.php?op=mostrar", { usu_id : usu_id }, function (data) {
        data = JSON.parse(data);
        $('#usu_nom').val(data.usu_nom);
        $('#usu_apep').val(data.usu_apep);
        $('#usu_apem').val(data.usu_apem);
        $('#usu_correo').val(data.usu_correo);
        $('#usu_telf').val(data.usu_telf);
        $('#usu_pass').val(data.usu_pass);
        $('#usu_sex').val(data.usu_sex).trigger("change");
    });
});


$(document).on("click","#btnactualizar", function(){

    $.post("../../controller/usuario.php?op=update_perfil", { 
        usu_id : usu_id,
        usu_nom : $('#usu_nom').val(),
        usu_apep : $('#usu_apep').val(),
        usu_apem : $('#usu_apem').val(),
        usu_pass : $('#usu_pass').val(),
        usu_sex : $('#usu_sex').val(),
        usu_telf : $('#usu_telf').val(),
        usu_grado : $('#usu_gra').val(),
     }, function (data) {
    });

    Swal.fire({
        title: 'Correcto!',
        text: 'Se actualizo Correctamente',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    })
});

/* Limiting the number of characters that can be entered into the input field. */
var input=  document.getElementById('usu_telf');
input.addEventListener('input',function(){
  if (this.value.length > 10) 
     this.value = this.value.slice(0,10);
     
     
})

/* Listening for the input event and then replacing anything that is not a number with nothing. */
$(document).ready(function(){
	// Listen for the input event.
	$("#usu_telf").on('input', function (evt) {
		// Allow only numbers.
		$(this).val($(this).val().replace(/[^0-9]/g, ''));
	});
});