<div class="container">
 <div class="row">
 <div class="col-md-8 mx-auto">
   <!-- Default form register -->
<form method ="POST" action="#" class="text-center border border-light p-5">

    <p class="h4 mb-4">Cadastre-se</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" value="<?= isset($usuario['nome']) ? $usuario['nome']: '' ?>" id="nome" name="nome" class="form-control" placeholder="Nome">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" value="<?= isset($usuario['sobrenome']) ? $usuario['sobrenome'] : '' ?>" id="sobrenome" name="sobrenome"class="form-control" placeholder="Sobrenome">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" value="<?= isset($usuario['email']) ? $usuario['email'] : '' ?>" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" value="<?= isset($usuario['senha']) ? $usuario['senha'] : '' ?>" id="senha" name="senha" class="form-control" placeholder="Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock">
<br/>
    <!-- Phone number -->
    <input type="text" value="<?= isset($usuario['telefone']) ? $usuario['telefone'] : '' ?>" id="telefone" name="telefone" class="form-control" placeholder="Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Enviar</button>
</form>
<!-- Default form register -->  
 </div>
 </div>
</div>