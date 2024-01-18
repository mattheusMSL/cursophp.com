<?php
// Constantes
define('NOME', 'Matheu Lopes');
define('IDADE', 21);
define('ALTURA', 1.74);
define('PROGRAMADOR', true);
define('hobbies', ['cozinhar', 'andar de skate', 'trabalhar com marketing']);

function showName(){
  echo NOME;
}

showName();
echo '<br>';

var_dump(NOME, IDADE, ALTURA, PROGRAMADOR, hobbies);