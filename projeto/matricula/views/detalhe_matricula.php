<div class="container">
  <div class="row my-5 p-2">
     <div class="col-md-6 mx-auto">
       <div class="card">
         <div class="card-body text-center">
          <h5 class="card-header danger-color white-text text-center py-4">
            <strong>Informações da matricula</strong>
          </h5> 
          <br/>
          <i class="fas fa-file fa-4x mb-3 animated jackInTheBox"></i> 
          <div class="card-body text-justify">
          <p>Nome: <?=$matricula['nome_aluno']?></p>
          <p>Curso: <?=$matricula['curso']?></p>  
          <p>Data de matrícula: <?=$matricula['data']?></p>  
          </div>
          <a href="listagem_matricula.php"><i class="fas text-danger fa-arrow-left"></i></a>
          </div>

        </div>
      </div>
    </div>
</div>
<br/>