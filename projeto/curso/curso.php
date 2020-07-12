<?php
//Débora Miyake - 1800272
include '../config/constants.php';

include '../models/sessao.php';

include '../views/header.php';
include '../views/navbar_aluno.php';

include 'libraries/Curso.php';

$seleciona = "SELECT * FROM curso";
$conbd = new mysqli('localhost','root','','basedados'); 
$rs = $conbd->query($seleciona);
$html = '';

while($curso = $rs->fetch_assoc()) {
    $nome_curso = $curso['nome_curso'];
    $dt_inicio = $curso['dt_inicio'];
    $dt_termino = $curso['dt_termino'];
	$hora_inicio = $curso['hora_inicio'];
    $hora_termino = $curso['hora_termino'];
    $conteudo = $curso['conteudo'];
	$valor = $curso['valor'];
    $prof = $curso['prof'];
    $img_curso = $curso['id_curso'];

    $curso = new Curso($nome_curso, $dt_inicio, $dt_termino, $hora_inicio, $hora_termino, $conteudo, $valor, $prof, $img_curso);
    $html .= $curso->getHTML();
}

$component = $html;


include 'views/component.php';
include '../views/rodape.php';
include '../views/footer.php';
?>