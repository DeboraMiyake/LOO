<div class="container">
  <div class="row my-5 p-2">
     <div class="col-md-6 mx-auto">
       <div class="card">
         <div class="card-body text-center">
          <h5 class="card-header danger-color white-text text-center py-4">
            <strong>Informações do Curso</strong>
          </h5> 
          <br/>
          <i class="fas fa-book-open fa-4x mb-3 animated jackInTheBox"></i> 
          <div class="card-body text-justify">
          <p>Nome: <?=$curso['nome_curso']?></p>
          <p>Data de início: <?=$curso['dt_inicio']?></p>  
          <p>Data de término: <?=$curso['dt_termino']?></p>  
          <p>Horário de início: <?=$curso['hora_inicio']?></p>
          <p>Horário de término: <?=$curso['hora_termino']?></p>
          <p>Conteúdo: <?=$curso['conteudo']?></p>
          <p>Valor: R$<?=$curso['valor']?></p>
          <p>Professor: <?=$curso['prof']?></p>
          </div>
          <a href="listagem_curso.php"><i class="fas text-danger fa-arrow-left"></i></a>
          </div>

        </div>
      </div>
    </div>
</div>
<br/>