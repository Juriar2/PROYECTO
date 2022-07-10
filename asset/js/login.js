$(function(){
	$("#login02").attr("disabled",true);{
		$("#usu_correo").keyup(function(){
			if($("#usu_correo").val() != ""){
				$("#login02").removeAttr("disabled");
			}
			
		});
		
	}
});

document.addEventListener("DOMContentLoaded", function() {
	document.getElementById("formLogin").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
	evento.preventDefault();
	var usu_correo = document.getElementById('usu_correo').value;
	if(usu_correo.length == 0) {
		Swal.fire({
			title: 'Correo electronico requerido',
			text: 'El campo correo no puede estar vacio',
			icon: 'error',
			confirmButtonText: 'Aceptar'
		})
	  return;
	}
	var usu_pass = document.getElementById('usu_pass').value;
	if (usu_pass.length < 6) {
		Swal.fire({
			title: 'Contraseña invalida!',
			text: 'El campo contraseña no puede estar vacio',
			fonzSize: '1em',
			icon: 'error',
			confirmButtonText: 'Aceptar'
		})
	  return;
	}
	this.submit();
  }