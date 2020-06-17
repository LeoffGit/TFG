<?php
session_start();
include "PHP/libreria.php";

if(isset($_POST['logmail'])){
  login();
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
   <link rel="stylesheet" href="css/font-awesome.css">
   <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
   <link rel="stylesheet" href="css/master.css">

   <title>TFG</title>

 </head>
    <body>
      <?php headerito(); ?>

        <div class="row" id="contenido">
            <div class="col-sm-3">
                <div class="card">
                    <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Patronaje</h5>
                        <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                        <button class="boton-cards">Ir al curso</button>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Diseño de moda</h5>
                        <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                        <button class="boton-cards">Ir al curso</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Corte y Confeccion</h5>
                        <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                        <button class="boton-cards">Ir al curso</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                    <div class="card-body">
                        <h5 class="card-title">Modelaje</h5>
                        <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                        <button class="boton-cards">Ir al curso</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php footer(); ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
