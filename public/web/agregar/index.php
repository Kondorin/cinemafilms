<?php

require_once('../../../private/initialize.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
if ($id==1) {
  if (is_post_request()) {
    $peliculas['nombre'] = $_POST['nombre'];
    $peliculas['genero'] = $_POST['genero'];
    $peliculas['nombre'] = $_POST['nombre'];
    $peliculas['idioma'] = $_POST['idioma'];
    $peliculas['duracion'] = $_POST['duracion'];
    $peliculas['clasificacion'] = $_POST['clasificacion'];
    $peliculas['funcion'] = $_POST['funcion'];
    $nombreimg = $_FILES['imagen']['name'];//obtiene el nombre
  $archivo = $_FILES['imagen']['tmp_name'];//contiene el archivo

  $ruta =  "../images/" . $nombreimg;
  $peliculas['imagen'] = $ruta;
  //move_uploaded_file($archivo, $ruta);
    
    validate_campos($peliculas, $archivo, $ruta);
  }else{
    redirect_to(url_for('/web/agregar/index.php'));
  }
}

?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<div id="content">

  

  <div class="subject new">
    <h1>Agregar pelicula</h1>

    <form action="<?php echo url_for('/web/agregar/index.php?id=1'); ?>" method="post" enctype="multipart/form-data">
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
      <dl>
        <dt>Imagen</dt>        
          <dd><input type="file" name="imagen" value="" /></dd>          
      </dl>
      
      <div id="operations">
        <input type="submit" value="Agregar" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/web_footer.php'); ?>