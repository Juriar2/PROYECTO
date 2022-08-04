<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Itss">
    <meta name="keywords" content="Itss">
    <meta name="author" content="Itss">
    <meta name="theme-color" content="#9E8010">
    <link rel="stylesheet" href="asset/css/home.css">
    <link rel="stylesheet" href="asset/css/wickedcss.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Anton'><link rel="stylesheet" href="./style.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6LddbUkhAAAAABS6nf9K7K4SKbC_ResEqfWBaGmD"></script>
    <title>ITSS</title>
</head>
<body>

<div class="night">
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  <div class="shooting_star"></div>
  
</div>
 <!----home de la pagina-------------->
<header>
        <div class="container">
            <nav class="nav d-flex">
                <a href="#" class="logo">ITSS</a>
                <a href="login" target="new" class="btn rollerRight">inciar sesion</a>
                    
            </nav>
        </div>
    </header>
    <!---inicia la otra parte-------------->
    <section class="home">
        <div class="container">
            
            <div class="home-wrapper d-flex">
                <div class="col-left">
                    <h1 class="res slideRight">Registrarse por tiempo ilimitado</h1>
                        <div class="launch-time">
                            <div>
                                <p id="days">00</p>
                                <span>Dias</span>
                            </div>
                            <div>
                                <p id="hours">00</p>
                                <span>Horas</span>
                            </div>
                            <div>
                                <p id="minutes">00</p>
                                <span>Minutos</span>
                            </div>
                            <div>
                                <p id="seconds">00</p>
                                <span>Segundo</span>
                            </div>
                            
                        </div>
                        
                      <a href="Resgistrate" target="new" class="btnresgistrate">Inscríbete</a>
                </div>
                
                <div class="home-image">
                <img class="nave pulse" src="https://firebasestorage.googleapis.com/v0/b/yuriar-d684c.appspot.com/o/rocket.png?alt=media&token=4b46a1a5-ef10-4e36-98f7-e0047aed49a7" class="pulse">
                </div>
            </div>
        </div>
       
    </section>
    <script src="asset/js/tiempo.js"></script>
    <script>
			$(document).ready(function() {
				$('#login02').click(function() {
					grecaptcha.ready(function() {
						grecaptcha.execute('6LddbUkhAAAAABS6nf9K7K4SKbC_ResEqfWBaGmD', {
							
				
						});
					});
				});
			});
		</script>
</body>
</html>