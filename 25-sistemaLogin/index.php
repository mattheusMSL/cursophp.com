<?php

// conexão
require_once('db_connect.php');

// Sessão
session_start();
// Botão enviar

if(isset($_POST['btn-entrar'])){
  $erros = array();
  $login = mysqli_escape_string($connect, $_POST['login']);
  $password = mysqli_escape_string($connect, $_POST['password']);
  
  if(empty($login) or empty($password)):
    $erros[] = "<li> O campo login/senha precisa ser preenchido! </li> <br>";
  else:
     $sql = "SELECT login FROM usuarios WHERE login = '$login'";
     $result = mysqli_query($connect, $sql);

     if(mysqli_num_rows($result) > 0){
         $password = md5($password);
         $sql = "SELECT * FROM usuarios WHERE login = '$login' AND password = '$password'";
         $result = mysqli_query($connect, $sql);
            if(mysqli_num_rows($result) == 1){
              $dados = mysqli_fetch_array($result);
              mysqli_close($connect);
              $_SESSION['logado'] = true;
              $_SESSION['id_usuario'] = $dados['id'];
              header('Location: home.php');
            }else{
              $erros[] = "<li> Usuário e senha não conferem </li> <br>";
            }
     }else {
       $erros[] = "<li> Usuário inexistente </li>";
     }
  endif;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema login</title>
  <style>
    li{
      list-style: none;
      color: red;
      font-size: 25px;
    }
  </style>
</head>
<body>
  <h1>Login</h1>
  <?php
    if(!empty($erros)){
      foreach($erros as $erro){
        echo $erro;
      }
    }
  
  ?>
  <form action="<?php echo $_session['PHP_SELF']; ?>" method="post">
    login: <input type="text" name="login"> <br>
    Senha: <input type="password" name="password"> <br>
    <button type="submit" name="btn-entrar"> Entrar </button>
  </form>
  
</body>
</html>

