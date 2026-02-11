<?php require_once('../../../private/initialize.php');


 ?>



<?php
  
  $subject_set = find_all_subjects();

?>

<?php $page_title = 'Subjects'; ?>
<?php require_once('../../../private/initialize.php');?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<?php $subject_set = find_all_subjects(); ?>


<div id="content">
  <div class="subjects listing">

<div class="caja6"> </br></br><font color="white" size="4">MISION</font>
	<div class="caja7">
		</br><font size="6" color="black"><p align="center">"Somos una empresa de cine ficticia comprometida </p>
		<p align="center">a garantizar el entretenimiento de los clientes</p><p align="center"> con las peliculas más recientes y la mejor calidad"</p></font>
	</div>

</div>

<div class="caja6"> </br></br><font color="white" size="4">VISION</font>
	<div class="caja7">
		</br><font size="6" color="black"><p align="center">"Extender nuestra empresa a nivel nacional mejorando la calidad </p>
		<p align="center">tanto del servicio como la calidad de los cines</p><p align="center"> con mayores comodidades que satisfagan a nuestros clientes"</p></font>
	</div>

</div>


</div>
 
</div>



<?php include(SHARED_PATH . '/web_footer.php'); ?>