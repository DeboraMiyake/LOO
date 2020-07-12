<?php
//Débora Miyake - 1800272
include 'config/constants.php';

include 'views/header.php';
include 'views/navbar_adm.php';

include 'models/lista_aluno_models.php';  
echo listaAluno();

include 'views/rodape.php';
include 'views/footer.php';
?>