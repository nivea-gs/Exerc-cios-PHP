<?php
// Atividade 1
echo "Atividade 1: <br><br>";

class Cachorro{
    public $nome;
    public $pelagem;
    public $raca;

    function __construct($nome,$pelagem,$raca){

        $this->nome = $nome;
        $this->pelagem = $pelagem;
        $this->raca = $raca;

    }
}

$like = new Cachorro("Like", "Branca", "Shih Tzu/Poodle");

echo "O nome do meu cachorro é $like->nome, ele tem a pelagem $like->pelagem e suas raças foram misturadas entre $like->raca! <br>";


echo "<br>";


// Atividade 2
echo "Atividade 2: <br><br>";
class Usuario{
    private $nome;
    private $email;
    private $senha;

    function __construct($nome,$email,$senha){

        if(strlen($senha < 6)){
            echo "Senha Inválida <br>";
        }

        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

    }

    public function exibirrDados(){
        echo "Nome: $this->nome <br>";
        echo "Email: $this->email <br>";
    }

    public function senhaValida(){
        if(strlen($this->senha) >= 6){
            return "Senha Válida";
        }
        else{
            return "Senha Inválida";
        }
    }
}


$user = new Usuario("Mike Ross", "mikeross@gmail.com", "nivea");
$user->exibirrDados();
echo $user->senhaValida();


echo "<br>";


// Atividade 3
echo "Atividade 3: <br><br>";

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

$gerente = new Gerente("Nívea Guímel", 8500, "Comunicação");
$gerente2 = new Gerente("Alexandre Evangelista", 6000, "Financeiro");

$gerente->exibirDados();
$gerente2->exibirDados();


echo "<br>";


// Atividade 4
echo "Atividade 4: <br><br>";

class Produto{
    private $nomeProduto;
    private $precoProduto;

    public function __construct($nomeProduto, $precoProduto){

        $this->nomeProduto = $nomeP;
        $this->precoProduto = $precoP;

        if($precoP <= 0){
            $this->precoProduto = "Preço Inválido";
        }
        else{
            $this->precoProduto = $precoP;
        }

    }

    public function exibirInfoProduto(){

        echo "Produto: " . $this->nomeProduto . "<br>";
        echo "Preço: " . $this->precoProduto . "<br>";

    }

    public function getNomeProduto(){

        return $this->nomeProduto;

    }

    public function getPrecoProduto(){

        return $this->precoProduto;

    }
}

class ProdutoPerecivel extends Produto{
    private $validade;

    public function __construct($nomeP, $precoP, $validade){

        $this->nomeProduto = $nomeP;
        $this->precoProduto = $precoP;
        $this->validade = $validade;

        if($precoP <= 0){
            $this->precoProduto = "Preço Inválido";
        }
        else{
            $this->precoProduto = $precoP;
        }

    }

    public function exibirInfo(){

        echo "Produto: " . $this->nomeProduto . "<br>";
        echo "Preço: " . $this->precoProduto . "<br>";
        echo "Validade: " . $this->validade . "<br><br>";

    }
}


$produto1 = new ProdutoPerecivel("Iogurte", 5.99, "28/08/25");
$produto2 = new ProdutoPerecivel("Milho de Pipoca", -3, "10/08/25");


$produto1->exibirInfo();
$produto2->exibirInfo();
?>