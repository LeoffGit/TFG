<?php
include '../headers/header.html';
include '../../PHP/libreria.php';
?>
<body>
    <br>
    <!-- perfil del alumno -->
    <div class="row">
        <div class="col-sm-5">&nbsp</div>
        <div class="col-sm-2">
            <img src="../../images/fotosProfesores/uno.png" class="card-img-top" alt="foto">
          <div class="card-body">
            <h5 class="card-title">Hola pepito </h5>
          </div>
        </div>
        </div>
        <div class="col-sm-5">&nbsp</div>
       
    
    <br><hr><br>
    
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
               
             <div class="col-md-2">&nbsp</div>
            
           
        
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

    
</body>