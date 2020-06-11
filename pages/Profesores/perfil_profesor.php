
<body>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">&nbsp</div>
            <div class="col-md-8">

                <h3>Tus cursos</h3>
                <?php

                $conexion = mysqli_connect('localhost', 'root', '', 'academiatfg');
                mysqli_set_charset($conexion, 'utf-8');
                $consulta = "select nombre from curso";

                $resultado=mysqli_query($conexion,$consulta);

                            while($fila=mysqli_fetch_row($resultado)){
                                ?>
                                <div class="row">
                                <div class="col-md-4">
                                <div class="card">
                                <div class="card-body">
                                <?php

                                ?><h5 class="card-title"><?php echo $fila[0]; ?></h5>

                                    </div>
                                    </div>
                                    </div>
                </div>


                               <?php

                            }

                mysqli_close($conexion);
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
