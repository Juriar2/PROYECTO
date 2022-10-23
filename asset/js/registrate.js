

var usu_id = $('#usu_idx').val();
function init(){
$("#usuario_form").on("submit",function(e){
    guardaryeditar(e);
});
}

function guardaryeditar(e){
e.preventDefault();
var formData = new FormData($("#usuario_form")[0]);
$.ajax({
    url: "controller/usuario.php?op=guardaryeditar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(data){
        alert('Te estaremos redireccionando al login');
        window.location="http://localhost/itss/login";

        Swal.fire({
            title: 'Correcto!',
            text: 'Se Registro Correctamente',
            icon: 'success',
            confirmButtonText: 'Aceptar'
            
        })
    }
});
}
function registro(e){
    e.preventDefault();
    
    $.ajax({
        url: "controller/usuario.php?op=registro",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
            
    
            Swal.fire({
                title: 'error!',
                text: 'Este correo ya exite',
                icon: 'success',
                confirmButtonText: 'Aceptar'
                
            })
        }
    });
    }

init();

$(document).on("click", "#btnregistrar", function () {
    var usu_nom =  $('#usu_nom').val();
    var usu_apep =  $('#usu_apep').val();
    var usu_apem =  $('#usu_apem').val();
    var usu_correo =  $('#usu_correo').val();
    var usu_sex =  $('#usu_sex').val();
    var usu_telf =  $('#usu_telf').val();
    var usu_gra =  $('#usu_gra').val();
    var usu_grup =  $('#usu_grup').val();
    var rol_id =  $('#rol_id').val();
    var usu_matri =  $('#usu_matri').val();
    if (usu_nom=='' || usu_apep=='' || usu_apem=='' || usu_correo=='' || usu_pass=='' || usu_sex =='' || usu_telf =='' || usu_gra =='' || usu_grup =='' || rol_id =='' || usu_matri ==''){
        Swal.fire(
            'Error!',
            'Campos Vacios',
            'error'
        );
    }
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





