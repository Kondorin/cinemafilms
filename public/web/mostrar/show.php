<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0


$subject = find_subject_by_id($id);

?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<div id="content">

    <h1> Pelicula Agregada/Editada: </h1>

    <div class = "attributes">
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
         <dl>
            <dt>Imagen</dt>
            <dd><img src= "<?php echo h($subject['imagen']) ?>" width="100" height="160"></dd>
        </dl>
        


  </div>

</div>
