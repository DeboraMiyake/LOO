<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_aluno.php'; 

include 'views/matricula.php'; 
include 'models/lista_matricula_models.php';
cadastraMatricula();

include '../assets/mdb/js/validaMatricula.js'; 
include '../views/rodape.php';
include '../views/footer.php';
?>

