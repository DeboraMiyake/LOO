<?php

class ClienteVip extends Pessoa1 {
    
  public function __construct() {    
  echo "<h4>Cliente VIP</h4>";
}
    function aplicarDesconto($valor) {
        return $this->desconto = $valor * 0.02;
    }
}
