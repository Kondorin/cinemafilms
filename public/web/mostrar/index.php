<?php require_once('../../../private/initialize.php');
 


 ?>



<?php
  
  $subject_set = find_all_subjects();

?>

<?php $page_title = 'Subjects'; ?>
<?php require_once('../../../private/initialize.php');?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<?php $subject_set = find_all_subjects(); ?>

<div class="caja1">

<form action="<?php echo url_for('/web/agregar/index.php?id=0'); ?>" method="post">
<dd><b>AGREGAR OTRA PELICULA</b><input type="image" src="../images/add.png" width="25" height="25"></dd>
</form>
</div>


  <div class="subjects listing">
    <h1 align="center">PELICULAS DISPONIBLES</h1>
<div class="caja3">
      <?php $result = mysqli_num_rows($subject_set);?>
      <?php $resultstring = intval($result); ?>

     
      

        <?php for($i=1; $i<$resultstring+1; $i++){?>
     <?php  $nombre = "box " . $i; ?>
     <?php  $editar = "editar" . $i; ?>
     <?php  $borrar = "borrar" . $i; ?>
     <?php $subject = mysqli_fetch_assoc($subject_set);  ?>
     <div class="caja"><img src= "<?php echo h($subject['imagen']) ?>" width="368px" height="350px">
      

</div>

<div class="caja2">
  <?php echo "<b><font size=3 color='navy'>Nombre</b></font>: ", h($subject['nombre']) . "<br><br>" .  "<b><font size=3 color='navy'>Genero</b></font>: ", h($subject['genero']) ."<br><br>" . "<b><font size=3 color='navy'>Idioma</b></font>: ", h($subject['idioma']) . "<br><br>" . "<b><font size=3 color='navy'>Duracion</b></font>: ", h($subject['duracion']) . "<br><br>" . "<b><font size=3 color='navy'>Clasificacion</b></font>: ", h($subject['clasificacion']) . "<br><br>" . "<b><font size=3 color='navy'>Hora funcion</b></font>: ", h($subject['funcion']) . "</font>";?>

  <br/><br/>

<form action="<?php echo url_for('/web/mostrar/edit.php?id=' . h($subject['Id']) . "&res=0"); ?>" method="post">
<dd><input type="image" src="../images/editar.png" width="25" height="25"></dd>
</form> 
<br/><br/>

<form action="<?php echo url_for('/web/mostrar/delete.php?id=' . h(u($subject['Id'])) . "&res=0"); ?>" method="post">
<dd><input type="image" src="../images/borrar.jpg" width="25" height="25"></dd>
</form>
<br/><br/>
<form action="<?php echo url_for('/web/agregar/index.php?id=0'); ?>" method="post">
<dd><input type="image" src="../images/add.png" width="25" height="25"></dd>
</form>
<a href="<?php echo url_for('/web/agregar/index.php?id=0'); ?>"></a>
</div>

     
     <?php  } ?>
      
  

  </div>


</div>
 



<?php include(SHARED_PATH . '/web_footer.php'); ?>