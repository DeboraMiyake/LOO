<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_adm.php';

$id = isset($_GET['id']) ? $_GET['id'] : 1;
include 'models/lista_prof_models.php';
$prof = dadosProf($id);

include 'views/detalhe_prof.php';

include '../views/rodape.php';
include '../views/footer.php';
?>