<?php
//Debora Miyake 1800272
include 'config/constants.php';
include 'models/lista_aluno_models.php';
$id = isset($_GET['id']) ? $_GET['id'] : 1;

 $del = "DELETE FROM aluno where id = $id";
 $conbd = new mysqli ('localhost','root','','basedados');
 $conbd -> query($del);

removeAlunos($id);

?>



