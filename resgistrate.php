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
  <title>Registrate-ITSS</title>
</head>

<body>
<form method="post" id="usuario_form">
<div class="d-flex align-items-center justify-content-center  ht-20v">

<input type="hidden" name="usu_id" id="usu_id"/>

    <div class="">
    <div class="registre"><span>[</span>Registrate <span class="tx-normal">]</span></div>
     
    <div class="form-group">
        <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
        <input type="text" id="usu_nom" name="usu_nom" class="form-control1" placeholder="Ingrese su Nombre">
    </div>

	  <div class="form-group">
      <label class="form-control-label">Primer apellido: <span class="tx-danger">*</span></label>
        <input type="text" id="usu_apep" name="usu_apep" class="form-control1" placeholder="Ingrese primer Apellido">
    </div>
      
	  <div class="form-group">
        <label class="form-control-label">Segundo Apellido : <span class="tx-danger">*</span></label>
        <input type="text" id="usu_apem" name="usu_apem" class="form-control1" placeholder="Ingrese su segundo Apellido">
    </div>

   
    <div class="form-group">
      <label class="form-control-label">Correo electronico: <span class="tx-danger">*</span></label>
      <input type="email" id="usu_correo" name="usu_correo" class="form-control1" placeholder="Correo Electronico">
    </div>

    <div class="form-group">
      <label class="form-control-label">Contraseña: <span class="tx-danger">*</span></label>
      <input type="password" id="usu_pass" name="usu_pass"class="form-control1" placeholder="Contraseña ...">
    </div>

    <div class="form-group">
     <label class="form-control-label">Genero: <span class="tx-danger">*</span></label>
        <select class="form-control1 select2" style="width:100%" name="usu_sex" id="usu_sex" data-placeholder="Seleccione genero" required>
          <option label="Seleccione"></option>
          <option value="M">Masculino</option>
          <option value="F">Femenino</option>
          <option value="N">No binario</option>
          <option value="O">Otros</option>
                               
        </select>
    </div>

		<div class="form-group">
    <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
        <input type="tel" id="usu_telf" name="usu_telf"class="form-control1" placeholder="Telefono">
    </div>
		
	  <div class="form-group">
          <label class="form-control-label">carrera: <span class="tx-danger">*</span></label>
              <select class="form-control1 select2" style="width:100%" name="usu_gra" id="usu_gra" data-placeholder="Seleccione " required>
                  <option label="Seleccione"></option>
                  <option value="Informatica">Informatica</option>
                  <option value="Administracion">Administracion</option>
                  <option value="Electromecanica">Electromecanica</option>
                  <option value="Enegia renovable">Enegia renovable</option>
                  <option value="Industrial">Industrial</option>
                  <option value="Otra carrera">Otra carrera</option>
        </select>
    </div>

        <div class="form-group">
          <label class="form-control-label">Taller a elgir <span class="tx-danger">*</span></label>
            <select class="form-control1 select2" style="width:100%" name="usu_grup" id="usu_grup" data-placeholder="Seleccione " required>
            <option label="Seleccione"></option>
            <option value="T1">T1</option>
            <option value="T2">T2</option>  
            <option value="T4">T3</option>  
            </select>
      </div>	
        
        
    <div class="form-group">
      <label class="form-control-label">Acceso: <span class="tx-danger">*</span></label>
        <select class="form-control1 select2" style="width:100%" name="rol_id" id="rol_id" data-placeholder="Seleccione" required>
          <option label="Seleccione acceso"></option>
          <option value="1">Alumno</option>
          
              
        </select>
    </div>

    <div class="form-group">
            <label class="form-control-label">Matricula: <span class="tx-danger">*</span></label>
            <input class="form-control1" id="usu_matri" type="text" name="usu_matri"placeholder="Ingrese la matricula" required>
        </div>
        <div class="form-group">
            
            <input class="form-control1" id="usu_pago" type="hidden" name="usu_pago">
        </div>		
            
			<button type="submit" id="btnregistrar" class="registro">Registrarse</button>

      
      
</form>
  

      
     

  <script src="public/lib/jquery/jquery.js"></script>
  <script src="public/lib/popper.js/popper.js"></script>
  <script src="public/lib/bootstrap/bootstrap.js"></script>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="asset/js/registrate.js"></script>

  
</body>

</html>