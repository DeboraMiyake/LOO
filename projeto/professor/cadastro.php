<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_adm.php'; 

include 'views/cadastro.php'; 
include 'models/lista_prof_models.php';
cadastraProf();

include '../assets/mdb/js/validaProf.js'; 
include '../views/rodape.php';
include '../views/footer.php';
?>

