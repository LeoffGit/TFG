<?php
include 'menu_logeado.html';
?>
<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-8">
                
                <h3>Tus cursos</h3>
                <?php
                //session_start();
                $_SESSION ['id_usuario']=10;
                $sesion_idUsuario=$_SESSION ['id_usuario'];
                if ( isset ($_SESSION['id_usuario'])){
                    $fila=0;
                    $conexion = mysqli_connect('localhost', 'root', 'metrica123', 'academiatfg');
                    mysqli_set_charset($conexion, 'utf-8');
                    $consulta = "select  nombre, especialidad, valoracion, foto from profesor where Usuarios_idUsuarios= $sesion_idUsuario";
	               if ($resultado=mysqli_query($conexion, $consulta)){
                       
                            while($fila=mysqli_fetch_row($resultado)){
                                foreach($fila as $valor){
                                    
                                ?>
                                <div class="row">
                                <div class="col-md-4">
                                <div class="card">
                                <div class="card-body">
                                <?php
                                   
                                ?><h5 class="card-title"><?php echo $valor ?></h5>
                                    
                                     <?php  } ?>
                       
                                    </div>
                                    </div>
                                    </div>
                                </div>
                               <?php  
                            
                       mysqli_close($conexion);
                
                }
                       
                }
                }else
                    echo " ";
                
                ?>
               </div>
             <div class="col-md-2">&nbsp</div>
            </div>
           
        
        <div class="row">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-10">
                <h3>Comentarios</h3>
                <br><br><br><br><br>
                <!-- incluir las funciones de las librerias-->
            </div>
            <div class="col-md-1">&nbsp</div>
        </div>
        <div class="row">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-10">
                <h3>Ver toros los cursos</h3>
                <br><br><br><br><br>
                <!-- incluir las funciones de las librerias-->
            </div>
            <div class="col-md-1">&nbsp</div>
        </div>

    </div>
</body>