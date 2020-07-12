<?php
//Débora Miyake - 1800272
class Curso{
    public $nome_curso;
    public $dt_inicio;
    public $dt_termino;
    public $hora_inicio;
    public $hora_termino;
    public $conteudo;
    public $valor;
    public $prof;
    public $img_curso;
    
    function __construct($nome_curso, $dt_inicio, $dt_termino, $hora_inicio, $hora_termino, $conteudo, $valor, $prof, $img_curso){
        $this->nome_curso = $nome_curso;
        $this->dt_inicio = date('d/m/Y',strtotime($dt_inicio));
        $this->dt_termino = date('d/m/Y',strtotime($dt_termino)); 
        $this->hora_inicio = $hora_inicio;
        $this->hora_termino = $hora_termino;      
        $this->conteudo = $conteudo;
        $this->valor = $valor;
        $this->prof = $prof;
        $this->img_curso = $img_curso;
        } 
        

   public function getHTML(){
   $html = '<div class="modal fade text-center" id="centralModalSuccess'.$this->img_curso.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <p class="heading lead">'.$this->nome_curso.'</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <i class=" fas fa-laptop black-text fa-4x mb-3 animated jackInTheBox"></i> 
        <div class="text-justify">
          <br/>
          <p class="text-justify"><b>Duração: </b>'.$this->dt_inicio.' a '.$this->dt_termino.'</p>
          <p class="text-justify"><b>Horário: </b>'.$this->hora_inicio.' às '.$this->hora_termino.'</p>
          <p class="text-justify"><b>Lecionado por: </b>Professor(a) '.$this->prof.'</p>
          <p class="text-justify"><b>Valor do Curso: </b>R$ '.$this->valor.'</p>
        </div>
      </div>

      <div class="modal-footer justify-content-center">
        <a href ="../matricula/cadastro_matricula.php" type="button" class="btn btn-danger">Matricular <i class="fas fa-clone left"></i></a>
      </div>
    </div>
  </div>
</div>

<div class="container text-center hoverable p-4 my-5 border border-light">
  <div class="row">
  <div class="col-md-3 offset-md-1 mx-3 my-3 p-1">
      <div class="view overlay">
        <img src="img/'.$this->img_curso.'.jpg" class="img-fluid">
        <a><div class="mask rgba-white-slight"></div></a>
      </div>
    </div>

   <div class="col-md-7 text-md-left ml-3 mt-3">
      <a class="text">
        <h6 class="h6 pb-1 text-danger"><i class="fas fa-desktop pr-2"></i>'.$this->nome_curso.'<hr/></h6>
      </a>

      <p class="font-weight-normal text-justify">'.$this->conteudo.'</p>
      <div class="text-left">
      <a href="" class="btn btn-danger" data-toggle="modal" data-target="#centralModalSuccess'.$this->img_curso.'">Saber mais<i class="far ml-1"></i></a>
      </div>

    </div>
  </div>
</div>';
 return $html;
 }


}