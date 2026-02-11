<?php

 require_once('../../private/initialize.php');
error_reporting(0);
$cod = $_GET['cod'];
if ($cod == 1) {
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
	echo 'Usted no tiene autorizacion';
	echo '<br> <?php $varsesion ?>';
	die();

}
	
}else{

}

 
 ?>


<?php $page_title = 'Inicio'; ?>
<?php include(SHARED_PATH . '/web_header2.php'); ?>
</br>
</br></br>
<img src="images/cine1.jpg" width="50%" height="50%"><img src="images/cine2.jpg" width="50%" height="50%">



<?php include(SHARED_PATH . '/web_footer.php'); ?>
