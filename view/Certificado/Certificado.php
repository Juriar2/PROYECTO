<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es" class="pos-relative">
    <head>
        <?php require_once("../html/MainHead.php"); ?>
        <title>Certificado</title>
    </head>

  <body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          <canvas id="canvas" height="650px" width="900px" class="img-fluid" alt="Responsive image"></canvas>
          
        </h1>
        <br>

        <div id="qrcode"></div>

        <div class="form-layout-footer">
            <!--<button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>---->
          <button class="btnpfd slideRight" id="btnpdf" title="Descargar PDF"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></i> Descargar PDF</button>
        </div>

      </div>
    </div>

    <?php require_once("../html/MainJs.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script type="text/javascript" src="certificado.js"></script>
    <script type="text/javascript">
  $(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>

  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>