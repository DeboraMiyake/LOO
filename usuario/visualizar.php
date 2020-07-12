<?php
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;
include 'models/cadastro_usuario_models.php'; 
$usuario = dadosUsuario($id);

include 'views/detalhe.php';

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>