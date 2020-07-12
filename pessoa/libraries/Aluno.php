<?php
class Aluno extends Pessoa {
    public $turma;
    
    public function atribuiDados(){
        $this->nome = "Daniela Miranda";
        $this->email = "daniela@gmail.com";
        $this->idade = "18";
        $this->turma = "3°Semestre";
        $this->sexo = "Feminino";
    }
    
}

