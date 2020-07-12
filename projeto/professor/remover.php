<?php
//Débora Miyake - 1800272
include '../config/constants.php';
include 'models/lista_prof_models.php';
$id = isset($_GET['id']) ? $_GET['id'] : 1;

  $del = "DELETE FROM prof where id_prof = $id";
  $conbd = new mysqli ('localhost','root','','basedados');
  $conbd -> query($del);
 
removeProf($id);

?>