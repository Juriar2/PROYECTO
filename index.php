<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Itss">
    <meta name="keywords" content="Itss">
    <meta name="author" content="Itss">
    <meta name="theme-color" content="#9E8010">
    <link rel="stylesheet" href="asset/css/inciar_sesion.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>ITSS</title>
</head>
<body>
    <header>
        <div class="home">
            <a class="login__home" href="Login">
               Iniciar sesion
            </a>
        </div>
    </header>

    <section id="container-slider">
      <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
      <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
      <ul class="listslider">
        <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
        <li><a itlist="itList_1" href="#"></a></li>
        <li><a itlist="itList_2" href="#"></a></li>
      </ul>
      <ul id="slider">
        <li style="background-image: url('asset/images/screen.png'); z-index:0; opacity: 1;">
          <div class="content_slider">
            <div>
              <h2>Desarrollador frontend</h2>
              <p>Soy un estudiante Universitario</p>
             
            </div>
          </div>
        </li>
        <li class="imagen01" style="background-image: url('asset/images/bg-1.jpg'); ">
          <div  class="content_slider">
            <div>
              <h2></h2>
              <p></p>

            </div>
          </div>
        </li>
        <li class="imagen02" style="background-image: url('asset/images/itss.jpg'); ">
          <div class="content_slider">
            <div>
              <h2></h2>
              <p</p>

            </div>
          </div>
        </li>
      </ul>
    </section> 
  <script src="asset/js/mover.js"></script>
    
</body>
</html>