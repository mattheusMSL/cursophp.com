<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])){
  $id = mysqli_real_escape_string($connect, $_POST['id']);
  $sql = "DELETE FROM clientes WHERE id = '$id'";
    var_dump($sql);
  if(mysqli_query($connect, $sql)){
    $_SESSION['msg'] = "Deletado com sucesso!";
    header("Location: ../index.php?");
  }else{
    $_SESSION['msg'] = "Erro ao deletar!";
    header("Location: ../index.php?");
  }
}