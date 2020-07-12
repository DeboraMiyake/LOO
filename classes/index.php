<?php
require_once "Pessoa.php";

//require: caso não exista ocorre erro fatal
//include: inclui um arquivo e carrega tudo mesmo com o erro
//require_once: carrega o arquivo uma única vez, para ser usado em n arquivos


//criando o objeto
 $pessoa1 = new Pessoa();
 $pessoa1 -> nome = "Marcia";
 $pessoa1 -> email = "marcia@gmail.com";
 $pessoa1 -> idade = 17;

 $pessoa1 -> escreverDados();