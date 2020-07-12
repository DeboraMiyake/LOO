<?php 
session_start();
//Débora Miyake - 1800272
$email = $_POST['email'];
$senha = $_POST['senha'];

$mysqli = new mysqli ("localhost", "root", "","basedados") or die
 ("Sem conexão com o servidor");
 
$result = mysqli_query($mysqli,"SELECT * FROM aluno WHERE email = '$email' AND senha= '$senha'") or die("erro ao selecionar");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:../curso/curso.php');
}
else{
  $_SESSION['erro'] = "Email e/ou senha informados são inválidos, tente novamente!";
  header('location:../index.php');
   
  }
?>
