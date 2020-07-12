<?php

include 'libraries/Animal.php';
include 'libraries/gato.php';
include 'libraries/cachorro.php';

$animal = new Animal(); 

$gato = new Gato(); 

$gato->setNome("Nina");
echo "Nome= ".$gato->getNome();

$gato->setraca("Sem raça definida.");
echo "<br/>Raça= ".$gato->getRaca();

$gato->mia();


$cachorro = new Cachorro(); 

$cachorro->setNome("Fran");
echo "Nome= ".$cachorro->getNome();

$cachorro->setraca("Lhasa Apso");
echo "<br/>Raça= ".$cachorro->getRaca();

$cachorro->late();

echo "<hr/><br/>";
$animal -> caminha();