<?php
//Debora Miyake 1800272
include 'config/constants.php';

include 'views/header.php';
include '../views/navbar_adm.php'; 

include 'models/lista_aluno_models.php'; 

$id = isset($_GET['id'])? $_GET['id'] : 1;

if (sizeof($_POST) > 0) { 
$nome =  $_POST['nome'];
$email =  $_POST['email'];
$rg =  $_POST['rg'];
$cpf =  $_POST['cpf'];
$datanasc =  $_POST['datanasc'];
$endereco =  $_POST['endereco'];
$telefone =  $_POST['telefone'];

 $alt = "UPDATE aluno SET nome = '$nome', email= '$email', rg ='$rg', cpf ='$cpf',datanasc ='$datanasc', endereco ='$endereco', telefone = '$telefone' WHERE id = $id";
 $conbd = new mysqli('localhost','root','','basedados');
 $conbd -> query($alt);
}   

$aluno = dadosAlunos($id);
include 'views/inicial.php';

include 'views/rodape.php';
include 'views/footer.php';
?>