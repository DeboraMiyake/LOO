<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_adm.php'; 

include '../models/sessao_adm.php';

include 'views/cadastro.php'; 
include 'models/lista_curso_models.php';
cadastraCurso();

include '../assets/mdb/js/validaCurso.js'; 
include '../views/rodape.php';
include '../views/footer.php';
?>

