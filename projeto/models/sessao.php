<head>
<?php 
//Débora Miyake - 1800272

session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:../index.php');
  }
 
$logado = $_SESSION['email'];
?>
</head>