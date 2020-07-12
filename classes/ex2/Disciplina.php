<?php
class Disciplina { 
//atributos 
    public $Nome;
    public $Area; 
    public $Estudo;
    
//metodos
    public function escreverDados() {
     echo "Disciplina: ".$this -> nome;
     echo "<br/> Área: ".$this -> area;
     echo "<br/> Estudo: " .$this -> estudo;
    } 
}
