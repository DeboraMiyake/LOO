<?php 
session_start();
//Débora Miyake - 1800272

$email = $_POST['email'];
$senha = $_POST['senha'];

$mysqli = new mysqli ("localhost", "root", "","basedados");
$result = mysqli_query($mysqli,"SELECT * FROM aluno WHERE email = '$email' AND senha = '$senha'");

if(mysqli_num_rows ($result) > 0 ) {
if ($email == 'administrador@gmail.com' && $senha =="adm2019"){
 	$_SESSION['email'] = $email;
 	$_SESSION['senha'] = $senha;
	header('location:../curso/cadastro.php');
}
else{
 	$_SESSION['email'] = $email;
 	$_SESSION['senha'] = $senha;
  	header('location:../curso/cadastro.php');
}
} else {
  	$_SESSION['erroAdm'] = "Email e/ou senha informados são inválidos, tente novamente!";
  	header('location:../index.php');
  }
?>


