<?php
//Débora Miyake - 1800272
include '../config/constants.php';


include '../views/header.php';
include '../views/navbar_adm.php';

include 'models/lista_prof_models.php';
$id = isset($_GET['id']) ? $_GET['id'] : 1;

editaProf($id);

$prof = dadosProf($id);
include 'views/cadastro.php';

include '../views/rodape.php';
include '../views/footer.php';
?>