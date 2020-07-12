<?php
//Debora Miyake 1800272
include '../config/constants.php';
include 'models/cadastro_produto_models.php'; 
$id = isset($_GET['id']) ? $_GET['id'] : 1;

 $del = "DELETE FROM produto where id = $id";
 $conbd = new mysqli ('localhost','root','','base_dados');
 $conbd -> query($del);

 header('Location: '.BASEURL.'produtos');

?>



