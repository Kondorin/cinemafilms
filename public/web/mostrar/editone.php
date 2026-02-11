<?php

require_once('../../../private/initialize.php');

$id = $_GET['id'];
$res = $_GET['res'];
$campo = $_GET['campo'];

 $subject = find_subject_by_id($id);
if ($res== 1) {
  
  
  if(is_post_request()) {

  // Handle form values sent by new.php

    $array = [
    "1" => "nombre",
    "2" => "genero",
    "3" => "idioma",
    "4" => "duracion",
    "5" => "clasificacion",
    "6" => "funcion",

];

    $subject = [];
  $subject['id'] = $id;
  $subject['campo'] = $_POST['campo'] ?? '';

  //for ($i=1; $i<= 6; $i++) {
  //$campostr =  (string) $array[$i];

  //if ($subject['campo'] ===  $campostr) {

    
    $result = update_subject($subject, $campo);
    redirect_to(url_for('/web/mostrar/show.php?id=' . $id));
  //}
 // }







  $result = update_subject2($subject);
 
 redirect_to(url_for('web/mostrar/show.php?id=' . $id));

} else {
  redirect_to(url_for('/web/mostrar/index.php'));
}
}else{

}

?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<div id="content">

  

  <div class="subject new">
    <h1>Editar pelicula</h1>

    <form action="<?php echo url_for('/web/mostrar/editone.php?id=' . $id . '&res=1&campo=' . $campo); ?>" method="post">
    
      <dl>
        <dt> <?php echo "$campo"; ?> </dt>
        <dd><input type="text" name="campo" value="" /></dd>
      </dl>
    
      
      <div id="operations">
        <input type="submit" value="Agregar" />
      </div>
    </form>

 <div menu = "attributes">.
  <br><br><br>
      <dl>
        <dt>Nombre</dt>
        <dd><?php echo h($subject['nombre']); ?></dd>
      </dl>
      <dl>
        <dt>Genero</dt>
        <dd><?php echo h($subject['genero']); ?></dd>
      </dl>
      <dl>
        <dt>Idioma</dt>
        <dd><?php echo h($subject['idioma']); ?></dd>
      </dl>
        <dl>
            <dt>Duracion</dt>
            <dd><?php echo h($subject['duracion']); ?></dd>
        </dl>
        <dl>
            <dt>Clasificacion</dt>
            <dd><?php echo h($subject['clasificacion']); ?></dd>
        </dl>
        <dl>
            <dt>Hora Funcion</dt>
            <dd><?php echo h($subject['funcion']); ?></dd>
        </dl>


  </div>
  </div>

</div>

<?php include(SHARED_PATH . '/web_footer.php'); ?>