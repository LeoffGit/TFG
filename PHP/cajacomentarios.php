<?php
session_start();
//if(!isset($_SESSION['id_usuario'])) {
//	header("Location: ../index.php");
//}
$_SESSION['email'] = "pepe@gmail.com";

$_SESSION['id_usuario'] = "1";

$_SESSION['nombre'] = "pepesito";
$_SESSION['curso'] = "1";
?>
<!doctype html>
<html lang="es-ES">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" href="../css/master.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" type="text-css" href="css/bootstrap-social.scss">
</head>

<body>
<?php include "../cabeceras/header.php" ?>
<div id="L">


<h1>SISTEMA DE COMENTARIOS TUNTORIALES <a href="../indexito.php">(SALIR)</a></h1>

<form name="form1" method="post" action="">
  <label for="textarea"></label>
  <center>
    <p>
      <textarea name="comentario" cols="80" rows="5" id="textarea"><?php if(isset($_GET['nombre'])) { ?>@<?php echo $_GET['nombre']; ?><?php } ?> </textarea>
    </p>
    <p>
      <input type="submit" <?php if (isset($_GET['id'])) { ?>name="respuesta" value="respuesta"<?php } else { ?>name="comentar"<?php } ?>value="Comentar">
    </p>
  </center>
</form>

<?php
	include "funcionconection.php";
	$conexion=conexion("academiatfg");
	if(isset($_POST['comentar'])) {
		$query = mysqli_query($conexion,"INSERT INTO comentarios (curso_idcurso,comentario,Usuarios_idUsuarios,fecha) value ('".$_SESSION['curso']."','".$_POST['comentario']."','".$_SESSION['id_usuario']."',NOW())");
		if($query) { header("Refresh:0"); }
	}
?>

<?php
	if(isset($_POST['respuesta'])) {
		$query = mysqli_query($conexion,"INSERT INTO comentarios (curso_idcurso,comentario,respuesta,Usuarios_idUsuarios,fecha) value ('".$_SESSION['curso']."','".$_POST['comentario']."','".$_GET['id']."','".$_SESSION['id_usuario']."',NOW())");
		if($query) { header("Refresh:0"); }
	}
?>

<br>

	<div id="container">
    	<ul id="comments">

        <?php

        $comentarios = mysqli_query($conexion,"SELECT * FROM comentarios WHERE respuesta = 0 ORDER BY idComentarios DESC");
		while($row=mysqli_fetch_array($comentarios)) {
			$usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE idUsuarios = '".$row['Usuarios_idUsuarios']."'");
			$user = mysqli_fetch_array($usuario);
		?>

        	<li class="cmmnt">
            	<div class="avatar">
                <img src="../images/logo2.jpg" height="55" width="55">
                </div>
                <div class="cmmnt-content">
                	<header>
                    <a href="#" class="userlink"><?php echo $user['nombre']; ?></a> - <span class="pubdate"><?php echo $row['fecha']; ?></span>
                    </header>
                    <p>
                    <?php echo $row['comentario']; ?>
                    </p>
                    <span>
											<?php $actual_link = "$_SERVER[REQUEST_URI]"; $usernom=$user['nombre']; $rowid=$row['idComentarios'] ?>
                    <a href="<?php echo "$actual_link?nombre="; echo"$usernom&id=$rowid";?>">
                    Responder
                    </a>
                    </span>
                </div>

                <?php
				$contar = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM comentarios WHERE respuesta = '".$row['idComentarios']."'"));
				if($contar != '0') {

					$respuesta = mysqli_query($conexion,"SELECT * FROM comentarios WHERE respuesta = '".$row['idComentarios']."' ORDER BY idComentarios DESC");
					while($rep=mysqli_fetch_array($respuesta)) {

					$usuario2 = mysqli_query($conexion,"SELECT * FROM usuarios WHERE idUsuarios = '".$rep['idComentarios']."'");
					$user2 = mysqli_fetch_array($usuario2);
				?>

                <ul class="replies">
                	<li class="cmmnt">
                    	<div class="avatar">
												<img src="../images/logo2.jpg" height="55" width="55">
                </div>
                	<div class="cmmnt-content">
                        <header>
                        <a href="#" class="userlink"><?php echo $user2['usuario']; ?></a> - <span class="pubdate"><?php echo $rep['fecha']; ?></span>
                        </header>
                        <p>
                        <?php echo $rep['comentario']; ?>
                        </p>
                    </div>

                    </li>
                </ul>

                <?php } } } ?>
            </li>

        </ul>
    </div>
</div>
</body>
</html>
