<?php

require_once('../../../private/initialize.php');

if (!isset($_GET['id'])) {
	redirect_to(url_for('/web/mostrar/index.php'));
}

$id = $_GET['id'];
$res = $_GET['res'];


$subject = find_subject_by_id($id);


if ($res == "1") {
	
if (is_post_request()) {
	$result = delete_subject($id);
	redirect_to(url_for('/web/mostrar/index.php'));
	$res = "0";

}else{
	$subject = find_subject_by_id($id);
}

}


?>

<?php $page_title = 'Delete Subject'; ?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<div id= "content">


	<div class="subject delete">
		<h1>Borrar Pelicula</h1>

			<p>¿Estás seguro que quieres borrar esta pelicula?</p>
		<h3><?php echo h($subject['nombre']); ?></h3>
		<?php $res = 'true'; ?>
		<form action="<?php echo url_for('/web/mostrar/delete.php?id=' . h(u($id)) . "&res=1"); ?>" method="post">
			
      
     
      <div id="operations">
        <input type="submit" value="Delete Subject" />
      </div>
    </form>
		
		
      </div>
  </div>