<div class="container">
  <div class="row my-5 p-2">
     <div class="col-md-6 mx-auto">
       <div class="card">
         <div class="card-body text-center">
          <h5 class="card-header danger-color white-text text-center py-4">
            <strong>Informações do Professor</strong>
          </h5> 
          <br/>
          <i class="fas fa-chalkboard-teacher fa-4x mb-3 animated jackInTheBox"></i>
          <div class="card-body text-justify">
          <p>Nome: <?=$prof['nome_prof']?></p>
          <p>Telefone: <?=$prof['telefone']?></p>  
          <p>Valor: <?=$prof['valor']?></p>  
          <p>Matéria: <?=$prof['materia']?></p>
          </div>
          <a href="listagem_prof.php"><i class="fas text-danger fa-arrow-left"></i></a>
          </div>

        </div>
      </div>
    </div>
</div>
<br/>
