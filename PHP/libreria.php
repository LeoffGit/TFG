<?php
if($conexion = mysqli_connect('localhost', 'root', '','academiatfg')){

if(isset($_GET['inicio'])) {

    $email = $_GET['email'];
    $contrasena = $_GET['contrasena'];

    $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email' AND contrasena = '$contrasena'");

    $contar = mysqli_num_rows($query);

    if ($contar != 0) {

        while($row=mysqli_fetch_array($query)) {

            if($email == $row['email'] && $contrasena == $row['contrasena'])

            {

                $_SESSION['email'] = $email;

                $_SESSION['id_usuario'] = $row['id_usuario'];

                $_SESSION['nombre'] = $row['nombre'];

                echo "<script>window.location.href='prueba.php';</script>";

            }

        }

    } else { echo "El nombre de usuario y/o contrasena no coinciden"; }

  }
} else { echo "Conexion fallida"; }

function login($email,$contrasena){
  require("funcionconection.php");
  $con = conexion("academiatfg");
  $email = $_GET['email'];
  $contrasena = $_GET['contrasena'];
  $query = mysqli_query($conexion,"select * from usuarios WHERE email = '$email' AND contrasena = '$contrasena'");
  $contar = mysqli_num_rows($query);
  if ($contar != 0){
    $row=mysqli_fetch_array($query);
          if($email == $row['email'] && $contrasena == $row['contrasena'])
          {
              $_SESSION['email'] = $email;
              $_SESSION['id_usuario'] = $row['id_usuario'];
              $_SESSION['nombre'] = $row['nombre'];
              $query2 = mysqli_query($conexion,"select * from alumnos WHERE Usuarios_idUsuarios =$row['id_usuario']");
              $contar2 = mysqli_num_rows($query2);
              if ($contar2 != 0) {
                $_SESSION['tipouser'] = 1;
                return 1;
              }
              $_SESSION['tipouser'] =2;
              return 2;
          }
  }
  else return 0;
}
function saludarusuario($usuario){
  return $nombre="bienvenido $usuario";
}
function header($tipouser){
  switch (variable) {
    case '1':
      include '../pages/headers/headeralumno.html';
      break;

      case '2':
      include '../pages/headers/headerprofesor.html';

        break;

    default:
      include '../pages/headers/header.html';
      break;
  }
}

?>
