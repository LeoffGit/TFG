<?php
    function saludarProfesor(){
        $conexion = mysqli_connect('localhost', 'root', 'metrica123', 'academia5');
        mysqli_set_charset($conexion, 'utf-8');
		$consulta = "select * from curso";
		$resultado=mysqli_query($conexion,$consulta);
		echo "<table>";
		while($fila=mysqli_fetch_row($resultado)){
			for ($i=0; $i<sizeof($fila); $i++) {
				echo "<td>".$fila[$i]."'>".$fila[$i]."</td>";
			}
		}
		echo "</table>";
		mysqli_close($conexion);
	}

    function verCursosProfesor (){
        
		mysqli_close($conexion);
    }
    
    function verComentarios(){
        
		mysqli_close($conexion);
    }

?>



