<?php
//Débora Miyake 1800272
class Carro extends Automovel  {

public function __construct() {    
  echo "<br/><hr/><h4>A classe carro possui as informações sobre o seu carro: </h4>";
}
    
function gerarPreco($desc) {
        return $this->desconto = $desc - $desc * 0.05;
    }
}  

