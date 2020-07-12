<?php
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'libraries/Alunos.php';

$seleciona = "SELECT * FROM alunos";
$conbd = new mysqli('localhost','root','','base_dados_loo');
$rs = $conbd->query($seleciona);
$html = '';

while($alunos = $rs->fetch_assoc()) { 
    $nome = $alunos['nome'];
    $idade = $alunos['idade']; 
    $matricula = $alunos['matricula'];
    $image = $alunos['id'];
    $aluno = new Alunos($nome, $idade,$matricula,$image);
    $html .= $aluno->getHTML(); 
} 

$info = $html;

include 'views/info.php';
include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>