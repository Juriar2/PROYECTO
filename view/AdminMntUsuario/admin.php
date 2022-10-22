<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Usuarios-ITSS</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
   <button class="btnresgis" id="add_button" onclick="nuevo()"><i class="fa fa-plus-square mg-r-10"></i> Nuevo Registro</button> <strong>Para mostrar un modal presione Ctrl+Q y Ecs para cerra</strong>
  

    <hr>
     
      <!----Una tabla que está siendo poblada por ajax ----->
      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="user">Usuario</h6>
            <p class="useractivo">Usuarios activos</p>
            <div class="table-wrapper"></div>
                <table id="usuario_data" style="width:95%" class="table-bordered table-responsive">
                <thead>
                  
                    <tr>
                    <th class="wd-15p">No°</th>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p">Ape.Paterno</th>
                    <th class="wd-15p">Ape.Materno</th>
                    <th class="wd-15p">Correo</th>
                    <th class="wd-15p">Telefono</th>
                     <th class="wd-15p">Grupo</th>
                    <th class="wd-15p">Grado</th>
                    <th class="wd-15p">Rol</th>
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
    <!---Llamando a la ventana modal.--->
    <?php require_once("modalmantenimiento.php"); ?>
    <?php require_once("modalplantilla.php"); ?>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="adminmntusuario.js"></script>
    <script type="text/javascript" src="shortcut.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
  </body>
</html>
<?php
  }else{
    /*  redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>