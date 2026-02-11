<?php
session_start();
var_dump($_SESSION['campos']);
require_once('../../../private/initialize.php');


  // Handle form values sent by new.php
	
$peliculas = unserialize($_SESSION['campos']);

  //$nombreimg = $_FILES['imagen']['name'];//obtiene el nombre
  //$archivo = $_FILES['imagen']['tmp_name'];//contiene el archivo

  //$ruta =  "../images/" . $nombreimg;
  //$peliculas['imagen'] = $ruta;
  //move_uploaded_file($archivo, $ruta);

  

  $result = insert_subject($peliculas);
 $new_id = mysqli_insert_id($db);
 redirect_to(url_for('web/mostrar/show.php?id=' . $new_id));


?>