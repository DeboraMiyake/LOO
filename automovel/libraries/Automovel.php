<?php
//Débora Miyake 1800272
class Automovel{
    protected $marca;
    protected $ano;
    private $nome;
    private $aro;
    private $marcha;
    private $cor;
    private $desconto;
    
public function setMarca($m) {
  $this ->marca = $m;  
}  
public function getMarca() {
 return $this ->marca; 
} 
 
public function setAno($a) {
  $this ->ano= $a;  
}  
public function getAno() {
 return $this ->ano; 
} 
    
public function setNome($n) { 
  $this ->nome = $n;  
}  
public function getNome() {
 return $this ->nome;
}  
     
public function setAro($aro) { 
  $this ->aro = $aro;  
}  
public function getAro() {
 return $this ->aro;
}  
    
public function setMarcha($mc) {
  $this ->marcha = $mc;  
}  
public function getMarcha() {
 return $this ->marcha; 
} 
    
public function setCor($c) {
  $this ->cor = $c;  
}  
public function getCor() {
   return $this ->cor; 
} 
    
public function listaDados() { 
  echo "Nome = {$this -> nome}";
  echo "<br/>Marca = {$this -> marca}";
  echo "<br/>Aro = {$this -> aro}";
  echo "<br/>Marcha = {$this -> marcha}";
  echo "<br/>Cor = {$this -> cor}";
} 
}


