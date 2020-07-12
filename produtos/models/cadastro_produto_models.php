<?php
//Debora Miyake 1800272
function insereProduto() {
    if (sizeof($_POST) == 0) return;
$nome =  $_POST['nome'];
$marca =  $_POST['marca'];
$cor =  $_POST['cor'];
$quantidade =  $_POST['quantidade'];
$tamanho =  $_POST['tamanho'];
$preco =  $_POST['preco'];

//fazendo a conexão com o banco de dados
$conbd = new mysqli ('localhost','root','', 'base_dados_loo');
$ins = "INSERT INTO produto (nome, marca, cor, quantidade, tamanho, preco) VALUES ('$nome','$marca','$cor','$quantidade','$tamanho','$preco')";
$conbd -> query ($ins); };

function listaProduto() {
    $conbd = new mysqli ('localhost','root','', 'base_dados_loo');
    $sel ="SELECT * FROM produto";
    $rs = $conbd -> query($sel);
    
    $html = '<table class="table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Marca</th>
            <th scope="col">Cor</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Tamanho</th>  
            <th scope="col">Preço</th>  
            <th></th>
            </tr>
        <thead>
           <tbody>';   
  while($produto = $rs -> fetch_assoc()) {
       $html .='<tr>';
       $html .='<td>'.$produto['nome'].'</td>';
       $html .='<td>'.$produto['marca'].'</td>';
       $html .='<td>'.$produto['cor'].'</td>';
       $html .='<td>'.$produto['quantidade'].'</td>';
       $html .='<td>'.$produto['tamanho'].'</td>';
       $html .='<td>'.$produto['preco'].'</td>';
       $html .='<td>'.getActionButtons($produto['id']).'</td>';    
       $html .='</tr>';
  }; 
    
 $html .='<tbody></table>';
 return $html;
};

function getActionButtons($id) {
 $html ='<a href="'.BASEURL.'produtos/visualizar.php?id='.$id.'"<i class="fas fa-eye mr-3"></i></a>'; 
 $html .='<a href="'.BASEURL.'produtos/editar.php?id='.$id.'"<i class="fas fa-pencil-alt mr-3"></i></a>';  
 $html .='<a href="'.BASEURL.'produtos/remover.php?id='.$id.'"<i class="fas fa-trash mr-3"></i></a>';     
 return $html;  
 }

function dadosProduto($id) {
    
    $conbd = new mysqli("localhost",'root','','base_dados_loo');
    $sel = "SELECT * FROM produto WHERE id= $id";
    $rs = $conbd ->query($sel);
    $produto = $rs -> fetch_assoc();
    return $produto;
}

function removeProduto($id){
 $del = "DELETE FROM produto where id = $id";
 $conbd = new mysqli ('localhost','root','','base_dados_loo');
 $conbd -> query($del);

 header('Location: '.BASEURL.'produtos');
}
//Debora Miyake 1800272
?>