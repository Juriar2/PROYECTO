<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Perfil-ITSS</title>
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
        <h4 class="perfil"></h4>
       
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="perfil">Perfi del Usuario</h6>
          <p class="perfil">Actualize sus datos verifiquen que esten correcto</p>
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
                  <input class="formulario floater" type="email" name="usu_correo" id="usu_correo" placeholder="corrreo electroncio" >
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
                  <label class="form-control-label">Genero: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_sex" id="usu_sex" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    <option value="N">No binario</option>
                    <option value="O">Otros</option>
                  </select>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="tel" name="usu_telf" id="usu_telf" placeholder="Matriula"pattern="[0-9]+">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Matricula: <span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="text" name="usu_matri" id="usu_matri" placeholder="Carrera"maxlength="9">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Carrera: <span class="tx-danger"></span></label>
                  <input class="formulario floater" type="text" name="usu_gra" id="usu_gra" placeholder="Carrera" disabled>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Taller Inscrito: <span class="tx-danger"></span></label>
                  <input class="formulario floater" type="text" name="usu_grup" id="usu_grup" placeholder="Taller Inscrito"  disabled>
                </div>
              </div>
          </div>
          <div class="form-layout-footer">
              <button class="btngurdar" id="btnactualizar">Actualizar perfil</button>
            </div>
        </div>
      </div>
    </div>
    

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="../../asset/js/pro/perfil.js"></script>
    <script src="../../asset/js/app.js"></script>

        
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>