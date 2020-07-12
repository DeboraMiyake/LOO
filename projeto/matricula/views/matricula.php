<div class="card col-md-8 container-fluid my-5">

  <h5 class=" card-header black white-text text-center py-4">
    <strong>Matricule-se</strong>
  </h5>

	<form class="validaMatricula light p-5" method="post" novalidate>
	 <div class="form-row mb-4">
		<div class="form-group col-md-6">
			<label for="inputName">Nome</label>
			<input type="text"  name="nome_aluno" value="<?=isset($matricula['nome_aluno']) ? $matricula['nome_aluno'] : '' ?>" class="form-control" placeholder="Nome completo" required>
			<div class="invalid-feedback">
         	Informe seu nome completo, por favor.
        	</div>
		</div>
		
		<div class="form-group col-md-3">
		<label>Curso</label>
			<input type="text" name="curso" value="<?=isset($matricula['curso']) ? $matricula['curso'] : '' ?>" class="form-control" placeholder="Curso escolhido" required>
			<div class="invalid-feedback">
         	Informe o curso que deseja.
        	</div>
		</div>
		

		<div class="form-group col-md-3">
			<label>Data de matrícula</label>
			<input type="date" name="data" value="<?=isset($matricula['data']) ? $matricula['data'] : '' ?>" class="form-control"  required>
			<div class="invalid-feedback">
		     Informe a data que você está realizando a matrícula.
			</div>
		</div>
	 </div>

	<div class="text-right">
	<a href="../curso/curso.php"><p class="btn btn-danger">Ver cursos</p></a>
	<button class="btn btn-danger" type="submit">Matricular</button>
	</div>

	</form>
	</div>