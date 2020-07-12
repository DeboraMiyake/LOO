<?php
class Pessoa1 {

 private $nome;
 private $idade;
 private $email;
 protected $desconto;

public function __construct() {    
  echo "<br/>Olá, seja bem vindo<br/>";
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
    
public function setIdade($i) {
  $this ->idade = $i;  
}  
    

public function getIdade() {
 return $this ->idade; 
}  

public function setEmail($em) {
  $this ->email = $em;  
}  
    

public function getEmail() {
 return $this ->email; 
}  
}


