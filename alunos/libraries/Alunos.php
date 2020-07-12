<?php
class Alunos{

 public $nome;
 public $idade;
 public $matricula;
 public $imagem;
    
function __construct($name, $idd, $matri, $image) {    
  $this->nome = $name;
  $this->idade = $idd;  
  $this->matricula = $matri;  
  $this->imagem = $image;     
  }

public function getHTML() {
    $html = ' 
<div class="card col-md-3 my-4 ml-5 mr-3 ">
  <div class="view overlay">
    <img class="card-img-top" src="img/'.$this->imagem.'.jpg" alt="Card image cap">
    <a>
      <div class="mask rgba-white-slight"></div>
    </a>
   </div>
        <div class="card-body">
        <h4 class="card-title"><a>'.$this->nome.'</a></h4>
        <hr>
        <p class="card-text">Idade: '.$this->idade.'</p>
        <p class="card-text">Matricula: '.$this->matricula.'</p>
        <a href="#!" class="black-text d-flex justify-content-end"><h6>Mais Informações <i class="fas fa-angle-double-right"></i>           </h6></a>
        </div>
</div>';
 return $html;
}
}
