<?php
class Pessoa { //nome da classe inicia com letra maiuscula
//atributos 
//vibilidade atrributo
    public $nome; 
    public $email;
    public $idade;
    
//metodos: o que eu posso fazer com essa classe, ações
    public function escreverDados() {
     echo "Seu nome: ".$this -> nome;
     echo "<br/> Seu e-mail: ".$this -> email;
     echo "<br/> Sua idade: " .$this -> idade;
    // this define que estou referenciando uma informação da classe
    // -> atribuição, recebimento         
    } 
}

//nao precisa fechar a tag php aqui pq ainda tem o footer;
