<?php
// Arrays

$nomes = array(1 => 'Matheus', 'Anna', 'Gilmara');
$nomes[] = 'José';
$nomes[10] = 'Sofia';
print_r($nomes);
echo '<br>';

$jobs = array();
$jobs[] = 'Programador';
$jobs[] = 'Editor';
$jobs[] = 'Arquiteto';
$jobs[] = 'Cozinheiro';
echo $jobs[2];
echo '<br>';


$carros = ['audi', 'bmw', 'volkswagen'];
print_r($carros);
echo '<hr>';

// Count
echo count($carros);
echo '<br>';
// or
$countCars = count($carros);
echo $countCars;
echo '<hr>';

// foreach

foreach($jobs as $job){
   echo $job . ', ';
}


// Array associativos

$pessoa = array("nome" => "Matheus", "idade" => 21, "altura" => 1.74);
echo $pessoa["nome"] . ", ";
$pessoa["peso"] = 82;
echo $pessoa["peso"];


foreach($pessoa as $indice => $dados){
  echo $indice . ": " . $dados . "<br>";
}

echo '<hr>';
// Arrays Multidimensionais

$times = array(
  "cariocas" => array("Campeao" => "Vasco", "vice" => "Flamengo", "terceiro" =>"botafogo"),
  "paulistas" => array("quarto" => "santos", "quinto" => "sao paulo", "sexto" => "palmeiras"),
  "baianos" => array("setimo" => "bahia", "oitavo" => "vitoria", "nono" => "itabuna")
);

  foreach($times['cariocas'] as $indice => $dados){
    echo $indice . ": " . $dados . "<br>";
  }
  foreach($times['paulistas'] as $indice => $dados){
    echo $indice . ": " . $dados . "<br>";
  }
  foreach($times['baianos'] as $indice => $dados){
    echo $indice . ": " . $dados . "<br>";
  }
?>

