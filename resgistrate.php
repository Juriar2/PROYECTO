<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bracket">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:url" content="http://themepixels.me/bracket">
  <meta property="og:title" content="Bracket">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">
  <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="public/css/bracket.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/inciar_sesion.css">
  <title>Registrate</title>
</head>

<body>
<form method="post" id="usuario_form">
<div class="d-flex align-items-center justify-content-center  ht-20v">
<input type="hidden" name="usu_id" id="usu_id"/>

    <div class="">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Registrate <span
          class="tx-normal">]</span></div>
     
      <div class="form-group">
        <input type="text" id="usu_nom" name="usu_nom" class="form-control" placeholder="Ingrese Nombre">
      </div>

	  <div class="form-group">
        <input type="text" id="usu_apep" name="usu_apep" class="form-control" placeholder="Apellido">
      </div>
	  <div class="form-group">
        <input type="text" id="usu_apem" name="usu_apem" class="form-control" placeholder="segundo  Apellido">
      </div>
	  
      <div class="form-group">
        <input type="email" id="usu_correo" name="usu_correo" class="form1" placeholder="Ingrese Correo Electronico">
      </div>
	  
      <div class="form-group">
        <input type="password" id="usu_pass" name="usu_pass"class="form1" placeholder="Ingrese Contraseña">
      </div>

      <div class="form-group">
     <label class="form-control-label">Genero: <span class="tx-danger">*</span></label>
            <select class="form1 select2" style="width:100%" name="usu_sex" id="usu_sex" data-placeholder="Seleccione" required>
             <option label="Seleccione"></option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            <option value="N">No binario</option>
            <option value="O">Otros</option>
                               
        	</select>
            </div>

		<div class="form-group">
        <input type="tel" id="usu_telf" name="usu_telf"class="form-control" placeholder="Telefono">
      </div>
		
	  <div class="form-group">
                <label class="form-control-label">Grado: <span class="tx-danger">*</span></label>
                <select class="form1 select2" style="width:100%" name="usu_gra" id="usu_gra" data-placeholder="Seleccione" required>
                     <option label="Seleccione"></option>
                    <option value="Primer_semestre">Primer semestre</option>
                     <option value="Tercer_semestre">Tercer semestre</option>
                     <option value="Quinto_semetre">Quinto semetre</option>
                    <option value="Septimo_semestre">Septimo semestre</option>
                    <option value="Docente">Docente</option>

                </select>
             </div>

	<div class="form-group">
         <label class="form-control-label">Grupo: <span class="tx-danger">*</span></label>
        <select class="form1 select2" style="width:100%" name="usu_grup" id="usu_grup" data-placeholder="Seleccione" required>
            <option label="Seleccione"></option>
            <option value="A">A</option>
            <option value="B">B</option>  
            </select>
            </div>	
			
			
			<div class="form-group">
            <label class="form-control-label">Rol: <span class="tx-danger">*</span></label>
            <select class="form1 select2" style="width:100%" name="rol_id" id="rol_id" data-placeholder="Seleccione" required>
                <option label="Seleccione"></option>
                <option value="1">Alumno</option>
                </select>
                </div>

				<div class="form-group">
                     <label class="form-control-label">Matricula: <span class="tx-danger">*</span></label>
                    <input class="form1" id="usu_matri" type="text" name="usu_matri"placeholder="Ingrese la matricula" required>
            </div>	
			<button type="submit" name="action" value="add" class="resgistro01"></i> Guardar</button>
</form>
  
      
     

  <script src="public/lib/jquery/jquery.js"></script>
  <script src="public/lib/popper.js/popper.js"></script>
  <script src="public/lib/bootstrap/bootstrap.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



  <script>
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
			window.location.replace("https://localhost/itss/login");
			alert('en momen se te redirira para que inici sesion')

            Swal.fire({
                title: 'Correcto!',
                text: 'Se Registro Correctamente',
                icon: 'success',
                confirmButtonText: 'Aceptar'
				
            })
        }
    });
}

init();



  </script>
</body>

</html>