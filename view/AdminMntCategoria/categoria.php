<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Empresa::MntCategoria</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
    <button class="btnresgis" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Nuevo Registro</button>
    <hr>
      <div >
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Categorias</h6>
            <p class="mg-b-30 tx-gray-600">Listado de Categorias</p>
            <div class="table-wrapper"></div>
            <table id="categoria_data"style="width:100%"  class="table-bordered table-responsive">
                <thead>
                    <tr>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-10p">Eidtar</th>
                    <th class="wd-10p">Elimianar</th>
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
    <script type="text/javascript" src="adminmntcategoria.js"></script>
    <script  src="../../asset/js/shortcut.js"></script>

  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>