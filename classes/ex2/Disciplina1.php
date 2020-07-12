<?php
require_once "Disciplina.php";

 $disciplina1 = new Disciplina();
 $disciplina1 -> nome = "Matemática";
 $disciplina1 -> area = "exatas";
 $disciplina1 -> estudo = "quantidades, medidas, espaços, estruturas, variações e estatísticas";

 $disciplina1 -> escreverDados();