<div class="card col-md-8 container-fluid my-5">

  <h5 class=" card-header black white-text text-center py-4">
    <strong>Cadastre o curso</strong>
  </h5>

	<form class="validaCurso light p-5" method="post" novalidate>
	 <div class="form-row mb-4">
		<div class="form-group col-md-6">
			<label for="inputName">Nome</label>
			<input type="text"  name="nome_curso" value="<?=isset($curso['nome_curso']) ? $curso['nome_curso'] : '' ?>" class="form-control" placeholder="Nome do Curso" required>
			<div class="invalid-feedback">
         	Informe o nome do curso.
        	</div>
		</div>
		
		<div class="form-group col-md-3">
		<label>Data de Início</label>
			<input type="date" name="dt_inicio" value="<?=isset($curso['dt_inicio']) ? $curso['dt_inicio'] : '' ?>" class="form-control" required>
			<div class="invalid-feedback">
         	Informe a data de início desse curso.
        	</div>
		</div>
		

		<div class="form-group col-md-3">
			<label for="inputData2">Data de Termino</label>
			<input type="date" name="dt_termino" value="<?=isset($curso['dt_termino']) ? $curso['dt_termino'] : '' ?>" class="form-control" required>
			<div class="invalid-feedback">
		     Informe a data de termino.
			</div>
		</div>
		
	 </div>

	 <div class="form-row mb-4">
	    <div class="form-group col-md-3">
		<label>Horário de Início</label>
			<input type="time" name="hora_inicio" value="<?=isset($curso['hora_inicio']) ? $curso['hora_inicio'] : '' ?>" class="form-control" required>
			<div class="invalid-feedback">
		     Insira o horário de início.
			</div>
		</div>
		

	<div class="form-group col-md-3">
		<label>Horário de Termino</label>
			<input type="time" name="hora_termino" value="<?=isset($curso['hora_termino']) ? $curso['hora_termino'] : '' ?>" class="form-control"required>
			<div class="invalid-feedback">
		     Insira o horário de termino.
			</div>
	</div>
		

	<div class="form-group col-md-3">
		<label>Valor do Curso</label>
			<input type="number" name="valor" value="<?=isset($curso['valor']) ? $curso['valor'] : '' ?>" class="form-control" required>
			<div class="invalid-feedback">
		     Insira o valor do curso.
			</div>
	</div>
		
	<div class="form-group col-md-3">
			<label>Professor</label>
			<input type="text" name="prof" value="<?=isset($curso['prof']) ? $curso['prof'] : '' ?>" class="form-control" placeholder="Nome do professor"required>
			<div class="invalid-feedback">
		     Informe o nome do Professor.
			</div>
	</div>
	</div>

	<div class="form-row mb-4">
	<div class="form-group col-md-12">
		<label>Conteúdo Programático</label>
	    <textarea class="form-control" name="conteudo" value="<?=isset($curso['conteudo']) ? $curso['conteudo'] : '' ?>" rows="3" placeholder="Conteúdo do Curso" required></textarea>
	    <div class="invalid-feedback">
		     Informe o contéudo deste curso, por favor.
		</div>
	</div>
	</div>

	<div class="text-right">
	<a href="listagem_curso.php"><p class="btn btn-danger">Ver lista</p></a>
	<button class="btn btn-danger" type="submit">Cadastrar</button>
	</div>

	</form>
	</div>