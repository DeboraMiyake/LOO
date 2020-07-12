<div class="container">
  <div class="row my-5 p-2">
     <div class="col-md-4 mx-auto">
       <div class="card">
         <div class="card-body text-center">
          <h5 class="card-header danger-color white-text text-center py-4">
            <strong>Informações do Usuário</strong>
          </h5> 
          <br/>
          <i class="fas fa-user fa-4x mb-3 animated jackInTheBox"></i>
          
          <div class="card-body text-justify">
          <p>Nome: <?=$aluno['nome']?></p>
          <p>Email: <?=$aluno['email']?></p>  
          <p>RG: <?=$aluno['rg']?></p>  
          <p>CPF: <?=$aluno['cpf']?></p>  
          <p>Data de Nascimento: <?=$aluno['datanasc']?></p>  
          <p>Endereço: <?=$aluno['endereco']?></p>
          <p>Telefone: <?=$aluno['telefone']?></p>
          </div>

          <a href="listagem_aluno.php"><i class="fas text-danger fa-arrow-left"></i></a>

          </div>

        </div>
      </div>
    </div>
</div>
<br/>