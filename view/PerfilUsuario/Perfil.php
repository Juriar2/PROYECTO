<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Perfil usuario</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>


    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Perfil</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="perfil">Perfi del Usuario</h4>
       
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="perfil">Perfil</h6>
          <p class="perfil">Actualize sus datos</p>

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label ">Nombre: <span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="text" name="usu_nom" id="usu_nom" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Apellido Paterno: <span class="tx-danger">*</span></label>
                  <input  class="formulario floater"  type="text" name="usu_apep" id="usu_apep" placeholder="Apellido Paterno">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Apellido Materno: <span class="tx-danger">*</span></label>
                  <input class="form-control formulario floater" type="text" name="usu_apem" id="usu_apem" placeholder="Apellido Materno">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Correo Electronico: <span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="email" name="usu_correo" id="usu_correo" placeholder="corrreo electroncio" readonly disabled="disabled" >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Contraseña: <span class="tx-danger">*</span></label>
                  <input class="formulario floater clave" type="password" name="usu_pass" id="usu_pass" placeholder="Ingrese Contraseña">
                  <button type="button" class="mostrarClave">Mostra contraseña</button>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_sex" id="usu_sex" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                  </select>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="number" name="usu_telf" id="usu_telf" placeholder="Ingrese Telefono">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Docente: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_gra" id="usu_gra" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="Septimo_semestre">Gefa</option>
                    <option value="Docente">Docente</option>
                  </select>
                </div>
              </div>
              <?php
      if($_SESSION["rol_id"]==1){
        ?>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Docente: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_gra" id="usu_gra" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="Primer_semestre">Primer semestre</option>
                    <option value="Tercer_semestre">Tercer semestre</option>
                    <option value="Quinto_semetre">Quinto semetre</option>
                    <option value="Septimo_semestre">Septimo semestre</option>
                    <option value="Docente">Docente</option>
                  </select>
                </div>
              </div>
             
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Grupo: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_grup" id="usu_grup" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                      
                  </select>
                 
                </div>
                
              </div>
              <?php
              }
            ?>
            </div>
           
            <div class="form-layout-footer">
              <button class="btngurdar" id="btnactualizar">Actualizar perfil</button>
            </div>
            
      
          </div>

        </div>
      </div>
    </div>
    

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="usuperfil.js"></script>
    

        
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>