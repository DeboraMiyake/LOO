<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../views/header.php';
include '../views/navbar_aluno.php';

$seleciona = "SELECT * FROM prof";
$conbd = new mysqli('localhost','root','','basedados'); 
$rs = $conbd->query($seleciona);
$html = '';

while($prof = $rs->fetch_assoc()) {
    $nome_prof = $prof['nome_prof'];
    $telefone = $prof['telefone'];
	$valor = $prof['valor'];
    $materia = $prof['materia'];

    $prof = new prof($nome_prof, $telefone, $valor, $materia);
    $html .= $prof->getHTML();
}

include '../views/rodape.php';
include '../views/footer.php';
?>