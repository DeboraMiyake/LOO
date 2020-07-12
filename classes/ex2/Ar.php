<?php
class Ar { 
//atributos 
    public $descricao;
    public $temperatura; 
    public $composicao;
    
//metodos
    public function escreverDados() {
     echo "Sua descrição: ".$this -> descricao;
     echo "<br/> Temperatura: ".$this -> temperatura;
     echo "<br/> Compostos principais: " .$this -> composicao;
    } 
}
