<?php
class Aplicativo { 
//atributos 
    public $Nome;
    public $Linguagem; 
    public $Tipo;
    
//metodos
    public function escreverDados() {
     echo "Nome: ".$this -> nome;
     echo "<br/> Linguagem: ".$this -> linguagem;
     echo "<br/> Tipo: " .$this -> tipo;
    } 
}
