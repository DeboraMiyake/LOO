<?php
include '../config/constants.php';
include 'models/cadastro_usuario_models.php'; 
$id = isset($_GET['id']) ? $_GET['id'] : 1;

 $del = "DELETE FROM tabusuario where id = $id";
 $conbd = new mysqli ('localhost','root','','base_dados_loo');
 $conbd -> query($del);

 header('Location: '.BASEURL.'usuario');

?>


