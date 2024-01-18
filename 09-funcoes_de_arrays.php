<?php 

$nomes = array('Matheus', 'João', 'Sofia', 'Felipe');

if(is_array($nomes)):
  echo "É um array";
else:
  echo "Não é array";
endif;

echo "<hr>";

echo in_array("Matheus", $nomes) ?  "Existe no array" : "Não existe no array";

echo "<hr>";

$keys = array_keys($nomes);
print_r($keys);

echo "<hr>";

$values = array_values($nomes);
print_r($values);

echo "<hr>";

$carros = ["volkswagen", "audi", "bmw"];
$motos = array("Pop100", "yamaha cb", "fazer fz");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<hr>";

array_pop($carros);
print_r($carros);

echo "<hr>";

array_shift($motos);
print_r($motos);

echo "<hr>";

$frutas = array("Uva", "Maçã", "laranja");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Manga", "Banana");
print_r($frutas);

echo "<br>";

array_push($frutas, "Kiwi", "Perá");
print_r($frutas);

echo "<hr>";

$lista = ["Primiero", "Segundo", "Terceira", "Quarto"];
$listaNomes = array_combine($lista, $nomes);
print_r($listaNomes);

echo "<hr>";

$num = array(1,2,5,10,20);
$somaNum = array_sum($num);
echo $somaNum;

echo "<hr>";

$data = "17/01/2024";
$novaData = explode("/", $data);
print_r($novaData);

echo "<hr>";

$frase = array("Meu", "nome", "não", "é", "Matheus");
$arr = implode(" ", $frase);
print_r($arr);

