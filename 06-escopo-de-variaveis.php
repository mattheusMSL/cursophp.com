<?php 
$nome = "Matheus Santos Lopes";
$a = 1;
$b = 2;
$c = 3;

function exibeNome(){
  global $nome;
  echo $nome ;
}

exibeNome();
echo '<hr>';

///////////////////////////////

function exibeCidade(){
  global $cidade;
  $cidade = "Foz do iguaçu";
  echo $cidade;
}

exibeCidade();
// echo $cidade;
echo '<hr>';

///////////////////////////////

function soma(){
echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

}

soma();
echo '<hr>'

?>