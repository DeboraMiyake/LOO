<?php
class Card{

//atributos
 public $titulo;
 public $descricao;
 public $rotulo_botao;
 public $imagem;
    
// metodo construtor - define valores iniciais para a classe
  function __construct($title, $conteudo, $image, $rotulo_botao) {
  $this->descricao = $conteudo;          
  $this->titulo = $title;
  $this->imagem = $image;    
  $this->rotulo_botao = $rotulo_botao;    
  }
//metodo
public function getHTML() {
    $html = ' 
<div class="card col-md-4 my-3">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/'.$this->imagem.'.jpg" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title"><a>'.$this->titulo.'</a></h4>
        <p class="card-text">'.$this->descricao.'</p>
        <a href="#" class="btn btn-primary">'.$this->rotulo_botao.'</a>
  </div>
</div>';
 return $html;
}
}