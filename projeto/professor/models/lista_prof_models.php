<?php
//Débora Miyake - 1800272

function cadastraProf(){
    if (sizeof($_POST) == 0) return;
    
     $nome_prof = $_POST['nome_prof'];
	 $telefone = $_POST['telefone'];
     $valor = $_POST['valor'];
     $materia =$_POST['materia'];

    $conbd = new mysqli ('localhost','root','', 'basedados');
    $ins = "INSERT INTO prof (nome_prof, telefone, valor, materia) VALUES ('$nome_prof','$telefone','$valor','$materia')";
    $conbd -> query ($ins);
};

function listaProf(){
    $condb = new mysqli('localhost','root','','basedados');
    $sel = "SELECT * FROM prof";
    $rs = $condb ->query($sel);
    
    $html = '<table class="table table-striped table-bordered my-5 col-md-8 container-fluid">
        <thead class="elegant-color white-text">
            <tr>
            <th score="col">Nome</th>
            <th score="col">Telefone</th>
        	<th score="col">Valor</th>
            <th score="col">Materia</th>
            <th score="col">Opções</th>
            </tr>
        </thead>
        <tbody>';
    
    while($prof = $rs -> fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$prof['nome_prof'].'</td>';
		$html .= '<td>'.$prof['telefone'].'</td>';
        $html .= '<td>'.$prof['valor'].'</td>';
		$html .= '<td>'.$prof['materia'].'</td>';
        $html .= '<td>'.getActionButtons($prof['id_prof']).'</td>';
       
        $html .= '</tr>';
    };
    
    $html .= '</tboby></table>';

    return $html;
    
};
function getActionButtons($id){
        $html = '<a href= "../professor/visualizar.php?id='.$id.'"><i class="fas fa-eye mr-3"></i></a>';
        $html .= '<a href= "../professor/editar.php?id='.$id.'"><i class="fas fa-pen-square mr-3"></i></a>';
        $html .= '<a href= "../professor/remover.php?id='.$id.'"><i class="fas fa-trash mr-3"></i></a>';
    return $html;
};


function dadosProf($id){
    
    $conbd = new mysqli ('localhost','root','', 'basedados');
    $sel = "SELECT * FROM prof WHERE id_prof = $id";
    $rs = $conbd ->query($sel);
    $prof = $rs-> fetch_assoc();
    return $prof;
};
 
function editaProf($id){
    if (sizeof($_POST) > 0) { 
     $nome_prof = $_POST['nome_prof'];
     $telefone = $_POST['telefone'];
     $valor = $_POST['valor'];
     $materia =$_POST['materia'];
    
    $alt = "UPDATE prof SET nome_prof = '$nome_prof', telefone = '$telefone', valor ='$valor', materia ='$materia' WHERE id_prof = $id";
    $conbd = new mysqli('localhost','root','','basedados');
    $conbd -> query($alt);
    }
}
function  removeProf($id) {
    $del = "DELETE FROM prof where id_prof = $id";
    $conbd = new mysqli ('localhost','root','','basedados');
    $conbd -> query($del);
    header('Location: ../professor/listagem_prof.php');
}

?>