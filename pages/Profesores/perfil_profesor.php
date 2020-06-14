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
                        <!-- EL NOMBRE DE LA FOTO ES LA MISMA QUE LA DEL CURSO-->
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $fila[0] ?></h5>
                                    <?php echo "<img src=../../images/fotosCursos/".$fila[0].".JPG alt=".$fila[1]." width='100' height='100'>";?>
                                    <p class="card-text" id="centrar"><?php echo $fila[2]; ?></p>
                                    <button class="boton-cards"><?php echo "<a href='cursos.php?nombre=".$fila[0]."'>Ir al curso</a>"; ?></button>
                                </div>
                            </div>
                        </div>
                    <br>
                    <?php 
                    }
                }
                ?>
                    
            </div>
        </div>
    </body>
    <br><br><br><br><br><br><br><br><br><br>

    <?php include '../../pages/footer.html';