<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Certificado-ITSS</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
      
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        
      </div>

      <div class="col-lg-4">
      <label class="form-control-label">&nbsp;</label>
        <button class="btnresgis" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Agregar Usuarios</button>
        </div>
      <div class="br-pagebody">
        
        <div class="br-section-wrapper">
            <h6 class="useractivo">Genera Constancia del alumno</h6>
            
          
            <div class="form-layout">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Cursos: <span class="tx-danger">*</span></label>
                            <select class="form select2" style="width:100%" name="cur_id" id="cur_id" data-placeholder="Seleccione">
                                <option label="Seleccione"></option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>

            <p></p>

            <div class="table-wrapper"></div>
                <table id="detalle_data"  class="table-bordered table-responsive" width="100%">
                <thead>
                  
                    <th class="wd-15p">Taller Inscrito</th>
                    <th class="wd-15p">Alumno</th>
                    <th class="wd-15p">Fecha Inicio</th>
                    <th class="wd-20p">Fecha Fin</th>
                    <th class="wd-15p">Instructor</th>
                    
                    <th class="wd-10p"></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>

    <?php require_once("modalmantenimiento.php"); ?>

    <?php require_once("../html/MainJs.php"); ?>
    <script  src="../../asset/js/pro/constancia.js"></script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>