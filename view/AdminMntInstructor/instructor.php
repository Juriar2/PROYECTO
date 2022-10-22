<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Empresa::MntInstructor</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
    <button class="btnresgis" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Nuevo Registro</button> <strong>Para mostrar un modal presione Ctrl+Q y Ecs para cerra</strong>
    <hr>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Instructor</h6>
            <p class="mg-b-30 tx-gray-600">Listado de Instructor</p>

           

            

            <div class="table-wrapper"></div>
                <table id="instructor_data" class="table-bordered table-responsive">
                <thead>
                    <tr>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p">Ape.Paterno</th>
                    <th class="wd-15p">Ape.Materno</th>
                    <th class="wd-15p">Correo</th>
                    <th class="wd-15p">Telefono</th>
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

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="adminmntinstructor.js"></script>
    <script  src="../../asset/js/shortcut.js"></script>

  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>