<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Curso-ITSS</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
    <button class="btnresgis" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Nuevo Registro</button>

    <hr>  
      

      <div class="br-pagebody">
        <div class="br-section-wrapper">
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Cursos</h4>
        <p class="mg-b-0">Mantenimiento</p>
        </div>
            <div class="table-wrapper">
                <table id="cursos_data" style="width:90%" class="table-bordered table-responsive">
                <thead>
                    <tr>
                    
                    <th class="wd-12p">Nombre tallere</th>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p">Fech.Inicio</th>
                    <th class="wd-17p">Fech.Fin</th>
                    <th class="wd-15p">Instructor</th>
                    <th class="wd-10p"></th>
                    <th class="wd-10p"></th>
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
    <?php require_once("modalfile.php"); ?>

    <?php require_once("../html/MainJs.php"); ?>
    <script  src="../../asset/js/pro/cursos.js"></script>
    <script  src="../../asset/js/shortcut.js"></script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>