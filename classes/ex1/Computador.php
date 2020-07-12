<?php
class Computador { 
//atributos 
    public $marca; 
    public $processador;
    public $modelo;
    
//metodos
    public function escreverDados() {
     echo "Sua marca: ".$this -> marca;
     echo "<br/> Processador: ".$this -> processador;
     echo "<br/> Cor: " .$this -> modelo;
    } 
}
