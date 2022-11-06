<?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("config/config.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }
  

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Iniciar sesison ITSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Itss">
    <meta name="author" content="Itss">
    <meta name="theme-color" content="#9E8010">
    <link rel="shortcut icon" href="asset/images/itss.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/inciar_sesion.css">
    <link rel="stylesheet" href="asset/css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    

    </head>
    <body>
      
    <div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
        </div>
    <section class="ftco-section">
        
        <div class="container">
            
            <div class="row justify-content-center">
            
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="bajar">
                            
                        <img class="itss animate__animated animate__zoomInRight" src="asset/images/itss.jpg" alt="" srcset="">
                  </div>
                        <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-2">Bienvenido al sistema</h3>
                            
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" id="formLogin" class="signin-form" >
                            <?php
                            if (isset($_GET["m"])){
                            switch($_GET["m"]){
                                case "1";
                                ?>
                            <div class="alert alert-error" role="alert">
                            <strong class="d-block d-sm-inline-block-force">El correo o la contraseña son incorrecto</strong>

                            </div>
                                <?php
                                break;
                                 

                                case "2";
                                ?>
                            <div class="alert alert-error" role="alert">
                            <strong class="d-block d-sm-inline-block-force">Todo los campos son obligatorio</strong>
                            </div>
                                <?php
                                break;
                            }
                            }
                        ?>
                        <br>
                        
                    <div class="form-group mb-3">
                    <label class="label animate__animated animate__fadeInDown" for="Correo electronico">Correo electronico</label>
                    <input type="email" id="usu_correo" name="usu_correo" class="formularioxd animate__animated animate__fadeInLeft"  placeholder="Ingrese su correo electronico ">
                    </div>
                    <div class="form-group mb-3">
                    <label class="label animate__animated animate__fadeInDown" for="password">contraseña</label>
                    <input type="password" id="usu_pass" name="usu_pass" class=" animate__animated animate__fadeInLeft formularioxd clave"  placeholder="Ingrese su contraseña">
                        <button type="button" class="mostrarClave">Mostra contraseña</button>
                    
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="login"  name="enviar"  class="form-control" value="si">
                        <button  type="submit" id="login02" class="button02 animate__animated  animate__zoomInDown">Iniciar sesion</button>

                        <a href="resgistrate"  target="new" class="cuenta">No tiene cuenta?</a>
                    </div>
                  
                  </form>
                  
                </div>
              </div>
                </div>
            </div>
            <div class="bg-1">
            <footer class="t-stroke t-shadow">
            INSTITUTO TECNOLÓGICO SUPERIOR DE LA REGIÓN SIERRA
            </footer>
                            
            </div>
           
        </div>
        
    </section>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LddbUkhAAAAABS6nf9K7K4SKbC_ResEqfWBaGmD"></script>

    <script src="asset/js/jquery.min.js"></script>
     <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/main.js"></script>
    <script src="asset/js/app.js"></script>
    


  
    </body>