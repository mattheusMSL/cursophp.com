<?php
/* 
condicionais
if
else
elseif
*/

$num = "10";

if($num === 10){
  echo "É igual a 10";
}elseif ($num === "10") {
  echo "É o valor de 10, porém o valor é um string!";
}else{
  echo "É diferente de 10";
} 

echo "<hr>"; 

$media = 7;

echo $media >= 7 ? "Aprovado" : "Reprovado";

echo "<hr>"; 

/*
 * condicionais 
 * switch
 * case
 */

 $colour = "purple";

 switch($colour){

     case "red":
      echo "Your favourite colour is red";
     break;

     case "purple":
      echo "Your favourite colour is purple";
     break;

     case "blue":
      echo "Your favourite colour is blue";
     break;

     default: 
     echo "Write your favourite colour!";
 }
