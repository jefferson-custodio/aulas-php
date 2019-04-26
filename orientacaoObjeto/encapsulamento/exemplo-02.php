<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;// apenas as mesmas class e class extendidas terão acesso
    private $senha = "123456"; // nivel maximo de segurança nada herdara essa informação fora da class

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
    
}

class Programador extends Pessoa {
    public function verDados(){

        echo get_class($this) . "<br>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>"; // não é possivel acessar senha pq ela esta privada na class pessoa
    }
}

$objeto = new Programador();

//echo $objeto->senha . "<br>";

$objeto->verDados();

?>