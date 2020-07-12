<?php
require_once "Carro.php";

 $automovel1 = new Automovel();
 $automovel1 -> nome = "Captur";
 $automovel1 -> marca = "Renault";
 $automovel1 -> ano = "2019";
 $automovel1 -> placa = "CCH9173";

 $automovel1 -> escreverDados();



 $motor1 = new Motor();
 $motor1 -> tipo = "1.6 SCe Automático de 120/118 cv";
 $motor1 -> componentes = "4 unidades de cilindros, alternador e bateria";
 $motor1 -> estado = "1.597 cm³";

 $motor1 -> escreverDados();



 $roda1 = new Rodas();
 $roda1 -> diametro = "17";
 $roda1 -> largura = "17cm";
 $roda1 -> parafusos = "4";

 $roda1 -> escreverDados();
