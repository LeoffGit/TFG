<?php
include '../headers/header.html';

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
    
    <!--que la imagen se llame de la misma manera que el curso -->
    <div class="row">
        <div class="col-sm-1">&nbsp</div> 
        <div class="col-sm-3">
            <h3 class="card-title">Tus cursos</h3>
            <div class="card">
                <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Corte y Confeccion</h5>
                    <p class="card-text"></p>
                    <button class="boton-cards">Ir al curso</button>
                </div>
            </div>
        </div>
         
        <div class="col-sm-3">
            <h3 class="card-title">Tus cursos</h3>
            <div class="card">
                <img src="images/logo2.jpg" class="card-img-top" alt="foto">
                <div class="card-body">
                    <h5 class="card-title">Corte y Confeccion</h5>
                    <p class="card-text"></p>
                    <button class="boton-cards">Ir al curso</button>
                </div>
            </div>
        </div>
        
    </div>
    
                
                <?php
                //session_start();
                $_SESSION ['id_usuario']=10;
                $sesion_idUsuario=$_SESSION ['id_usuario'];
                if ( isset ($_SESSION['id_usuario'])){
                   ?>
                        <div class="row">
                            <div class="col-sm-1">&nbsp</div> 
                                <div class="col-md-4">
                                <div class="card">
                                <div class="card-body">
                                <?php
                                   
                                ?><h5 class="card-title"></h5>
                                 <?php  } ?>
                       
                                    </div>
                                    </div>
                                    </div>
                                </div>
               
             <div class="col-md-2">&nbsp</div>
        </div>
</body>