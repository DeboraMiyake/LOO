<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_aluno.php';

$seleciona = "SELECT * FROM matricula";
$conbd = new mysqli('localhost','root','','basedados'); 
$rs = $conbd->query($seleciona);
$html = '';

while($matricula = $rs->fetch_assoc()) {
    $nome_aluno = $matricula['nome_aluno'];
    $curso = $matricula['curso'];
    $data = $matricula['data'];

    $matricula = new Matricula($nome_aluno, $curso, $data);
    $html .= $matricula->getHTML();
}

include '../views/rodape.php';
include '../views/footer.php';
?>