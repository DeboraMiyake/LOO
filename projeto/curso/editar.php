<?php
//Débora Miyake - 1800272
include '../config/constants.php';


include '../views/header.php';
include '../views/navbar_adm.php';

include 'models/lista_curso_models.php';
$id = isset($_GET['id']) ? $_GET['id'] : 1;

editaCurso($id);

$curso = dadosCurso($id);
include 'views/cadastro.php';

include '../views/rodape.php';
include '../views/footer.php';
?>