<div class="card col-md-8 container-fluid my-5">

  <h5 class=" card-header black white-text text-center py-4">
    <strong>Cadastre o professor</strong>
  </h5>

	<form class="validaProf light p-5" method="post" novalidate>
	 <div class="form-row mb-4">
		<div class="form-group col-md-6">
			<label>Nome</label>
			<input type="text"  name="nome_prof" value="<?=isset($prof['nome_prof']) ? $prof['nome_prof'] : '' ?>" class="form-control" placeholder="Nome do professor" required>
			<div class="invalid-feedback">
         	Informe o nome do professor.
        	</div>
		</div>
		
		<div class="form-group col-md-3">
		<label>Telefone</label>
			<input type="text" name="telefone" value="<?=isset($prof['telefone']) ? $prof['telefone'] : '' ?>" class="form-control" placeholder="Telefone" required>
			<div class="invalid-feedback">
         	Informe o telefone desse professor.
        	</div>
		</div>
		

		<div class="form-group col-md-3">
			<label>Valor</label>
			<input type="text" name="valor" value="<?=isset($prof['valor']) ? $prof['valor'] : '' ?>" class="form-control" placeholder="Valor hora/aula" required>
			<div class="invalid-feedback">
		     Informe o valor hora/aula
			</div>
		</div>
		
	 </div>


	<div class="form-row mb-4">
	<div class="form-group col-md-12">
		<label>Materia</label>
	    <input type="text" name="materia" value="<?=isset($prof['materia']) ? $prof['materia'] : '' ?>" class="form-control" placeholder="Materia" required>
	    <div class="invalid-feedback">
		     Informe a matéria desse professor.
		</div>
	</div>
	</div>

	<div class="text-right">
	<a href="listagem_prof.php"><p class="btn btn-danger">Ver lista</p></a>
	<button class="btn btn-danger" type="submit">Cadastrar</button>
	</div>

	</form>
	</div>