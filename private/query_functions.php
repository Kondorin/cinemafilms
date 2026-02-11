<?php

function find_all_subjects(){

	global $db;

	$sql = "SELECT * FROM peliculas ";
	//$sql .= "ORDER BY position ASC";
	//echo $sql;
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}

function find_subject_by_id($id){
	global $db;

	$sql = "SELECT * FROM peliculas ";
	$sql .= "WHERE id='" . $id . "'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$subject = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $subject; //return an assoc. array

}

function has_unique_page_menu_name($nombre) {
    global $db;
    $sql = "SELECT * FROM peliculas ";
    $sql .= "WHERE nombre='" . $nombre . "' ";
    $page_set = mysqli_query($db, $sql);
    $page_count = mysqli_num_rows($page_set);
    mysqli_free_result($page_set);
    if ($page_count === 0) {
      return true;
    }
  }


function find_all_pages(){
	global $db;

	$sql = "SELECT * FROM pages ";
	$sql .= "ORDER BY subject_id ASC, position ASC";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}

function insert_subject($peliculas){
	global $db;

  $sql = "INSERT INTO peliculas ";
  $sql .= "(nombre, genero, idioma, duracion, clasificacion, funcion, imagen) ";
  $sql .= "VALUES (";
  $sql .= "'" . $peliculas['nombre'] . "',";
  $sql .= "'" . $peliculas['genero'] . "',";
  $sql .= "'" . $peliculas['idioma'] . "',";
  $sql .= "'" . $peliculas['duracion'] . "',";
  $sql .= "'" . $peliculas['clasificacion'] . "',";
  $sql .= "'" . $peliculas['funcion'] . "',";
  $sql .= "'" . $peliculas['imagen'] . "'";
  $sql .= ")";

  $result = mysqli_query($db, $sql);
  //for INSERT statements, $result is true/false
  if ($result) {
  	return true;
  	
  }else{
  	// INSERT failed
  	echo mysqli_error($db);
  	db_disconnect($db);
    	exit;
  }

}

function update_subject($subject, $campo) {

	global $db;


 $sql = "UPDATE peliculas SET " .$campo ."='" . $subject['campo'] . "'" . " WHERE id='" .$subject['id'] ."'" ."LIMIT 1";





    

$result = mysqli_query($db, $sql);
//for UPDATE statements, $result is true/false

if ($result) {
  return true;
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}

}



function update_subject2($subject) {

  global $db;


$sql = "UPDATE peliculas SET ";
$sql .= "nombre='" . $subject['nombre'] . "',";
$sql .= "genero='" . $subject['genero'] . "', ";
$sql .= "idioma='" . $subject['idioma'] . "',";
$sql .= "duracion='" . $subject['duracion'] . "', ";
$sql .= "clasificacion='" . $subject['clasificacion'] . "',";
$sql .= "funcion='" . $subject['funcion'] . "',";
$sql .= "imagen='" . $subject['imagen'] . "' ";
$sql .= "WHERE id='" . $subject['id'] . "' ";
$sql .= "LIMIT 1";

$result = mysqli_query($db, $sql);
//for UPDATE statements, $result is true/false

if ($result) {
  return true;
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}

}

function delete_subject($id){
global $db;

$sql = "DELETE FROM peliculas ";
  $sql .= "WHERE id= '" . $id . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);

  //for DELETE statements, $result is true/false

  if ($result) {
      redirect_to(url_for('/web/mostrar/index.php'));
    }else{
      //DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;

    } 

}

?>