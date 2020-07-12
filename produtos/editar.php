<?php
//Debora Miyake 1800272
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

include 'models/cadastro_produto_models.php';

$id = isset($_GET['id'])? $_GET['id'] : 1;

if (sizeof($_POST) > 0) { 
 $nome = $_POST['nome'];
 $marca= $_POST['marca'];
 $cor = $_POST['cor'];
 $quantidade = $_POST['quantidade'];
 $tamanho = $_POST['tamanho'];
 $preco = $_POST['preco'];

 $alt = "UPDATE produto SET nome = '$nome', marca= '$marca', cor ='$cor', quantidade='$quantidade',tamanho='$tamanho', preco='$preco' WHERE id = $id";
 $conbd = new mysqli('localhost','root','','base_dados');
 $conbd -> query($alt);
}   

$produto = dadosProduto($id);
include 'views/form_cadastro.php';

include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>