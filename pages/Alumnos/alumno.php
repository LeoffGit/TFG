<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
    <link rel="stylesheet" type="text/css" href="fonts/Leixo.ttf">

    <title>TFG</title>

</head>

<body>
    <div class="container-fliud">
        <div class="row" id="barra">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-2"><img src="images/Logo.png" id="icono" /></div>
            <div class="col-md-2" style="margin-top: 2%;"><span id="titulo">Learning Sewing Desing</span></div>
            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-md-2">&nbsp</div>
        </div>
        <div class="container-fluid">
            <h1 class="display-4">Mis cursos</h1>
            <div class="row">
                <div class="col-sm-1">&nbsp;</div>
        <?php
            $conexion = mysqli_connect('localhost', 'root', '', 'academiatfg');
            mysqli_set_charset($conexion, 'utf-8');
            $consulta="select nombre from curso c, cursos_adquiridos cu where c.idcurso = cu.curso_idcurso;";
            $resultado=mysqli_query($conexion,$consulta);
            while($fila=mysqli_fetch_row($resultado)){?>
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/logo2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2><?php echo $fila[0]?></h2>
                        <h6>Tu progreso</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: 25%; background-color: rgb(236, 236, 123);color: black;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                25%
                            </div>
                        </div>
                        <a href='paginacurso.html<?php echo $fila[0] ?>'>Seguir viendo</a>
                        <a href="" class="card-link">Inicio</a>
                    </div>
                </div>
            </div>
           <?php }  
            mysqli_close($conexion);
          ?>
        </div>
        

    </div>
    </div>
    
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>