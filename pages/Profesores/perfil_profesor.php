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

          <div class="row" id="rowProfesor">
                <?php
                //session_start();
                $_SESSION ['id_usuario']=10;
                $sesion_idUsuario=$_SESSION ['id_usuario']; 
                $result = cursosProfesor($sesion_idUsuario);
                if ($result != ""){
                    while($fila=mysqli_fetch_row($result)){
                        $query = "select nombre, foto, descripcion from curso where Profesor_Usuarios_idUsuarios = $sesion_idUsuario";
                        ?>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="centrarImagen">
                                        <h5 class="card-title"><?php echo $fila[0] ?></h5>
                                        <?php
                                          echo "<img src=../../images/fotosProfesores/.$fila[1].?>png <?php alt='".$fila[0]."' class='card-img-top' />"
                                        ?>
                                        <br><br>
                                        <h5 class="card-text"><?php echo $fila[2]; ?></h5>
                                        <br><p class="card-text">

                                        </p><br>
                                    </div>
                                    <button class="boton-cards"><?php echo "<a href='cursos.php?nombre='".$fila[0]."'>Ir al curso</a>" ?></button>
                    
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                }
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

                
            </div>
        </div>
    </body>
    <br><br><br><br><br><br><br><br><br><br>

    <?php include '../../pages/footer.html';