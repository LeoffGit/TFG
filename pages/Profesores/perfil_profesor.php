<?php
    include '../headers/header.html';
    include '../../PHP/libreria.php';
    
?>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">&nbsp</div>
                <div class="col-sm-2">
                    <h3 class="card-title" id="saludo">Hola pepito</h3>
                    <img src="../../images/fotosProfesores/uno.png" class="card-img-top" alt="foto">
                </div>
                <div class="col-sm-5">&nbsp</div>
           </div>

        <br><hr><br>

        <!--que la imagen se llame de la misma manera que el curso, los enlaces row[$nombreCurso] -->
            <div class="row" id="rowProfesor">
                <?php
                //session_start();
                $_SESSION ['id_usuario']=10;
                $sesion_idUsuario=$_SESSION ['id_usuario']; 
                cursosProfesor($sesion_idUsuario);
                
                ?>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="centrarImagen">
                                <h5 class="card-title">Corte y Confeccion</h5>
                                <img src="../../images/fotosProfesores/uno.png" class="card-img-top" alt="foto">
                                <br><br>
                                <h5 class="card-text">Descripción</h5>
                                <br><p class="card-text">

                                </p><br>
                            </div>
                            <button class="boton-cards">Ir al curso</button>

                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="centrarImagen">
                                <h5 class="card-title">Corte y Confeccion</h5>
                                <img src="../../images/fotosProfesores/uno.png" class="card-img-top" alt="foto">
                                <br><br>
                                <h5 class="card-text">Descripción</h5>
                                <br><p class="card-text">

                                </p><br>
                            </div>
                            <button class="boton-cards">Ir al curso</button>

                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="centrarImagen">
                                <h5 class="card-title">Corte y Confeccion</h5>
                                <img src="../../images/fotosProfesores/uno.png" class="card-img-top" alt="foto">
                                <br><br>
                                <h5 class="card-text">Descripción</h5>
                                <br><p class="card-text">

                                </p><br>
                            </div>
                            <button class="boton-cards">Ir al curso</button>

                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="centrarImagen">
                                <h5 class="card-title">Corte y Confeccion</h5>
                                <img src="../../images/fotosProfesores/uno.png" class="card-img-top" alt="foto">
                                <br><br>
                                <h5 class="card-text">Descripción</h5>
                                <br><p class="card-text">

                                </p><br>
                            </div>
                            <button class="boton-cards">Ir al curso</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
    <br><br><br><br><br><br><br><br><br><br>
    
    <?php include '../../pages/footer.html'; ?>

