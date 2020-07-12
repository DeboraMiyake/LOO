<?php
class Funcionario extends Pessoa {
    
    public function atribuiDados(){
        $this->nome = "Débora Miyake";
        $this->idade = "20";
        $this->sexo = "Feminino";
        $this->altura = "1,60m";
        $this->peso = "65kg";
        $this->email = "debora@gmail.com";
    }
}
