<?php
include '../config/constants.php';
include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'models/cadastro_usuario_models.php'; 
echo listaUsuario();

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>