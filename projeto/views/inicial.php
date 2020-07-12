<?php
//Débora Miyake - 1800272
session_start();
?>
<div class ="container">
    <div class="row my-5">
        <div class="col-md-8">

        <div class="card card-cascade wider reverse">

        <div class="view view-cascade overlay">
        <img class="card-img-top" src="img/cursos.jpg" alt="Cursos Livres">
        <div class="mask rgba-white-slight"></div>
        </div>

        <div class="card-body card-body-cascade text-center">
            <h4 class="card-title"><strong>CURSOS LIVRES</strong></h4>
            <p class="card-text text-justify">A empresa CursosLivres, oferece diversas opções de cursos de aperfeiçoamento profissional, na área da tecnologia. Oferecemos cursos de especialização ideais para quem é apaixonado por inovação tecnológica e busca se destacar no mercado de trabalho. Se você busca mais conhecimento e tem interesse em se tornar um profissional nessa área, junte-se a nós!</p><br>

        </div>
            </div>  
        </div>
              
        <div class="col-md-4 text-justify font-weight-normal">
        <form class="valida text-center border border-light p-5" method="post" action="<?=BASEURL?>models/valida.php" novalidate >

        <p class="h4 mb-4">Login</p>

        <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail" required>
        <div class="invalid-feedback">
            Por favor, insira um e-mail válido.
        </div>
        <input type="password" id="senha" name="senha"  class="form-control mb-4" placeholder="Senha" required>

        <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Lembrar senha</label>
        </div>
  
        <button class="btn btn-danger btn-block my-4" type="submit" name="enviar">ENTRAR</button>

     <!--erro de login -->     
              <p class="text-center text-danger">
              <?php if(isset($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset ($_SESSION['erro']);
              }
              ?>
            </p>
     <!--/erro de login -->
            </form>   
            
    <!--cadastro -->
    <!--dentro -->  
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Cadastrar</h4>
            <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>    
        </div>
        
   <form class="validaCadastro" method="post" novalidate>    
      <div class="modal-body mx-3">
        <div class="md-form mb-4">
          <input type="text" value="<?= isset($cadastro['nome']) ? $cadastro['nome']: '' ?>" id="nome" name="nome" class="form-control" required>
          <label>Nome Completo</label>
            <div class="invalid-feedback">
            Informe seu nome completo.
            </div>
        </div>
        <div class="md-form mb-4">
           <input type="email" value="<?= isset($cadastro['email']) ? $cadastro['email']: '' ?>" id="email" name="email" class="form-control" required>
           <label>Email</label>
            <div class="invalid-feedback">
            Por favor, insira um e-mail.
            </div>

        </div>
        <div class="md-form mb-4">
           <input type="text" value="<?= isset($cadastro['rg']) ? $cadastro['rg']: '' ?>" id="rg" name="rg" class="form-control" required>
           <label>RG</label>
           <div class="invalid-feedback">
           Insira seu RG.
           </div>

        </div>
        <div class="md-form mb-4">
            <input type="text" value="<?= isset($cadastro['cpf']) ? $cadastro['cpf']: '' ?>" id="cpf" name="cpf" class="form-control" required>
            <label>CPF</label>
            <div class="invalid-feedback">
             Insira seu CPF.
           </div>
        </div>
        <div class="md-form mb-4">
            <input type="date" value="<?= isset($cadastro['datanasc']) ? $cadastro['datanasc']: '' ?>" id="datanasc" name="datanasc" class="form-control" required>   
            <div class="invalid-feedback">
            Informe a data de seu nascimento.
           </div>
        </div>
        <div class="md-form mb-4">
            <input type="text" value="<?= isset($cadastro['endereco']) ? $cadastro['endereco']: '' ?>" id="endereco" name="endereco" class="form-control" required>
            <label>Endereço</label>
            <div class="invalid-feedback">
            Informe seu endereço.
           </div>
        </div>
        <div class="md-form mb-4">
            <input type="text" value="<?= isset($cadastro['telefone']) ? $cadastro['telefone']: '' ?>" id="telefone" name="telefone" class="form-control" required>
            <label>Telefone</label>
            <div class="invalid-feedback">
            Informe seu telefone.
           </div>
        </div>
        <div class="md-form mb-4">
            <input type="password" value="<?= isset($cadastro['senha']) ? $cadastro['senha']: '' ?>" id="senha" name="senha" class="form-control" required>
            <label>Senha</label>
              <div class="invalid-feedback">
              Insira uma senha.
            </div>
        </div>   
      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-danger" type="submit">enviar</button>
      </div>
       </form>
     <!--/dentro -->  
      </div>
      </div>
      </div>
   
    <div class="text-center">
      <p><br/>Novo por aqui? <a href="" data-toggle="modal" data-target="#modalRegisterForm">Cadastre-se</a></p>   
    </div>

    <!--/cadastro -->      
            
    <!--login adm -->             
            
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Login de Administrador</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
    <!--dentro  -->   

      <div class="modal-body mx-3">
      <div class="md-form mb-4">

        <form class="validaAdm" method="post" action="<?=BASEURL?>models/valida_adm.php" novalidate>
          <input type="email"  id="email" name="email" class="form-control validate" required>
          <label>Email</label>
          <div class="invalid-feedback">
            Por favor, insira um e-mail válido.
           </div>
      </div>
      
      <div class="md-form mb-4">
          <input type="password" id="senha" name="senha" class="form-control validate" required>
          <label>Senha</label>
          <div class="invalid-feedback">
           Insira sua senha.
           </div>
      </div>
      </div>
        
      <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-danger" type="submit" name="enviar">Entrar</button>
      </div>

      <p class="text-center text-danger">
              <?php
              if(isset($_SESSION['erroAdm'])) {
              echo $_SESSION['erroAdm'];
              unset ($_SESSION['erroAdm']);
              }
              ?>
      </p>

         </form>
    </div>
    </div>
    </div>

    <div class="text-center">
      <p>Administrador? <a href="" data-toggle="modal" data-target="#modalLoginForm">Clique aqui</a></p>
    </div>
    </div>
</div>
</div>



