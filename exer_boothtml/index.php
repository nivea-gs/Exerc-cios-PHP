<?php
// Prática 1
echo "Prática 1: <br><br>";

class Car{
   public $cor;
   public $marca;
   public $modelo;

   public function carro(){
      echo "$this->modelo é um modelo antigo! <br>";
      echo "$this->cor é a cor desse carro <br>";
      echo "Sua marca é a $this->marca <br>";
   }
}

$carro = new Car();
$carro->cor = "Azul";
$carro->marca = "Chevrolet";
$carro->modelo = "Chevrolet Tracker - SUV";

$carro->carro();

echo "<br>";






// Atividade 1
echo "Atividade 1: <br><br>";

class Cachorro{
   public $nome;

   public function latirEAndar(){
      echo "$this->nome é um cachorro e anda bastante <br>";
      echo "$this->nome é um cachorro e corre muiiito! <br>";
   }
}

$cachorr = new Cachorro();
$cachorr->nome = "Like";

$cachorr->latirEAndar();

echo "<br>";




// Atividade 2
echo "Atividade 2: <br><br>";

class Pessoa{
    public $nome;
    public $idade;

 public function andar($km){
    echo " e andou $km km! <br>";
}

}

$nivea = new Pessoa();
$nivea->nome = "Nívea";
$nivea->idade = 22;

   echo "O nome dela é $nivea->nome ela tem $nivea->idade anos";

$nivea->andar(4);

echo "<br>";




// Atividade 3
echo "Atividade 3: <br><br>";

class Carroo{
   public $modelo;
   public $velocidade_maxima;

   
   public function setVelocidadeMaxima($setv){
      $this->velocidade_maxima = $setv;
   }    

   public function getVelocidadeMaxima(){
      $this->velocidade_maxima;

      echo "A velocidade máxima é $setv km/h.";
   }

}

$chevrolet = new Carroo();
$chevrolet->modelo ="Chevrolet Tracker - SUV";
$chevrolet->setVelocidadeMaxima(320);

echo "O modelo do carro é $chevrolet->modelo e sua velocidade máxima é $chevrolet->velocidade_maxima km/h.";

echo "<br>";


// Atividade 4
echo "Atividade 4: <br><br>";

class Produto{
   public $nome;
   public $preco;
   
   public function exibirDetalhes(){
      echo "Produto: $this->nome | Preço: $this->preco";
   }

}

$calcaM = new Produto();
$calcaM->nome ="Calça Moletom";
$calcaM->preco ="80 <br>";

$calcaM->exibirDetalhes();

echo "<br>";


// Atividade 5
echo "Atividade 5: <br><br>";

class Carro{
   public $modelo;
   public $velocidade;

   public function acelerar($valor){
      $this->velocidade = $valor;
   }

   public function mostrarVelocidade(){
      echo "Velocidade atual do $this->modelo é: $this->velocidade km/h <br>";
   }
}

$rapidez = new Carro();
$rapidez->modelo = "Chevrolet Tracker - SUV";
$rapidez->acelerar(85);

$rapidez->mostrarVelocidade();

echo "<br>";


// Atividade 6
echo "Atividade 6: <br><br>";

class Produtto{
   private $nome;

   public function definirNome($name){
      $this->nome = $name;
   }

   public function mostrarNome(){
      echo "O nome do produto é $this->nome! <br>";
   }
}

$prod = new Produtto();
$prod->definirNome("Jogo de Panelas");

$prod->mostrarNome();

echo "<br>";


// Atividade 7
echo "Atividade 7: <br><br>";

class Usuario{
   protected $email;

   public function definirEmail($valorDoEmail){
      $this->email = $valorDoEmail;
   }

   public function mostrarEmail(){
      echo "O seu E-mail é: $this->email! <br>";
   }
}

$login = new Usuario();
$login->definirEmail("niveaguimel13@gmail.com");

$login->mostrarEmail();

echo "<br>";


// Atividade 8
echo "Atividade 8: <br><br>";

class ContaBancaria{
   private $saldo;

   public function depositar($valorr){
      $this->saldo = $valorr;
   }
   public function verSaldo(){
      echo "Saldo da sua conta: R$$this->saldo. <br>";
   }
}

$banco = new ContaBancaria();
$banco->depositar(36000);

$banco->verSaldo();


echo "<br>";


// Atividade 9
echo "Atividade 9: <br><br>";

class Humano{
   public $nome;
   public $idade;

   public function falar(){
      echo "Meu nome é $this->nome e tenho $this->idade anos! <br>";
   }
}

class Professor extends Humano{
   public $disciplina;
   public $profissao;

   public function teacher(){
      echo "Sou $this->profissao e ensino $this->disciplina";
   }

}

$david = new Professor();

$david->nome = "David Magno";
$david->idade = 28;
$david->disciplina = "Matemática";
$david->profissao = "Professor";

$david->falar();
$david->teacher();
?>