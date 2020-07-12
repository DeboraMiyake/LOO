<?php
//Débora Miyake - 1800272
include 'config/constants.php';

include 'views/header.php';
include 'views/navbar.php';

include 'views/inicial.php';

include 'models/lista_aluno_models.php'; 
cadastraAluno();

include 'assets/mdb/js/valida.js';
include 'assets/mdb/js/validaCadastro.js';
include 'assets/mdb/js/validaAdm.js';

include 'views/rodape.php';
include 'views/footer.php';
?>