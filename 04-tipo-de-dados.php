<?php
/************** Escalaveis **************/ 

// string
$nome = "";
var_dump($nome);

if(is_string($nome)):
  echo "É uma string!";
else:
  echo "Não é uma string!";
endif; 
echo "<hr>";

// int
$idade = 21;
var_dump($idade);
if(is_int($idade)):
  echo "É um  int";
else:
  echo "Não é int";
endif;
echo "<hr>";

// float
$altura = 1.74;
var_dump($altura);
if(is_float($altura)):
  echo "É um float";
else:
  echo "Não é float";
endif;
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
  echo "É um boolean";
else:
  echo "Não é boolean";
endif;
echo "<hr>";

/************** Composta **************/ 

// array
$carros = array('
{
  "audi": { 
    "carros":
    "tt",
    "r8" 
  }
    }', "Volkswagen t-cross", "porsche cayenne",21, 1.74, true);
var_dump($carros);
if(is_array($carros)):
  echo "É um array!";
else:
  echo "Não é um array";
endif;
echo "<hr>";


// Object

class Cliente {
   public $nome;
   public function atribuirNome($nome){
    $this->$nome = $nome;
   }
}

$cliente = new Cliente();
$cliente->atribuirNome("Matheus");

var_dump($cliente);
 $isObject = is_object($cliente) ? "É um objeto!" : "Não é um objeto!";
 echo $isObject;
echo "<hr>";


// null

$cidade = NULL;
var_dump($cidade);

?>