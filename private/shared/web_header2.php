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
      </br><h1>CINEMA FILMS</h1>
    </header>

    <div class="navbar">
   

  <a href="<?php echo url_for('/web/index.php'); ?>">Inicio</a>
  <a href="<?php echo url_for('/web/nosotros/indexcliente.php?1'); ?>">Acerca de nosotros</a>
  <a href="<?php echo url_for('/web/misvis/indexcliente.php?2'); ?>">Mision / Vision</a>
  <a href="<?php echo url_for('/web/mostrar/indexcliente.php?3'); ?>">Mostrar peliculas</a>
  
</div>

<div class="navbarleft">
  <?php if (empty($_GET)) {
    
  ?>
  <form action="validar.php" method="post" >
    
    <input type="text" placeholder="&#128272; Usuario" name="usuario" size="10">
    <input type="password" placeholder="&#128272; Contraseña" name="clave" size="10">
    <input type="submit" value="Ingresar">
  </form>
</div>
<?php }else{ ?>
   <form action="../validar.php" method="post" >
    
    <input type="text" placeholder="&#128272; Usuario" name="usuario" size="10">
    <input type="password" placeholder="&#128272; Contraseña" name="clave" size="10">
    <input type="submit" value="Ingresar">
  </form>
</div>

<?php }?>


   
