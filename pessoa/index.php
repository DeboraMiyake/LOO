<?php

include '../config/constants.php';
    
include APPPATH.'../views/header.php';
include APPPATH.'../views/navbar.php';
include 'libraries/Pessoa.php';
include 'libraries/Funcionario.php';
include 'libraries/Aluno.php';

$funcionario = new Funcionario(); //objeto
$funcionario -> atribuiDados();
$funcionario -> exibe();

$aluno = new Aluno(); //objeto
$aluno -> atribuiDados();
$aluno -> exibeDados();

include APPPATH.'../views/rodape.php';    
include APPPATH.'../views/footer.php';