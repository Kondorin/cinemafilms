<?php require_once('../../../private/initialize.php');


 ?>



<?php
  
  $subject_set = find_all_subjects();

?>

<?php $page_title = 'Subjects'; ?>
<?php require_once('../../../private/initialize.php');?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<?php $subject_set = find_all_subjects(); ?>



 
<div class="caja4">
	<div class="caja5">
		</br><font size="5" color="black"><p align="center">"Estudiante de la universidad de sonora </p>
		<p align="center">realizando un proyecto de una pagina web dinamica acerca de una empresa ficticia</p><p align="center"> la cual tenga la facilidad para aplicar el conocimiento"</p><p align="center"> adquirido en la asignatura de sistemas de informacion basados en web"</p><p align="center"> y utilizar las funciones basicas de base de datos conocidas como 'CRUD' "</p></font>
	</div>

</div>




<?php include(SHARED_PATH . '/web_footer.php'); ?>