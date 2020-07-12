<?php
class Animal {

 private $nome;
 private $raca;
    

public function __construct() {    
    echo "<br/><h2>Informações </h2><hr><br/>";
}

//sempre se usa set e get quando trabalha com private
    
//atribuição de valor ao atributo private $nome
public function setNome($n) { //$n parametro
  $this ->nome = $n;  
}  
    
//retornar o valor do atributo $nome
public function getNome() {
 return $this ->nome;
}  
    
public function setRaca($r) {
  $this ->raca = $r;  
}  
    

public function getRaca() {
 return $this ->raca; 
}  

public function caminha() {
   echo "O gato e o cachorro caminham";
}
}


