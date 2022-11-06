<div class="br-logo"><a href="../UsuHome/dashboard"><span>[</span>ITSS<span>]</span></a></div>

<div class="br-sideleft overflow-y-auto">
  <label class="menu01">Inicio</label>
  <div class="br-sideleft-menu">

    <a href="../UsuHome/dashboard" class="br-menu-link">
      <div class="br-menu-item">
        <i class="fa fa-tachometer tx-22"></i>
        <span class="menu-item-label">Inicio</span>
      </div>
    </a>

    <?php
      if($_SESSION["rol_id"]==1){
        ?>
          <a href="../UsuCurso/Curso" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mis Cursos</span>
            </div>
          </a>
        <?php
      }else{
        ?>
         <a href="../AdminMntInstructor/instructor" class="br-menu-link">
            <div class="br-menu-item">
              <i class="fa fa-graduation-cap tx-24"></i>
              <span class="menu-item-label">Instructor Registrados</span>
            </div>
          </a>
        <a href="../AdminMntCategoria/categoria" class="br-menu-link">
            <div class="br-menu-item">
              <i class="fa fa-coffee tx-24"></i>
              <span class="menu-item-label">Taller Registrados</span>
            </div>
          </a>
          <a href="../AdminMntCurso/cursos" class="br-menu-link">
            <div class="br-menu-item">
              <i class="fa fa-i-cursor tx-24"></i>
              <span class="menu-item-label">Curso Registrados</span>
            </div>
          </a>
          <a href="../AdminMntUsuario/admin" class="br-menu-link">
            <div class="br-menu-item">
              <i class="fa fa-user-o tx-24"></i>
              <span class="menu-item-label">Usuario Registrados</span>
            </div>
          </a>
          <a href="../AdminDetalleCertificado/constancia" class="br-menu-link">
            <div class="br-menu-item">
              <i class="fa fa-certificate tx-24"></i>
              <span class="menu-item-label">Generar Constancia</span>
            </div>
          </a>
        <?php
      }
    ?>
  </div>
</div>