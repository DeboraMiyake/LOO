<!--Debora Miyake 1800272-->
<div class="container">
 <div class="row">
 <div class="col-md-8 mx-auto">
   <!-- Default form register -->
<form method ="POST" action="#" class="text-center border border-light p-5">

    <p class="h4 mb-4">Cadastre o produto:</p>
    
    <input type="text" value="<?= isset($produto['nome']) ? $produto['nome']: '' ?>" id="nome" name="nome" class="form-control mb-4" placeholder="Nome">
    <input type="text" value="<?= isset($produto['marca']) ? $produto['marca'] : '' ?>" id="marca" name="marca"class="form-control mb-4" placeholder="Marca">
    
    <div class="form-row mb-4">
    <div class="col">
     <input type="text" value="<?= isset($produto['cor']) ? $produto['cor'] : '' ?>" id="cor" name="cor" class="form-control" placeholder="Cor">
    </div>
    <div class="col">
    <input type="text" value="<?= isset($produto['quantidade']) ? $produto['quantidade'] : '' ?>" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade">
    </div>
    </div>   
     
    <div class="form-row mb-4">   
    <div class="col">
    <input type="text" value="<?= isset($produto['tamanho']) ? $produto['tamanho'] : '' ?>" id="tamanho" name="tamanho" class="form-control mb-4" placeholder="Tamanhos disponíveis">
    </div>
     <div class="col">
    <input type="text" value="<?= isset($produto['preco']) ? $produto['preco'] : '' ?>" id="preco" name="preco" class="form-control mb-4" placeholder="Preço">
    </div>
    </div>
    <button class="btn btn-elegant my-4 btn-block" type="submit">Cadastrar <i class="fas fa-magic ml-1"></i></button>
</form>
 </div>
 </div>
</div>