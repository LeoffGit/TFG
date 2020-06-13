<?php
    if($conexion = mysqli_connect('localhost', 'root', 'metrica123','academiatfg')){
        if(isset($_GET['inicio'])) {
            $email = $_GET['email'];
            $contrasena = $_GET['contrasena'];
            $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email' AND contrasena = '$contrasena'");
            $contar = mysqli_num_rows($query);
            if ($contar != 0) {
                while($row=mysqli_fetch_array($query)) {
                    if($email == $row['email'] && $contrasena == $row['contrasena']){
                        $_SESSION['email'] = $email;
                        $_SESSION['id_usuario'] = $row['id_usuario'];
                        $_SESSION['nombre'] = $row['nombre'];
                        echo "<script>window.location.href='prueba.php';</script>";
                    }
                }
            }else { echo "El nombre de usuario y/o contrasena no coinciden"; }

          }
    }else 
        echo "Conexion fallida"; 

    function login($email,$contrasena){
        require("funcionconection.php");
        $con = conexion("academiatfg");
        $email = $_GET['email'];
        $contrasena = $_GET['contrasena'];
        $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email' AND contrasena = '$contrasena'");
        $contar = mysqli_num_rows($query);
        if ($contar != 0){
            $row=mysqli_fetch_array($query);
                if($email == $row['email'] && $contrasena == $row['contrasena']){
                    $_SESSION['email'] = $email;
                    $_SESSION['id_usuario'] = $row['id_usuario'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $query2 = mysqli_query($conexion,"select * from alumnos WHERE Usuarios_idUsuarios = $row[id_usuario]");
                    $contar2 = mysqli_num_rows($query2);
                        if ($contar2 != 0){
                            $_SESSION['tipouser'] = 1;
                            return 1;
                        }else{    
                            $_SESSION['tipouser'] = 2;
                            return 2;
                        }
                    }else
                        return 0;
            }
    }

    function saludarusuario($usuario){
        return $nombre="bienvenido $usuario";
    }

    //las rutas de los header estan en raiz
    function header($tipouser){
        switch (variable) {
            case '1':
                include '../pages/headers/headeralumno.html';
                break;
            case '2':
                include '../headers/headerprofesor.html';
                break;
            default:
            //al hacer include de la pag da error: cannot redeclare hen
                include '../headers/headerNoLogeado.html';
           }    
    }

    function pintarprofesor($idprofesor){
        require("funcionconection.php");
        $con = conexion("academiatfg");
        $consulta = "select  nombre, especialidad, valoracion, foto, idProfesor from profesor where Usuarios_idUsuarios= $idprofesor";
        $row=mysqli_fetch_row($consulta);
        return $row;
    }

    function arrayalumno($idalumno){
        require("funcionconection.php");
        $con = conexion("academiatfg");
        $consulta = "select  nombre, estudios, id_Estudiante from alumno where Usuarios_idUsuarios= $idalumno";
        $row=mysqli_fetch_row($consulta);
        return $row;
    }
?>