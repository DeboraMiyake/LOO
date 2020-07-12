<?php
//Debora Miyake 1800272
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'views/form_cadastro.php';
include 'models/cadastro_produto_models.php'; 
insereProduto();

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>