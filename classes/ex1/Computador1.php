<?php
require_once "Computador.php";

 $computador1 = new Computador();
 $computador1 -> marca = "Lenovo";
 $computador1 -> processador = "Intel Core 3.20GHz";
 $computador1 -> modelo = "i5-4570";

 $computador1 -> escreverDados();