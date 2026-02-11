<?php 
session_start();
error_reporting(0);
$var = $_SESSION['usuario'];
//var_dump($_SESSION);
require_once('../../private/initialize.php');

    if(!isset($_SESSION)) 
    { 
         session_start();
        
    } 
//header("Location: /web/mostrar/index.php");

?>

<?php $page_title = 'ingres_field_precision(result, index)'; ?>
<?php include(SHARED_PATH . '/web_header.php'); ?>


<h2><?php echo "Bienvenido $var"; ?></h2>

</br>
</br></br>
<img src="images/cine1.jpg" width="50%" height="50%"><img src="images/cine2.jpg" width="50%" height="50%">

<?php include(SHARED_PATH . '/web_footer.php'); ?>