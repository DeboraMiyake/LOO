<?php
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'models/cadastro_usuario_models.php';

$id = isset($_GET['id'])? $_GET['id'] : 1;

if (sizeof($_POST) > 0) { 
 $nome = $_POST['nome'];
 $sobrenome = $_POST['sobrenome'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 $telefone = $_POST['telefone'];

 $alt = "UPDATE tabusuario SET nome = '$nome', sobrenome= '$sobrenome', email ='$email', senha='$senha',telefone='$telefone' WHERE id = $id";
 $conbd = new mysqli('localhost','root','','base_dados_loo');
 $conbd -> query($alt);
}   

$usuario = dadosUsuario($id);
include 'views/form_cadastro.php';

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>