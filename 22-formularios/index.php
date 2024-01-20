<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pegar dados do formulário</title>
</head>
<body>

<?php

/**Validações funções (filter_input - filter_var)
 */

if(isset($_POST['enviar-formulario'])){ // o método isset é uma maneira de veririfar se a variavel atribuida existe 
  $erros = array(); //array de erros 
   if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
    // a variavel recebe um filtro de input onde ele verifica o tipo do input e depois vericada qual campo vem/ o valor da variavel e faz um filtro para validar se aquele valor é o que está sendo atribuido no campo 
     $erros[] = "Idade precisa ser um inteiro";
   endif;

   if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
    $erros[] = "Email inválido";
   }

   if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
    $erros[] = "Peso: precisa ser um valor float";
   }
   
   if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
    $erros[] = "IP inválido";
   endif;

   if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
    $erros[] = "URL inválida";
   }
  
   if(!empty($erros)){
    foreach($erros as $erro){
      echo "<li> $erro </li>";
    }
   }else{
    echo "Seus dados estão corretos";
   }
}
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Idade: <input type="text" name="idade" placeholder="Escreva sua idade"> <br>
  Email: <input type="email" name="email" placeholder="Escreva seu email"> <br>
  Peso: <input type="text" name="peso" id=""> <br>
  IP: <input type="text" name="ip" id=""> <br>
  URL: <input type="text" name="url" id=""> <br>
  <button type="submit" name="enviar-formulario"> Enviar </button>
 </form>
</body>
</html>