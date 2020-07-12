<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_adm.php';

include 'models/lista_matricula_models.php';
$id = isset($_GET['id']) ? $_GET['id'] : 1;

editaMatricula($id);

$matricula = dadosMatricula($id);
include 'views/matricula.php';

include '../views/rodape.php';
include '../views/footer.php';
?>