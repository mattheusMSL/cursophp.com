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

  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
     $erros[] = "Idade precisa ser um valor inteiro!";
    endif;

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
      $erros[] = "email inválido!";
    endif;

  $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
   if(!filter_var($url, FILTER_VALIDATE_URL)){
     $erros[] = "url inválida!";
   }

  if(!empty($erros)){
    foreach($erros as $erro):
      echo "<li> $erro </li>";
    endforeach;
  }else{
    echo "Seus dados estão corretos!";
  }
 }
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Nome: <input type="text" name="nome" placeholder="Digite seu nome"> <br>
  Idade: <input type="text" name="idade" placeholder="Digite sua idade"> <br>
  Email: <input type="email" name="email" placeholder="Digite seu email"> <br>
  URL: <input type="text" name="url" placeholder="Digite uma URL..."> <br>
  <button type="submit" name="enviar-formulario"> Enviar </button>
 </form>
</body>
</html>