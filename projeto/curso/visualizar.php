<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_adm.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;
include 'models/lista_curso_models.php';
$curso = dadosCurso($id);

include 'views/detalhe_curso.php';

include '../views/rodape.php';
include '../views/footer.php';
?>