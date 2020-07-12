<?php

class Automovel { 
//atributos 
    public $nome;
    public $marca; 
    public $modelo;
    public $ano; 
    public $placa;
    
//metodos
     public function escreverDados() {
     echo "Dados do Carro: ";
     echo "<br/> Nome: ".$this -> nome;
     echo "<br/> Marca: ".$this -> marca;
     echo "<br/> Modelo: " .$this -> modelo;
     echo "<br/> Ano: ".$this -> ano;
     echo "<br/> Placa: ".$this -> placa;
    } 
}

class Motor { 
//atributos 
    public $tipo;
    public $componentes; 
    public $estado;
    
//metodos
    public function escreverDados() {
     echo "<br/> <hr/> Dados do Motor: ";
     echo "<br/> Tipo: ".$this -> tipo;
     echo "<br/> Componentes: ".$this -> componentes;
     echo "<br/> Estado: " .$this -> estado;
    } 
}

class Rodas { 
//atributos 
    public $diâmetro;
    public $largura; 
    public $parafusos;
    
//metodos
    public function escreverDados() {
     echo "<br/> <hr/> Informações da Roda ";
     echo "<br/> Diâmetro: ".$this -> diametro;
     echo "<br/> Largura: ".$this -> largura;
     echo "<br/> Quantidade de parafusos: " .$this -> parafusos;
    } 
}
