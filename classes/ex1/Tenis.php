<?php
class Tenis { 
//atributos 
    public $nome; 
    public $cor;
    public $marca;
    
//metodos
    public function escreverDados() {
     echo "Seu nome: ".$this -> nome;
     echo "<br/> Cor: ".$this -> cor;
     echo "<br/> Marca: " .$this -> marca;
    } 
}
