<div class="br-logo"><a href="../UsuHome/"><span>[</span>xd<span>]</span></a></div>

<div class="br-sideleft overflow-y-auto">
  <label class="menu01">Menu</label>
  <div class="br-sideleft-menu">

    <a href="../UsuHome/usuario" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Inicio</span>
      </div>
    </a>

    <?php
      if($_SESSION["rol_id"]==1){
        ?>
          <a href="../UsuCurso/curso" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mis Cursos</span>
            </div>
          </a>
        <?php
      }else{
        ?>
          <a href="../AdminMntUsuario/admin" class="br-menu-link">
            <div class="br-menu-item">
              <i class="fa fa-user-o tx-24"></i>
              <span class="menu-item-label">Mnt. Usuario</span>
            </div>
          </a>

          <a href="../AdminMntCurso/cursos" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Curso</span>
            </div>
          </a>

          <a href="../AdminMntInstructor/instructor" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Instructor</span>
            </div>
          </a>

          <a href="../AdminMntCategoria/categoria" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Categoria</span>
            </div>
          </a>

          <a href="../AdminDetalleCertificado/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Detalle Certificado</span>
            </div>
          </a>
        <?php
      }
    ?>


    <a href="../PerfilUsuario/perfil" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-gear-outline tx-20"></i>
        <span class="menu-item-label">Perfil</span>
      </div>
    </a>
    <a href="../Acerca/acerca" class="br-menu-link">
      <div class="br-menu-item">
        <i class="fa fa-ban tx-20"></i>
        <span class="menu-item-label">Acerca</span>
      </div>
    </a>

    <a href="../html/Logout.php" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-power tx-20"></i>
        <span class="menu-item-label">Cerrar Sesion</span>
      </div>
    </a>

  </div>
</div>