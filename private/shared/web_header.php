<?php
  if(!isset($page_title)) { $page_title = 'web Area'; }
  
?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/web.css'); ?>" />
  </head>

  <body style ="background-color: white">
    <header>
    </br>
      <h1>CINEMA FILMS</h1>
    </header>

    <div class="navbar">
  <a href="<?php echo url_for('/web/indexvalidado.php'); ?>">Inicio</a>
  <a href="<?php echo url_for('/web/nosotros/index.php?1'); ?>">Acerca de nosotros</a>
  <a href="<?php echo url_for('/web/misvis/index.php?2'); ?>">Mision / Vision</a>
  <a href="<?php echo url_for('/web/mostrar/index.php?3'); ?>">Mostrar peliculas</a>
</div>
<div class="navbarleft">

   <b><h3><?php if (empty($_GET)) {
     ?><a href="cerrar_session.php"><font color="white"> Cerrar sesion</font></a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">ADMINISTRADOR</font> </h3></b>
</div>
   <?php }else{

    ?> 
    <a href="../cerrar_session.php"><font color="white"> Cerrar sesion</font></a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">ADMINISTRADOR</font> </h3></b>
</div>
<?php } ?>



   
