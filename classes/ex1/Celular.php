<?php
class Celular { 
//atributos 
    public $marca; 
    public $cor;
    public $sistema;
    
//metodos
    public function escreverDados() {
     echo "Sua marca: ".$this -> marca;
     echo "<br/> Cor:".$this -> cor;
     echo "<br/> Sistema: " .$this -> sistema;
    } 
}
