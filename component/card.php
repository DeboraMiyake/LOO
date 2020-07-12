<?php
include '../config/constants.php';

include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';

//include '../views/component.php';

include 'libraries/Card.php';

$seleciona = "SELECT * FROM card";
$conbd = new mysqli('localhost','root','','base_dados_loo');
$rs = $conbd->query($seleciona);
$html = '';

while($cartao = $rs->fetch_assoc()) { //$cartao - vetor
    $titulo = $cartao['titulo'];
    $descricao = $cartao['descricao']; 
    $rotulo_botao = $cartao['rotulo'];
    $image = $cartao['id']; //id do bd
    // $image = rand(1,100); gera um numero aleatorio, sempre que att a pagina
    $vcard = new Card($titulo, $descricao,$image,$rotulo_botao); //vcard instancia da classe-objeto
    $html .= $vcard->getHTML(); 
} 

$componente = $html;

include 'views/component.php';
include APPPATH.'../views/rodape.php';
include APPPATH.'../views/footer.php';
?>