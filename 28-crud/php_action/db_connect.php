<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "crud";
try {
  $connect = mysqli_connect($serverName, $userName, $password, $dbName);
   mysqli_set_charset($connect, "utf8");
   //echo $dbName;
} catch(error $e){
   $e = "Falha na conexão: " . mysqli_connect_error();
   return $e;
}