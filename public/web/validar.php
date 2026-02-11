<?php
include_once('../../private/initialize.php');


$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//conectar a la base de datos
$conexion= mysqli_connect("localhost","root","","cinemafilms");
$consulta= "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);
$resultado2 = mysqli_fetch_assoc($resultado);




if($resultado2['usuario'] != $usuario or $resultado2['clave'] != $clave){
	
	$_SESSION['fallo_login'] = 'fallo inicio de sesion, usuario o contraseña incorrectos';
	redirect_to(url_for('/web/index.php?' . 'cod=0'));



}else{
	session_start(); 
     $_SESSION['usuario'] = $resultado2['usuario']; 
     $_SESSION['estado'] = 'Autenticado';
	//redirect_to(url_for('/web/indexvalidado.php')); 
    header("Location: indexvalidado.php");
     //echo "<a href='indexvalidado.php'></a>";
	
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>