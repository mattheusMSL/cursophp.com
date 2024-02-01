<?php

$senha = "1234567";

$novasenha = base64_encode($senha);
echo "base64: " . $novasenha . "<br>";
echo "Sua senha é: " . base64_decode($novasenha);

echo "<hr>";

echo "md5: " . md5($senha) . "<br>";
echo "sha1: " . sha1($senha);

echo "<hr>";

$password = "123456";
$dbPassword = '$2y$12$RsNdrIrLfOFi72mjn4YHWuJ4FxPUD8zCoK3wLV7Nsh.5MUtgvUA2O';
if(password_verify($password, $dbPassword)):
  echo "senha válida";
else:
  echo "senha inválida";
endif;

// $options = [ 
//   'cost' => 10
// ];

// $securedPassword = password_hash($password, PASSWORD_DEFAULT, $options);
// echo $securedPassword;