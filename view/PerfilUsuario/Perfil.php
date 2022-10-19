<?php
 /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>
    <?php require_once("../../config/dinamico.php");?>
    <title><?php echo profiel;?></title>
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
                  <label class="form-control-label "><?php echo Nombre;?><span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="text" name="usu_nom" id="usu_nom" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"><?php echo primer;?><span class="tx-danger">*</span></label>
                  <input  class="formulario floater"  type="text" name="usu_apep" id="usu_apep" placeholder="Apellido Paterno">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label"><?php echo segundo;?><span class="tx-danger">*</span></label>
                  <input class="form-control formulario floater" type="text" name="usu_apem" id="usu_apem" placeholder="Apellido Materno">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"><?php echo email;?><span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="email" name="usu_correo" id="usu_correo" placeholder="corrreo electroncio" readonly disabled="disabled" >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"><?php echo password;?><span class="tx-danger">*</span></label>
                  <input class="formulario floater clave" type="password" name="usu_pass" id="usu_pass" placeholder="Ingrese Contraseña">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label"><?php echo s;?>: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_sex" id="usu_sex" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                    <option value="O">Otros</option>
                  </select>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label"><?php echo telefono;?><span class="tx-danger">*</span></label>
                  <input class="formulario floater" type="text" name="usu_telf" id="usu_telf" placeholder="Ingrese Telefono">
                </div>
              </div>



             <!--  este es para exclusivo para el alumno para que selcione su grado y su grupo -->
          <?php
          if($_SESSION["rol_id"]==1){
           ?>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Grado: <span class="tx-danger">*</span></label>
                  <select class="formulario select2 floater" name="usu_gra" id="usu_gra" data-placeholder="Seleccione">
                    <option label="Seleccione"></option>
                    <option value="Primer_semestre">Primer semestre</option>
                    <option value="Tercer_semestre">Tercer semestre</option>
                    <option value="Quinto_semetre">Quinto semetre</option>
                    <option value="Septimo_semestre">Septimo semestre</option>
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
                <?php
                  }
                ?>





                    <?php
                          if($_SESSION["rol_id"]==2){
                            ?>          
                          <div class="col-lg-6">
                                    <div class="form-group mg-b-10-force">
                                      <label class="form-control-label">Gefa y secretarias: <span class="tx-danger">*</span></label>
                                      <select class="formulario select2 floater" name="usu_gef" id="usu_gef" data-placeholder="Seleccione">
                                        <option label="Seleccione"></option>
                                        <option value="Docente">Docente</option>
                                        <option value="Secretaria">Secretaria</option>
                                      </select>
                                      
                                    </div> 
                                    <?php
                                      }
                                    ?>
                            <?php
                            if($_SESSION["rol_id"]==3){
                              ?>          
                            <div class="col-lg-6">
                                      <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Gefa y secretarias: <span class="tx-danger">*</span></label>
                                        <select class="formulario select2 floater" name="usu_gef" id="usu_gef" data-placeholder="Seleccione">
                                          <option label="Seleccione"></option>
                                          <option value="Docente">Docente</option>
                                          <option value="Gefa">Gefa</option>
                                          <option value="Secretaria">Secretaria</option>
                                        </select>
                                        
                                      </div> 
                                      <?php
                                        }
                                      ?>
                                  </div>
                                    </div>
                                    
                                  
                                  <div class="form-layout-footer">
                                    <button class="btngurdar" id="btnactualizar"><?php echo Actualizar_perfil;?></button>
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