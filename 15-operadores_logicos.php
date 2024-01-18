<?php
/**
 * Operadores Lógicos
 * Nos permitem fazer comparações entre expressões 
 * e (&& - and)
 * ou ( || - or) ou exclusivo (xor)
 * negação (!)
 */

 $idade = 21;
 $nome = "Matheus";

 if(($idade == 21) and  /* && */ ($nome == "Matheus")){
  echo  "Verdadeiro " . true;
 }else{
  echo "Falso " . false;
 }

 echo "<br>";

 if(($idade == 20) || /* or */ ($nome == "matheus")){
  echo  "Verdadeiro " . true;
 }else{
  echo "Falso " . false;
 }

 echo "<br>";

 if(($idade == 21) xor ($nome == "M   atheus")){
  echo  "Verdadeiro " . true;
 }else{
  echo "Falso " . false;
 }