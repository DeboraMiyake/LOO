<?php
function insereUsuario() {
    if (sizeof($_POST) == 0) return;
$nome =  $_POST['nome']; //definido em form_cadastro name
$sobrenome =  $_POST['sobrenome'];
$email =  $_POST['email'];
$senha =  $_POST['senha'];
$telefone =  $_POST['telefone'];
// echo "Os dados inseridos no form são: $nome, $sobrenome, $email, $senha, $telefone";

//fazendo a conexão com o banco de dados
$conbd = new mysqli ('localhost','root','', 'base_dados_loo');
$ins = "INSERT INTO tabusuario (nome, sobrenome, email, senha, telefone) VALUES ('$nome','$sobrenome','$email','$senha','$telefone')";
$conbd -> query ($ins); };

function listaUsuario() {
    $conbd = new mysqli ('localhost','root','', 'base_dados_loo');
    $sel ="SELECT * FROM tabusuario";
    $rs = $conbd -> query($sel);
    
    $html = '<table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Senha</th>
            <th scope="col">Telefone</th>  
            <th></th>
            </tr>
        <thead>
           <tbody>';   
  while($usuario = $rs -> fetch_assoc()) {
       $html .='<tr>';
       $html .='<td>'.$usuario['nome'].'</td>';
       $html .='<td>'.$usuario['sobrenome'].'</td>';
       $html .='<td>'.$usuario['email'].'</td>';
       $html .='<td>'.$usuario['senha'].'</td>';
       $html .='<td>'.$usuario['telefone'].'</td>';
       $html .='<td>'.getActionButtons($usuario['id']).'</td>';    
       $html .='</tr>';
  };
    
 $html .='<tbody></table>';
 return $html;
};

function getActionButtons($id) {
 $html ='<a href="'.BASEURL.'usuario/visualizar.php?id='.$id.'"<i class="fas fa-eye mr-3 text-primary"></i></a>'; // o primeiro não tem o ponto de concatenação pois está vazio, só os proximos
 $html .='<a href="'.BASEURL.'usuario/editar.php?id='.$id.'"<i class="fas fa-pen-square mr-3 text-warning"></i></a>';  
 $html .='<a href="'.BASEURL.'usuario/remover.php?id='.$id.'"<i class="fas fa-trash-alt mr-3 text-danger"></i></a>';     
 return $html;  
 }

function dadosUsuario($id) {
    
    $conbd = new mysqli("localhost",'root','','base_dados_loo');
    $sel = "SELECT * FROM tabusuario WHERE id= $id";
    $rs = $conbd ->query($sel);
    $usuario = $rs -> fetch_assoc();
    return $usuario;
}

function removeUsuario($id){
 $del = "DELETE FROM tabusuario where id = $id";
 $conbd = new mysqli ('localhost','root','','base_dados_loo');
 $conbd -> query($del);

 header('Location: '.BASEURL.'usuario');
}
?>