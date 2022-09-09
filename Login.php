<?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("config/config.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("models/Usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }else{
        //al momento de cargar la pagina com arlete una vez el usuario ha iniciado sesion
    echo "<script>alert('Debes de iniciar sesion con tu correo Elctronico Institucinal y su matricula como contraseña');</script>";
  }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Iniciar sesison</title>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LddbUkhAAAAABS6nf9K7K4SKbC_ResEqfWBaGmD"></script>
        <script>
            $(document).ready(function() {
                $('#login02').click(function() {
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6LddbUkhAAAAABS6nf9K7K4SKbC_ResEqfWBaGmD', {
                            
                            }).then(function(token) {
                            $('#formLogin').prepend('<input type="hidden" name="token" value="' + token + '" >');
                            $('#formLogin').prepend('<input type="hidden" name="action" value="validarUsuario" >');
                            $('#formLogin').submit();
                        });
                    });
                });
            });
        </script>
    </head>
    <body>
    
    <section class="ftco-section">
        
        <div class="container">
            
            <div class="row justify-content-center">
            
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div>
                            
                        <img src="asset/images/itss.jpg" alt="" srcset="">
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
                    <label class="label" for="Correo electronico">Correo electronico</label>
                    <input type="email" id="usu_correo" name="usu_correo" class="formularioxd"  placeholder="Ingrese su correo electronico ">
                    </div>
                    <div class="form-group mb-3">
                    <label class="label" for="password">contraseña</label>
                    <input type="password" id="usu_pass" name="usu_pass" class="formularioxd clave"  placeholder="Ingrese su contraseña como matricula">
                        <button type="button" class="mostrarClave">Mostra contraseña</button>
                    
                    </div>
                    <div class="form-group">
                        <input type="hidden" id="login"  name="enviar"  class="form-control" value="si">
                        <button  type="button" id="login02" class="button02">Iniciar sesion</button>
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
    
    
    <script src="asset/js/jquery.min.js"></script>
     <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/main.js"></script>
    
    
    


  
    </body>