<?php

class Funcionario{
    private $name;
    private $salario;

    function __construct($name, $salario){
         
        $this->name = $name;
        $this->salario = $salario;

        if($salario > 0){
            $this->salario = $salario;
        }
        else{
            $this->salario = 0;
        }

    }
    
    public function getNome(){

        return $this->name = $name;

    }

    public function getSalario(){

        return $this->salario = $salario;

    }

    public function exibirDados(){

        echo "Nome: " . $this->name . "<br>";
        echo "Salário: R$" . $this->salario . "<br>";

    }


}

class Gerente extends Funcionario{
    public $departamento;
    private $name;
    private $salario;

    function __construct($name, $salario, $departamento){

        $this->name = $name;
        $this->salario = $salario;
        $this->departamento = $departamento;

        
        if($salario > 0){
            $this->salario = $salario;
        }
        else{
            $this->salario = 0;
        }
      

    }

    public function exibirDados(){

        echo "Nome: " . $this->name . "<br>";
        echo "Salário: R$" . $this->salario . "<br>";
        echo "Departamento: " . $this->departamento . "<br>";


    }
}

$gerente = new Gerente("Nívea Guímel", -500, "Comunicação");
$gerente2 = new Gerente("Alexandre Evangelista", 6000, "Financeiro");

$gerente->exibirDados();
$gerente2->exibirDados();