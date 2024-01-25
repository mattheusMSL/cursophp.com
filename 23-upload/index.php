<html>
  <body>
    <?php
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(isset($_POST['enviar-form'])):
       $allowedFormats = array("png", "jpeg", "jpg", "gif");
       $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
       if(in_array($extensao, $allowedFormats)){

        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

          if(move_uploaded_file($temporario, $pasta.$novoNome)){
            $mensagem = "Upload feito com sucesso";
          }else{
            $mensagem = "Erro, não foi possivel fazer o upload!";
          }
       }else{
        $mensagem = "Formato inválido";
       }
       echo $mensagem;
    endif;

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
      <input type="file" name="arquivo"> <br>
      <input type="submit" name="enviar-form">
      <img src="./arquivos/65ac550321b0e.png" alt="imagens">
    </form>
  </body>
</html>


