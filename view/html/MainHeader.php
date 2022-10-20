<div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
             <span class="logged-name hidden-md-down"></span> <span class="logged-name hidden-md-down"><?php echo $_SESSION["usu_nom"]?></span>
             
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShN0nuLT7HIpIANuDi6wbMKpeuCgZsl2PtAA&usqp=CAU" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            
            <input type="hidden" id="usu_idx" value="<?php echo $_SESSION["usu_id"] ?>"><!-- Usu_id del usuario -->
            <input type="hidden" id="rol_idx" value="<?php echo $_SESSION["rol_id"] ?>"><!-- Rol_id del usuario -->
            


            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">

                <li class="btnperfil"><a href="../PerfilUsuario/Perfil"><i class="icon ion-ios-person"></i>Perfil</a></li>
                
                <li class="btnperfil"><a href="../Acerca/acerca"><i class="icon ion-ios-gear"></i>Correo</a>
                  <span class="emailjs"><?php echo $_SESSION["usu_correo"]?></span>
                </li>
                

                <li class="btnperfil"><a href="../Acerca/acerca"><i class="icon ion-ios-gear"></i>Version 1.0</a></li>
                
                <li class="btnperfil"><a href="../html/Logout"><i class="icon ion-ios-gear"></i>Cerrar Sesion</a></li>

              </ul>
            </div>
            
          </div>
        </nav>
        
      </div>
    </div>