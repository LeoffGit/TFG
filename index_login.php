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
    <style>
        @font-face {
            font-family: Leixo;
            src: url(fonts/Leixo.ttf);
        }

        body {
            background: rgb(236, 236, 123);
        }

        #barra {
            background-color: black;
            height: 110px;
        }

        #icono {
            width: 90%;
            height: 140%;
            margin-left: -150px;
            margin-bottom: -120px;
        }

        #titulo {
            margin-bottom: 2%;
            margin-left: -50%;
            color: white;
            font-size: 170%;
            font-family: Leixo;
        }

        .fixed-bottom {
            knob background: rgba(0, 0, 0, 1);
            background: -moz-linear-gradient(left, rgba(0, 0, 0, 1) 0%, rgba(212, 186, 82, 1) 29%, rgba(240, 218, 105, 1) 54%, rgba(236, 236, 123, 1) 76%, rgba(235, 239, 123, 1) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0, 0, 0, 1)), color-stop(29%, rgba(212, 186, 82, 1)), color-stop(54%, rgba(240, 218, 105, 1)), color-stop(76%, rgba(236, 236, 123, 1)), color-stop(100%, rgba(235, 239, 123, 1)));
            background: -webkit-linear-gradient(left, rgba(0, 0, 0, 1) 0%, rgba(212, 186, 82, 1) 29%, rgba(240, 218, 105, 1) 54%, rgba(236, 236, 123, 1) 76%, rgba(235, 239, 123, 1) 100%);
            background: -o-linear-gradient(left, rgba(0, 0, 0, 1) 0%, rgba(212, 186, 82, 1) 29%, rgba(240, 218, 105, 1) 54%, rgba(236, 236, 123, 1) 76%, rgba(235, 239, 123, 1) 100%);
            background: -ms-linear-gradient(left, rgba(0, 0, 0, 1) 0%, rgba(212, 186, 82, 1) 29%, rgba(240, 218, 105, 1) 54%, rgba(236, 236, 123, 1) 76%, rgba(235, 239, 123, 1) 100%);
            background: linear-gradient(to right, rgba(0, 0, 0, 1) 0%, rgba(212, 186, 82, 1) 29%, rgba(240, 218, 105, 1) 54%, rgba(236, 236, 123, 1) 76%, rgba(235, 239, 123, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ebef7b', GradientType=1);

        }

        #boton {
            border-radius: 5.5px;
            margin-top: 1.5%;
            width: 120px;
            height: 35px;
            color: white;
            background-color: black;
            border-color: rgb(236, 236, 123);
        }

        .card {
            margin-top: 6%;
            width: 18rem;
            background-color: black;
            color: white;
        }

        .boton-cards {
            border-radius: 5.5px;
            width: 200px;
            height: 60px;
            color: black;
            background-color: rgb(236, 236, 123);
            border-color: black;
            font-size: 20px;
        }

        .rrss a {
            display: inline;
        }

        .modal-content {
            color: black;
            background-color: rgb(236, 236, 123);
            border-color: black;
            font-size: 20px;
        }

        @media (max-width: 1934px) {
            #titulo {
                font-size: 170%;
            }
        }

        @media (max-width: 1592px) {
            #titulo {
                font-size: 169%;
            }
        }

        @media (max-width: 1582px) {
            #titulo {
                font-size: 168%;
            }
        }

        @media (max-width: 1575px) {
            #titulo {
                font-size: 167%;
            }
        }

        @media (max-width: 1565px) {
            #titulo {
                font-size: 166%;
            }
        }

        @media (max-width: 1558px) {
            #titulo {
                font-size: 165%;
            }
        }

        @media (max-width: 1549px) and (min-width: 999px) {
            #titulo {
                font-size: 100%;
            }
        }

        @media (max-width: 998px) and (min-width: 987px) {
            #titulo {
                font-size: 98%;
            }

            #icono {
                width: 90%;
                height: 140%;
                margin-left: -110px;
                margin-bottom: -120px;
            }
        }

        @media (max-width: 987px) and (min-width: 981px) {
            #titulo {
                font-size: 66%;
            }
            #icono {
                width: 90%;
                height: 140%;
                margin-left: -110px;
                margin-bottom: -120px;
            }

        }
        @media (max-width: 980px) and (min-width: 710px) {
            #titulo {
                font-size: 65%;
            }
            #icono {
                width: 90%;
                height: 140%;
                margin-left: -110px;
                margin-bottom: -120px;
            }

        }

        @media (max-width: 710px) and (min-width: 691px) {
            #titulo {
                font-size: 65%;
            }

            #icono {
                width: 500%;
                height: 60%;
                margin-left: -97px;
                margin-bottom: -120px;
            }
        }

        @media (max-width: 700px) and (min-width: 691px) {
            #titulo {
                font-size: 64%;
            }

            #icono {
                width: 500%;
                height: 60%;
                margin-left: -97px;
                margin-bottom: -120px;
            }
        }

        @media (max-width: 693px) and (min-width: 576px) {
            #titulo {
                font-size: 50%;
            }
        }

        @media(max-width: 690px) and (min-width: 577px) {
            #icono {
                width: 500%;
                height: 100%;
                margin-left: 80px;
                margin-bottom: -120px;
            }
        }
        @media(max-width: 688px){
            #icono {
                width: 392px;
                height: 100%;
                margin-left: -84px;
                margin-bottom: -120px;
            }
        }

        @media (max-width: 629px) and (min-width: 577px) {
            #icono {
                width: 500%;
                height: 97%;
                margin-left: -60px;
                margin-bottom: -120px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fliud">
        <div class="row" id="barra">
            <div class="col-md-1 col-sm-1 col-lg-1">&nbsp</div>
            <div class="col-md-2 col-sm-2 col-lg-2"><img src="images/Logo.png" id="icono" /></div>
            <div class="col-md-2 col-sm-2 col-lg-2" style="margin-top: 2%;"><span id="titulo">Lerning Sewing
                    Desing</span></div>
            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">
            </div>
            <div class="col-md-2  col-sm-2 col-lg-2">&nbsp</div>
            <button type="button" id="boton" data-toggle="modal" data-target="#exampleModal"
                data-whatever="@mdo">Inicio/Registro</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Bienvenido</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Usuario:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Contraseña:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="boton" data-dismiss="modal">Registro</button>
                            <button type="button" id="boton">Iniciar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="contenido">
            <div class="col-md-1 col-sm-1 col-lg-1">&nbsp;</div>
            <div class="card">
                <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Patronaje</h5>
                    <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                    <button class="boton-cards">Ir al curso</button>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-lg-1">&nbsp;</div>
            <div class="card">
                <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Diseño de moda</h5>
                    <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                    <button class="boton-cards">Ir al curso</button>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-lg-1">&nbsp;</div>
            <div class="card">
                <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Corte y Confeccion</h5>
                    <p class="card-text">Aqui iria una breve explicacion de lo que trata el curso y de los contenidos y
                        aprendizajes que se llevan acabo en el.</p>
                    <button class="boton-cards">Ir al curso</button>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-lg-1">&nbsp;</div>
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

        <div class="fixed-bottom" style="background-color: black; color:rgb(97, 96, 96); text-align: center;">
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
    <?php
    if($conexion = mysqli_connect('localhost', 'root', '','academia5')){
        
    if(isset($_GET['inicio'])) {
    
        $email = $_GET['email'];
        $contrasena = $_GET['contrasena'];
        
        $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email' AND contrasena = '$contrasena'");
        
        $contar = mysqli_num_rows($query);
        
        if ($contar != 0) {
        
            while($row=mysqli_fetch_array($query)) {
            
                if($email == $row['email'] && $contrasena == $row['contrasena']) 
                
                {
                
                    $_SESSION['email'] = $email;
                    
                    $_SESSION['id_usuario'] = $row['id_usuario'];
                    
                    $_SESSION['nombre'] = $row['nombre'];
                    
                    echo "<script>window.location.href='prueba.php';</script>";
                    
                }
                
            } 
            
        } else { echo "El nombre de usuario y/o contrasena no coinciden"; }
        
      }
    } else { echo "Conexion fallida"; }
    ?>

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