<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/config.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>Dashboard-ITSS</title>
  </head>

  <body>
  
    <?php require_once("../html/MainMenu.php"); ?>
    <?php require_once("../html/MainHeader.php"); ?>
    <div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
    </div>
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Inicio</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"></h4>
        <p class="mg-b-0">Dashboard</p>
      </div>
      <?php
      if($_SESSION["rol_id"]==2){
        ?>
      <!-- Contenido del proyecto -->
      <div class="br-pagebody mg-t-5 pd-x-28">
        <!-- Resumen en generalde los usuarios -->
        <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal  overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-user tx-60 lh-0 tx-black op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Usuario</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lbltotal"></p>
                  <span class="tx-11 tx-roboto tx-white-6">Registro Usuario</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-dange  overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="fa fa-video-camera tx-60 lh-0 tx-black op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Curso</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lbltotal2"></p>
                  <span class="tx-11 tx-roboto tx-white-2">Registro Curso</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primar  overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="bx bxs-speaker tx-60 lh-0 tx-black op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">instructor</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lbltotal3" ></p>
                  <span class="tx-11 tx-roboto tx-white-6">Registro Intru</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
          
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-br-primar rounde overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="bx bx-category-alt tx-60 lh-0 tx-black op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">categoria</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lbltotal4" ></p>
                  <span class="tx-11 tx-roboto tx-white-6">Registro cate</span>
                </div>
              </div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->
        <?php
      }
    ?>
        <br>


<!-- solo se msotrara para e usuario>
        <?php
      if($_SESSION["rol_id"]==1){
        ?>
        <!-- Resumen de total de cursos -->
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-primar  overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total de Cursos</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1" id="lbltotal5"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
    ?>
        <!-- Resumen top 10 cursos -->
        <div class="row row-sm mg-t-20">
          <div class="col-12">
            <div class="card pd-0 bd-0 shadow-base">
              <div class="pd-x-30 pd-t-30 pd-b-15">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h6 class="lista0">Curso</h6>
                    <p class="lista"></p>
                  </div>
                </div>
              </div>
              <div class="pd-x-15 pd-b-15">
                <div class="table-wrapper">
                <table id="cursos_data" style="width:100%" class="table-bordered table-responsive">
                    <thead>
                      <tr>
                      <th class="wd-15p">No°</th>
                        <th class="wd-15p">Curso</th>
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
        </div>

      </div>
    </div>
    <?php require_once("../html/MainJs.php"); ?>
    <script src="../../asset/js/app.js"></script>
    <script src="HomeUsuario.js"></script>
    
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."login");
  }
?>