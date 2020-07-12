<?php
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'views/form_cadastro.php'; //conteudo da sessao
//print_r ($_POST);
include 'models/cadastro_usuario_models.php'; 
insereUsuario();

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>