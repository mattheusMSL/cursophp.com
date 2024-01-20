<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pegar dados do formulário</title>
</head>
<body>

<?php

/** Sanitização funções (filter_input - filter_var)
 *  FILTER_SANITIZE_SPECIAL_CHAR para string
 *  FILTER_SANITEZE_NUMBER_INT para int
 */

 if(isset($_POST['enviar-formulario'])){
  $erros = array();

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  echo $nome . "<br> ";

  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
  echo $idade . "<br> ";

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  echo $email . "<br> ";

  $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
  echo $email . "<br> ";

  if(!Empty($erros)){
    foreach($erros as $erro):
      echo "<li> $erro </li>";
    endforeach;
  }else{
    echo "Seus dados estão corretos!";
  }

 }
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Nome: <input type="text" name="nome" placeholder="Escreva seu nome"> <br>
  Idade: <input type="number" name="idade" placeholder="Escreva sua idade"> <br>
  Email: <input type="email" name="idade" placeholder="Escreva seu email"> <br>
  Peso: <input type="text" name="peso" id=""> <br>
  URL: <input type="text" name="url" id=""> <br>
  <button type="submit" name="enviar-formulario"> Enviar </button>
 </form>
</body>
</html>