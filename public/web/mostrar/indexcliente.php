<?php require_once('../../../private/initialize.php');


 ?>



<?php
  
  $subject_set = find_all_subjects();

?>

<?php $page_title = 'Subjects'; ?>
<?php require_once('../../../private/initialize.php');?>
<?php include(SHARED_PATH . '/web_header2.php'); ?>

<?php $subject_set = find_all_subjects(); ?>


<div id="content">
  <div class="subjects listing">
    <h1>PELICULAS DISPONIBLES</h1>
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



</div>

     
     <?php  } ?>
      
  

  </div>


</div>



<?php include(SHARED_PATH . '/web_footer.php'); ?>