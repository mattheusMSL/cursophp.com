<?php 

for($contador = 0; $contador <= 10 ; $contador++){
 echo $contador . "<br>";
}

echo "<hr>";

for($contador = 0; $contador <= 10; $contador++):
   echo "Contador é $contador <br>";
endfor;

echo "<hr>";

$colour = array("First" => "red", "Second" => "yellow", "Third"=> "orange");
foreach($colour as $indece => $dado):
    echo $indece . " colour is " . $dado . "<br>";
endforeach;
