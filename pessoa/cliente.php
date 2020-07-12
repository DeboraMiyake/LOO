<?php

include 'libraries/Pessoa1.php';
include 'libraries/ClienteVip.php';


$cliente = new Pessoa1();

echo "<h2>Dados do cliente</h2><hr><br/>";
$cliente->setNome("João Silva");
echo "Nome= ".$cliente->getNome();

$cliente->setEmail("silvajoao@gmail.com");
echo "<br/>Email= ".$cliente->getEmail();

$cliente->setIdade("26");
echo "<br/>Idade= ".$cliente->getIdade();

$clienteVip = new ClienteVip();
echo "Para cliente VIP desconto de R$".$clienteVip->aplicarDesconto(100);

