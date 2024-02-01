<?php

// conexão com banco de dados
$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "sistema_login";

try {
  $connect = mysqli_connect($serverName, $userName, $password, $db_name);
   //echo "connected to " . $db_name;
} catch(error $e){
   $e = "Falha na conexão: " . mysqli_connect_error();
   return $e;
}



 