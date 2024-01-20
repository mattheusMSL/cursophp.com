<?php
/*
 * funções para Strings
 * strtoupper
 * strtolower
 * substr
 * str_pad
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */

 $name = "Matheus Santos Lopes";
 $newName = strtoupper($name);
 echo $newName;

 echo "<hr>";

 $msg = "Hello world";
 echo substr($msg, 0,5);

 echo "<hr>";

 $object = "mouse";
 $newObject = str_pad($object, 9, "*", STR_PAD_BOTH /* STR_PAD_RIGHT or STR_PAD_LEFT */);
 echo $newObject;
 
 echo "<hr>";

 $string = str_repeat("Sucesso! ", 5);
 echo $string;

 echo "<hr>";

 $mensagem = "Olá mundo";
 echo strlen($mensagem);

 echo "<hr>";

 $texto = "A seleção Argentina será campeã da copa do mundo de 2018";
 $novoTexto = str_replace("Argentina", "Brasileira", $texto);
 echo $novoTexto;

 echo "<hr>";

 echo strpos($texto, "copa");



