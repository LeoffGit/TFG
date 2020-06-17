<?php
require("funcionconection.php");
/*    if($conexion = mysqli_connect('localhost', 'root', 'metrica123','academiatfg')){
        if(isset($_POST['inicio'])) {
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];
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
*/
    function login(){
        $conexion = conexion("academiatfg");
        $email = $_POST['logmail'];
        $contrasena = $_POST['logcontrasena'];
        //$_SESSION['tipouser'] = 0;
        $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email' AND contrasena = '$contrasena'");
        $contar = mysqli_num_rows($query);
        if ($contar != 0){
            $row=mysqli_fetch_array($query);
                if($email == $row['email'] && $contrasena == $row['contrasena']){
                    $_SESSION['email'] = $email;
                    $_SESSION['id_usuario'] = $row['idUsuarios'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $query2 = mysqli_query($conexion,"select * from alumno WHERE Usuarios_idUsuarios = $row[idUsuarios]");
                    $contar2 = mysqli_num_rows($query2);
                        if ($contar2 == 0){
                            $_SESSION['tipouser']=2;
                        }else{
                            $_SESSION['tipouser']=1;
                        }
                    }
            }
            mysqli_close($conexion);
    }

    function logout(){
      session_destroy();
      $_SESSION['tipouser']=0;
    }

    function saludarusuario(){
      $usuario=$_SESSION['nombre'] ;
        echo "Bienvenido $usuario";
    }

    /*las rutas de los header estan en raiz
    al hacer include de la pag da error: cannot redeclare header
    habrua q*/
    function headerito(){
      $documento= $_SERVER['DOCUMENT_ROOT'];
      if (!isset($_SESSION['tipouser'])) {
        $_SESSION['tipouser']=0;
      }
        switch ($_SESSION['tipouser']) {
            case '1':
                include "$documento/TFG/cabeceras/headerAlumno.php";
                break;
            case '2':
                include "$documento/TFG/cabeceras/headerProfesor.php";
                break;
            default:

                include "$documento/TFG/cabeceras/header.php";
           }
    }

    function footer(){
      $documento= $_SERVER['DOCUMENT_ROOT'];
                include "$documento/TFG/Footer/footer.html";

    }

    function pintarprofesor($idprofesor){
        $con = conexion("academiatfg");
        $consulta = "select nombre, especialidad, valoracion, foto, idProfesor from profesor where Usuarios_idUsuarios= $idprofesor";
        $row=mysqli_fetch_row($consulta);
        mysqli_close($con);

        return $row;
    }

    function cursosProfesor($sesion_idUsuario){

        $con = conexion("academiatfg");
        $query = "select nombre, foto, descripcion from curso where Profesor_Usuarios_idUsuarios = $sesion_idUsuario";
        $row = mysqli_query($con,$query);
        mysqli_close($con);

        return $row;
    }

    function arrayalumno($idalumno){

        $con = conexion("academiatfg");
        $consulta = "select  nombre, estudios, id_Estudiante from alumno where Usuarios_idUsuarios= $idalumno";
        $row=mysqli_fetch_row($consulta);
        mysqli_close($con);

        return $row;
    }
    function adquirircurso ($idalumno,$idcurso){
      $con = conexion("academiatfg");
      $query = mysqli_query($con,"insert into cursos_adquiridos VALUES ($idalumno,$idcurso)");
      mysqli_close($con);

    }
    function sesioncurso($variableURI){
      switch ($variableURI) {
        case '/TFG/pages/Cursos/Patronaje/Principal.php':
        $_SESSION['idpagina']=1;
          break;
          case '/TFG/pages/Cursos/Patronaje/videos.php':
          $_SESSION['idpagina']=1;
            break;
          default:
            $_SESSION['idpagina']=0;
            break;
      }
    }
    function checkCurso($idalumno,$idcurso){

      $con = conexion("academiatfg");
      $query = mysqli_query($con,"select * from cursos_adquiridos where Alumno_Usuarios_idUsuarios = $idalumno and curso_idcurso = $idcurso");
      if($contar = mysqli_num_rows($query)){
        mysqli_close($con);
        return "Ya tienes el curso";
      }
      else {
        mysqli_close($con);
        return "Adquirir Curso";
      }
    }
      function linkvid($idalumno,$idcurso){
        $con = conexion("academiatfg");
        $query = mysqli_query($con,"select * from cursos_adquiridos where Alumno_Usuarios_idUsuarios = $idalumno and curso_idcurso = $idcurso");
        if($contar = mysqli_num_rows($query)){
          mysqli_close($con);
          echo "<button class='boton-cards' name='Comenzar Curso'><a href='videos.php'>Comenzar Curso</a></button>";
        }
      }

?>
