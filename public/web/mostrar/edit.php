<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/web/subjects/index.php'));
}
$id = $_GET['id'];
$res = $_GET['res'];
  
$subject = find_subject_by_id($id);

$array = [
    "1" => "nombre",
    "2" => "genero",
    "3" => "idioma",
    "4" => "duracion",
    "5" => "clasificacion",
    "6" => "funcion",

];

if ($res == "1") {
  
if(is_post_request()) {

  //$var = $_POST['']


$subject = [];
$subject['id'] = $id;
$subject['nombre'] = $_POST['position'] ?? '';


if ($subject['nombre']=='0') {
  redirect_to(url_for('/web/mostrar/editall.php?id=' . $id . '&res=0'));
  
}else{
redirect_to(url_for('/web/mostrar/editone.php?id=' . $id . '&res=0' . '&campo=' . $subject['nombre']));

}

redirect_to(url_for('/web/mostrar/show.php?id=' . $id));

}else{
  $subject = find_subject_by_id($id);

}

}


?>


<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/web_header.php'); ?>

<div id="content">

  <div class="subject new">
    <h1>Modificar pelicula</h1>

    <form action="<?php echo url_for('/web/mostrar/edit.php?id=' . h(u($id)) . "&res=1"); ?>" method="post">
    
        <dt>Campo a modificar</dt>
        <dd>
          <select name= "position">
          <?php
          for ($i=0; $i<= 6; $i++) { 

            if ($i==0) {
              echo "<option value=\"{$i}\"";
               echo ">". "Todos los campos" ."</option>";
            }else{
              echo "<option value='$array[$i]'";        
            echo ">". "*"  . h($array[$i]) ."</option>";

            }
            
          }
          
          ?>
        </select>

        </dd>


      
      
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

    
    
 <div menu = "attributes">.
  <br><br><br>
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


  </div>


  </div>


</div>

<?php include(SHARED_PATH . '/web_footer.php'); ?>
