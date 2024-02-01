<?php
require_once 'db_connect.php';

session_start();

function clear($input){
  global $connect;
  $var = mysqli_real_escape_string($connect, $input);
  $var = htmlspecialchars($var);
  return $var;
} 

if(isset($_POST['btn-cadastrar'])):  
  $nome = clear($connect, $_POST['nome']);
  $sobrenome = clear($connect, $_POST['sobrenome']);
  $email = clear($connect, $_POST['email']);
  $idade = clear($connect, $_POST['idade']);

 $sql = "INSERT INTO clientes (nome,sobrenome,email,idade) VALUES ('$nome', '$sobrenome', '$email', '$idade') ";
 
  if(mysqli_query($connect, $sql)){
    mysqli_close($connect);
    $_SESSION['msg'] = "Cadastrado com sucesso";
    header("Location: ../index.php?");
  }else{
    $_SESSION['msg'] = "Erro ao cadastrar!";
    header("Location: ../index.php?");
  }
 endif;