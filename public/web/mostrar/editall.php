<?php

require_once('../../../private/initialize.php');
$id = $_GET['id'];
$res = $_GET['res'];

$subject = find_subject_by_id($id);
if ($res== 1) {
  
  if(is_post_request()) {

  // Handle form values sent by new.php
  
  $subject = [];
  $subject['id'] = $id;
  $subject['nombre'] = $_POST['nombre'] ?? '';
  $subject['genero'] = $_POST['genero'] ?? '';
  $subject['idioma'] = $_POST['idioma'] ?? '';
  $subject['duracion'] = $_POST['duracion'] ?? '';
  $subject['clasificacion'] = $_POST['clasificacion'] ?? '';
  $subject['funcion'] = $_POST['funcion'] ?? '';

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

    <form action="<?php echo url_for('/web/mostrar/editall.php?id=' . $id . '&res=1'); ?>" method="post">
    
      <dl>
        <dt>Nombre</dt>
        <dd><input type="text" name="nombre" value="" /></dd>
      </dl>
      <dl>
        <dt>Genero</dt>        
          <dd><input type="text" name="genero" value="" /></dd>          
      </dl>
        <dl>
        <dt>Idioma</dt>        
          <dd><input type="text" name="idioma" value="" /></dd>          
      </dl>
        <dl>
        <dt>Duracion</dt>        
          <dd><input type="text" name="duracion" value="" /></dd>          
      </dl> 
        <dl>
        <dt>Clasificacion</dt>        
          <dd><input type="text" name="clasificacion" value="" /></dd>          
      </dl>
        <dl>
        <dt>Hora de funcion</dt>        
          <dd><input type="text" name="funcion" value="" /></dd>          
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