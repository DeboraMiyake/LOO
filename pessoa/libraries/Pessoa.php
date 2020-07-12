<?php
class Pessoa {

 public $nome;
 public $idade;
 public $sexo;
 public $altura;
 public $peso;
 public $email;

public function __construct() {    
  echo "<br/>Olá, seja bem vindo<br/>";
}

public function exibe() { 
  echo "<h4>Dados Pessoais: </h4>";
  echo "Nome = {$this -> nome}";
  echo "<br/>Idade = {$this -> idade}";
  echo "<br/>Sexo = {$this -> sexo}";
  echo "<br/>Altura = {$this -> altura}";
  echo "<br/>Peso = {$this -> peso}";
  echo "<br/>Email = {$this -> email}";
}
    
  public function exibeDados() { 
  echo "<h4><br/>Dados Pessoais: </h4>";
  echo "Nome = {$this -> nome}";
  echo "<br/>Idade = {$this -> idade}";
  echo "<br/>Sexo = {$this -> sexo}";
  echo "<br/>Email = {$this -> email}";
  echo "<br/>Turma = {$this -> turma}";
}
}


