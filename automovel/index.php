<?php
//Débora Miyake 1800272
include '../config/constants.php';
    
include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';
include 'libraries/Automovel.php';
include 'libraries/Bicicleta.php';
include 'libraries/Carro.php';

$automovel = new Automovel(); 

$myBike = new Bicicleta(); 
$myBike->setNome("Foxer Hammer");
$myBike->setMarca("Houston");
$myBike->setAro("26");
$myBike->setMarcha("21");
$myBike->setCor("Preta<br/>");
$myBike->listaDados();

$myCar = new Carro(); 
$myCar->setNome("HB20");
echo "Nome= ".$myCar->getNome();

$myCar->setMarca("Hyundai");
echo "<br/>Marca= ".$myCar->getMarca();

$myCar->setAno("2018");
echo "<br/>Ano= ".$myCar->getAno();

echo "<br/>Desconto de impostos: R$".$myCar->gerarPreco(44900);

include APPPATH.'../views/rodape.php';    
include APPPATH.'../views/footer.php';