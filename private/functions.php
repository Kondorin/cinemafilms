<?php

function validate_campos($peliculas, $archivo, $ruta){

 $len = strlen($peliculas['genero']);

 
 if (empty($peliculas['nombre'])) {
 echo  "<script type=\"text/javascript\"> 
  
alert('Necesita ingresar un valor en el campo Nombre'); 
</script>";
 }else if (empty($peliculas['genero'])) {
    echo  "<script type=\"text/javascript\"> 
alert('Necesita ingresar un valor numerico en el campo Genero'); 
</script>";
  }else if (empty($peliculas['idioma'])) {
    echo  "<script type=\"text/javascript\"> 
alert('Necesita ingresar un valor numerico en el campo Idioma'); 
</script>";
  }else if (empty($peliculas['duracion'])) {
    echo  "<script type=\"text/javascript\"> 
alert('Necesita ingresar un valor numerico en el campo Duracion'); 
</script>";
  }else if (empty($peliculas['clasificacion'])) {
    echo  "<script type=\"text/javascript\"> 
alert('Necesita ingresar un valor numerico en el campo Clasificacion'); 
</script>";
  }else if (empty($peliculas['funcion'])) {
    echo  "<script type=\"text/javascript\"> 
alert('Necesita ingresar un valor numerico en el campo Hora de funcion'); 
</script>";
  }else if($len<=3){

    echo  "<script type=\"text/javascript\"> 
alert('Ingrese una palabra mayor a 3 digitos en el campo Genero'); 
</script>";

  }else if (is_numeric($peliculas['clasificacion'])) {
    echo  "<script type=\"text/javascript\"> 
alert('Solo se aceptan letras en el campo clasificacion'); 
</script>";
  }else if(!has_unique_page_menu_name($peliculas['nombre'])){
     echo  "<script type=\"text/javascript\"> 
alert('Ese nombre ya existe en la base de datos'); 
</script>";

  }else{
    session_start();
    $_SESSION['campos'] = serialize($peliculas);
    move_uploaded_file($archivo, $ruta);
     header('Location: ../agregar/create.php');
  }
}

function sesion($a){
  if ($a==0) {
    header('Location: ../web/cerrar_session.php');
  }else if($a==1){
    header('Location: ../web/validar.php');
  }
}

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}


function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}


?>
