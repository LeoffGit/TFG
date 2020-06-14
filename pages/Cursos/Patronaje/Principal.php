<?php
session_start();
include "../../../PHP/libreria.php";
sesioncurso($_SERVER['REQUEST_URI']);
if(isset($_POST['logmail'])){
  login();
}
if(isset($_POST['adquirir'])){
  adquirircurso($_SESSION['id_usuario'],$_SESSION['idpagina']);
}
 ?>
 <!doctype html>

 <html lang="en">

 <head>

   <!-- Required meta tags -->

   <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="shortcut icon" href="ico/favicon.ico">
   <link rel="stylesheet" href="../../../css/font-awesome.css">
   <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
   <link rel="stylesheet" href="../../../css/master.css">

   <title>TFG</title>

 </head>

 <body>
   <?php headerito($_SESSION['tipouser']); ?>
    <div class="container" id="contenido">
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../../../images/placeholder.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../../images/placeholder2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../../images/placeholder3.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <p></p>
          </div>
          <div class="row">
            <div class="jumbotron text-white shadow ">
              <h2 class="display-5">Requisitos</h2>
              <ul class="ulita">
                <li><?php echo $_SESSION['tipouser'] ?></li>
                <li><?php echo $_SESSION['id_usuario'] ?></li>
                <li><?php echo $_SESSION['nombre'] ?></li>
                <li><?php echo $_SESSION['email'] ?></li>
                <li><?php  $_SESSION['tipouser']=1; echo$_SESSION['tipouser']; ?></li>
                <li>requisitos</li>
                <li>requisitos</li>
                <li>requisitos</li>
                <li>requisitos</li>
                <li>requisitos</li>
                <li>requisitos</li>
                <li>requisitos</li>
              </ul>
              <hr class="my-4">
              <h2 class="display-5">Descripcion</h2>
              <p class="">
                Suspendisse at malesuada elit. Nulla ullamcorper sit amet odio sed pellentesque. Donec commodo a mauris nec cursus. Sed porttitor turpis vitae odio iaculis, in fringilla nisl mattis. Morbi nibh magna, euismod vitae commodo eget,
                molestie quis metus. Duis id urna quis purus vehicula feugiat at vitae nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

                Cras scelerisque purus libero, eget porta ante sagittis sit amet. Etiam aliquet vel risus aliquet aliquam. Suspendisse sagittis efficitur est, viverra suscipit leo dapibus id. Vestibulum pretium augue at tellus gravida, quis aliquet
                ante ultricies. Fusce ut augue eget libero posuere dignissim a vitae orci. Nunc in tincidunt justo, non rutrum justo. Sed et maximus felis, in aliquet libero. Aenean quis luctus dui. In molestie mattis ullamcorper. Sed tincidunt
                tellus vitae nibh ultrices dictum. Sed a neque et mi dignissim accumsan. Integer vulputate a orci laoreet rhoncus.

                Donec dictum diam turpis, et vulputate dui venenatis nec. Aliquam venenatis sagittis enim ac viverra. Integer finibus enim sit amet ligula maximus, a imperdiet ipsum rutrum. Donec pretium eu quam ut ultricies. Nulla vitae risus porta,
                finibus felis vitae, luctus justo. Pellentesque volutpat, lorem a commodo aliquet, magna ligula volutpat ante, ut viverra eros orci eget erat. Ut vestibulum tristique lorem, eget aliquam leo pulvinar pulvinar.
                m sed justo. Nam sed sem consequat, suscipit leo vel, sodales libero. Vivamus vehicula eu leo at maximus. Nullam ut iaculis quam. Aenean vel fermentum odio. Morbi scelerisque bibendum leo ut interdum.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12  ">
              <h2 class="display-5">Contenido del curso</h2>
              <ul class="list-group  text-white">
                <li class="list-group-item bg-dark">Video 1 :titulo del video</li>
                <li class="list-group-item bg-dark">Tarea 1 :nombre de la tarea</li>
                <li class="list-group-item bg-dark">Video 2 :titulo del video</li>
                <li class="list-group-item bg-dark">Tarea 2 :nombre de la tarea</li>
                <li class="list-group-item bg-dark">Video 3 :titulo del video</li>
                <li class="list-group-item bg-dark">Tarea 3 :nombre de la tarea</li>
              </ul>
            </div>
          </div>
          <br>
          <h2>Cursos relacionados</h2>
          <br>
          <div class="row">

            <div class="col-sm-4">
              <div class="card">
                <img src="../../../images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                  <h5 class="card-title">Modelaje</h5>
                  <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                    aprendizajes que se llevan acabo en el.</p>
                  <button class="boton-cards">Ir al curso</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <img src="../../../images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                  <h5 class="card-title">Modelaje</h5>
                  <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                    aprendizajes que se llevan acabo en el.</p>
                  <button class="boton-cards">Ir al curso</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <img src="../../../images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                  <h5 class="card-title">Modelaje</h5>
                  <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                    aprendizajes que se llevan acabo en el.</p>
                  <button class="boton-cards">Ir al curso</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="card shadow sticky-top">
            <img src="../../../images/logo2.jpg" class="card-img-top " alt="foto">
            <div class="card-body text-white">
              <h5 class="card-title">Patronaje</h5>
              <form class="" action="" method="post">
              <button type="submit" class="boton-cards" name="adquirir"><?php $esto=checkCurso($_SESSION['id_usuario'],$_SESSION['idpagina']); echo $esto; ?></button>
              </form>
              <br><br>
              <p class="card-text">Este curso contiene :</p>

              <ul class="list-group text-dark">
                <li class="list-group-item">4,5 horas de videos</li>
                <li class="list-group-item">5 videos</li>
                <li class="list-group-item">Acceso de por vida</li>
                <li class="list-group-item">Certificado de finalización</li>
              </ul>


            </div>
          </div>
        </div>


      </div>

    </div>
    <div class="botomito" style="background-color: black; color:rgb(97, 96, 96); text-align: center;">
      &copy;2020-2021 TFG DESARROLLO DE
      APLICACIONES
      WEB todos los derechos reservados
      <div class="rrss">
        <a class="btn btn-block btn-social btn-twitter">
          <span class="fa fa-twitter"></span> Siguenos en Twitter
        </a>
        <a class="btn btn-block btn-social btn-twitter">
          <span class="fa fa-facebook"></span> Siguenos en Facebook
        </a>
        <a class="btn btn-block btn-social btn-twitter">
          <span class="fa fa-instagram"></span> Siguenos en instagram
        </a>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
