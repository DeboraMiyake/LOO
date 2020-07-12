<?php
//Debora Miyake 1800272
include '../config/constants.php';
include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'models/cadastro_produto_models.php'; 
echo listaProduto();

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>