<?php
require_once "Aplicativo.php";

 $aplicativo1 = new Aplicativo();
 $aplicativo1 -> nome = "Spotify";
 $aplicativo1 -> linguagem = "Python, Java e C++";
 $aplicativo1 -> tipo = "streaming de música";

 $aplicativo1 -> escreverDados();