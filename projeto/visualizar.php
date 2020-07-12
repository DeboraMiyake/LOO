<?php
//Debora Miyake 1800272
include 'config/constants.php';

include 'views/header.php';
include 'views/navbar_adm.php'; 

$id = isset($_GET['id']) ? $_GET['id'] : 1;
include 'models/lista_aluno_models.php'; 
$aluno = dadosAlunos($id);

include 'views/detalhe_aluno.php';

include 'views/rodape.php';
include 'views/footer.php';