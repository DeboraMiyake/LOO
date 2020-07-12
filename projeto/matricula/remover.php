<?php
//Débora Miyake - 1800272
include '../config/constants.php';
include 'models/lista_matricula_models.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;

  $del = "DELETE FROM matricula where id_matricula = $id";
  $conbd = new mysqli ('localhost','root','','basedados');
  $conbd -> query($del);
 
removeMatricula($id);

?>