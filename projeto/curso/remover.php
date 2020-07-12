<?php
//Débora Miyake - 1800272
include '../config/constants.php';
include 'models/lista_curso_models.php';
$id = isset($_GET['id']) ? $_GET['id'] : 1;

  $del = "DELETE FROM curso where id_curso = $id";
  $conbd = new mysqli ('localhost','root','','basedados');
  $conbd -> query($del);
 
removeCurso($id);

?>