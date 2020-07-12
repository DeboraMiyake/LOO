<?php
//Débora Miyake - 1800272
function cadastraMatricula() {
    if (sizeof($_POST) == 0) return;
    
     $nome_aluno = $_POST['nome_aluno'];
	 $curso = $_POST['curso'];
     $data = $_POST['data'];
    
    $conbd = new mysqli ('localhost','root','', 'basedados');
    $ins = "INSERT INTO matricula (nome_aluno, curso, data) VALUES ('$nome_aluno','$curso','$data')";
    $conbd -> query ($ins);
};

function listaMatricula() {
    $condb = new mysqli('localhost','root','','basedados');
    $sel = "SELECT * FROM matricula";
    $rs = $condb ->query($sel);
    
    $html = '<table class="table table-striped table-bordered my-3 col-md-8 container-fluid">
        <thead class="elegant-color white-text">
            <tr>
            <th score="col">Nome</th>
            <th score="col">Curso</th>
            <th score="col">Data de matrícula</th>
            <th score="col">Opções</th>
            </tr>
        </thead>
        <tbody>';
    
    while($matricula = $rs -> fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$matricula['nome_aluno'].'</td>';
        $html .= '<td>'.$matricula['curso'].'</td>';
        $html .= '<td>'.date('d/m/Y',strtotime($matricula['data'])).'</td>';
        $html .= '<td>'.getActionButtons($matricula['id_matricula']).'</td>';
        $html .= '</tr>';
    };
    
    $html .= '</tboby></table>';

    return $html;
    
};
function getActionButtons($id){
        $html = '<a href= "../matricula/visualizar.php?id='.$id.'"><i class="fas fa-eye mr-3"></i></a>';
        $html .= '<a href= "../matricula/editar.php?id='.$id.'"><i class="fas fa-pen-square mr-3"></i></a>';
        $html .= '<a href= "../matricula/remover.php?id='.$id.'"><i class="fas fa-trash mr-3"></i></a>';
    return $html;
};


function dadosMatricula($id){
    
    $conbd = new mysqli ('localhost','root','', 'basedados');
    $sel = "SELECT * FROM matricula WHERE id_matricula = $id";
    $rs = $conbd ->query($sel);
    $matricula = $rs-> fetch_assoc();
    return $matricula;
};
 
function editaMatricula($id){
    if (sizeof($_POST) > 0) { 
     $nome_aluno = $_POST['nome_aluno'];
     $curso = $_POST['curso'];
     $data = $_POST['data'];
    
    $alt = "UPDATE matricula SET nome_aluno = '$nome_aluno', curso = '$curso', data ='$data' WHERE id_matricula = $id";
    $conbd = new mysqli('localhost','root','','basedados');
    $conbd -> query($alt);
    }
}
function removeMatricula($id) {
    $del = "DELETE FROM matricula where id_matricula = $id";
    $conbd = new mysqli ('localhost','root','','basedados');
    $conbd -> query($del);
    header('Location: ../matricula/listagem_matricula.php');
}

?>