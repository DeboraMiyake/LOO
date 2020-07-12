<?php
//Débora Miyake - 1800272
function cadastraCurso(){
    if (sizeof($_POST) == 0) return;
    
     $nome_curso = $_POST['nome_curso'];
	 $dt_inicio = $_POST['dt_inicio'];
     $dt_termino = $_POST['dt_termino'];
     $hora_inicio =$_POST['hora_inicio'];
     $hora_termino = $_POST['hora_termino'];
	 $conteudo = $_POST['conteudo'];
     $valor = $_POST['valor'];
	 $prof = $_POST['prof'];
    
    $conbd = new mysqli ('localhost','root','', 'basedados');
    $ins = "INSERT INTO curso (nome_curso, dt_inicio, dt_termino, hora_inicio, hora_termino, conteudo, valor, prof) VALUES ('$nome_curso','$dt_inicio','$dt_termino','$hora_inicio','$hora_termino','$conteudo','$valor','$prof')";
    $conbd -> query ($ins);
};

function listaCurso(){
    $condb = new mysqli('localhost','root','','basedados');
    $sel = "SELECT * FROM curso";
    $rs = $condb ->query($sel);
    
    $html = '<table class="table table-striped table-bordered my-3 col-md-12 container-fluid">
        <thead class="elegant-color white-text">
            <tr>
            <th score="col">Nome</th>
            <th score="col">Data de Inicio</th>
            <th score="col">Data de Término</th>
            <th score="col">Horário de Inicio</th>
            <th score="col">Horário de Termino</th>
        	<th score="col">Conteúdo</th>
        	<th score="col">Valor</th>
            <th score="col">Professor</th>
            <th score="col">Opções</th>
            </tr>
        </thead>
        <tbody>';
    
    while($curso = $rs -> fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$curso['nome_curso'].'</td>';
        $html .= '<td>'.date('d/m/Y',strtotime($curso['dt_inicio'])).'</td>';
        $html .= '<td>'.date('d/m/Y',strtotime($curso['dt_termino'])).'</td>';
        $html .= '<td>'.$curso['hora_inicio'].'</td>';
        $html .= '<td>'.$curso['hora_termino'].'</td>';
		$html .= '<td>'.$curso['conteudo'].'</td>';
        $html .= '<td>'.$curso['valor'].'</td>';
		$html .= '<td>'.$curso['prof'].'</td>';
        $html .= '<td>'.getActionButtons($curso['id_curso']).'</td>';
       
        $html .= '</tr>';
    };
    
    $html .= '</tboby></table>';

    return $html;
    
};
function getActionButtons($id){
        $html = '<a href= "../curso/visualizar.php?id='.$id.'"><i class="fas fa-eye mr-3"></i></a>';
        $html .= '<a href= "../curso/editar.php?id='.$id.'"><i class="fas fa-pen-square mr-3"></i></a>';
        $html .= '<a href= "../curso/remover.php?id='.$id.'"><i class="fas fa-trash mr-3"></i></a>';
    return $html;
};


function dadosCurso($id){
    
    $conbd = new mysqli ('localhost','root','', 'basedados');
    $sel = "SELECT * FROM curso WHERE id_curso = $id";
    $rs = $conbd ->query($sel);
    $curso = $rs-> fetch_assoc();
    return $curso;
};
 
function editaCurso($id){
    if (sizeof($_POST) > 0) { 
     $nome_curso = $_POST['nome_curso'];
     $dt_inicio = $_POST['dt_inicio'];
     $dt_termino = $_POST['dt_termino'];
     $hora_inicio =$_POST['hora_inicio'];
     $hora_termino = $_POST['hora_termino'];
     $conteudo = $_POST['conteudo'];
     $valor = $_POST['valor'];
     $prof = $_POST['prof'];
    
    $alt = "UPDATE curso SET nome_curso = '$nome_curso', dt_inicio = '$dt_inicio', dt_termino ='$dt_termino', hora_inicio ='$hora_inicio', hora_termino ='$hora_termino', conteudo ='$conteudo', valor = '$valor', prof = '$prof' WHERE id_curso = $id";
    $conbd = new mysqli('localhost','root','','basedados');
    $conbd -> query($alt);
    }
}
function  removeCurso($id) {
    $del = "DELETE FROM curso where id_curso = $id";
    $conbd = new mysqli ('localhost','root','','basedados');
    $conbd -> query($del);
    header('Location: ../curso/cadastro.php');
}

?>