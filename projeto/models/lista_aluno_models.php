<?php
//Débora Miyake - 1800272
function cadastraAluno() {
    if (sizeof($_POST) == 0) return;
$nome =  $_POST['nome'];
$email =  $_POST['email'];
$rg =  $_POST['rg'];
$cpf =  $_POST['cpf'];
$datanasc =  $_POST['datanasc'];
$endereco =  $_POST['endereco'];
$telefone =  $_POST['telefone'];
$senha=  $_POST['senha'];
    
//fazendo a conexão com o banco de dados
$conbd = new mysqli ('localhost','root','', 'basedados');
$ins = "INSERT INTO aluno (nome, email, rg, cpf, datanasc, endereco, telefone, senha) VALUES ('$nome','$email','$rg','$cpf','$datanasc','$endereco','$telefone','$senha')";
$conbd -> query ($ins);

 };

function listaAluno() {
    $conbd = new mysqli ('localhost','root','', 'basedados');
    $sel ="SELECT * FROM aluno";
    $rs = $conbd -> query($sel);

    $html = '<table class="table table-striped table-bordered my-5 col-md-8 container-fluid">
        <thead class="elegant-color white-text">
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">RG</th>
            <th scope="col">CPF</th>
            <th scope="col">Data de Nascimento</th>  
            <th scope="col">Endereço</th>  
            <th scope="col">Telefone</th>  
            <th>Opções</th>
            </tr>
        <thead>
           <tbody>';   
  while($aluno = $rs -> fetch_assoc()) {
       $html .='<tr>';
       $html .='<td>'.$aluno['nome'].'</td>';
       $html .='<td>'.$aluno['email'].'</td>';
       $html .='<td>'.$aluno['rg'].'</td>';
       $html .='<td>'.$aluno['cpf'].'</td>';
       $html .='<td>'.date('d/m/Y',strtotime($aluno['datanasc'])).'</td>';
       $html .='<td>'.$aluno['endereco'].'</td>';
       $html .='<td>'.$aluno['telefone'].'</td>';
       $html .='<td>'.getActionButtons($aluno['id']).'</td>';       
       $html .='</tr>';
  }; 
    
 $html .='<tbody></table>';
 return $html;
};

function getActionButtons($id) {
 $html ='<a href="../projeto/visualizar.php?id='.$id.'"<i class="fas fa-eye mr-3"></i></a>'; 
 $html .='<a href="../projeto/remover.php?id='.$id.'"<i class="fas fa-trash mr-3"></i></a>';     
 return $html;  
 }

function dadosAlunos($id) {
    
    $conbd = new mysqli("localhost",'root','','basedados');
    $sel = "SELECT * FROM aluno WHERE id= $id";
    $rs = $conbd ->query($sel);
    $aluno = $rs -> fetch_assoc();
    return $aluno;
}

function removeAlunos($id){
 $del = "DELETE FROM aluno where id = $id";
 $conbd = new mysqli ('localhost','root','','basedados');
 $conbd -> query($del);
 header('Location: listagem_aluno.php');
}
?>