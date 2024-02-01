<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Multiplo</title>
</head>
<body>

<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST['enviar-form'])){
  // var_dump($_FILES);
   $allowedFormats = array("png", "jpeg", "jpg", "gif");
   $filesQuantity = count($_FILES["arquivo"]["name"]);
   $countable = 0;

    while($countable < $filesQuantity ){
      $extension = pathinfo($_FILES["arquivo"]["name"][$countable], PATHINFO_EXTENSION);

      if (in_array($extension, $allowedFormats)) {
         $folder = "arquivos/";
         $temporary = $_FILES["arquivo"]["tmp_name"][$countable];
         $newName = uniqid().".$extension";

         if(move_uploaded_file($temporary, $folder.$newName)){
           echo  "Upload feito com sucesso para $folder$newName <br>";
         }else{
           echo "Erro, ao enviar o arquivo $temporary <br>";
         }
         
      }else{
        echo "$extension não permitida";
      }

      $countable++;
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
  <input type="file" name="arquivo[]" multiple> <br>
  <input type="submit" name="enviar-form">
</form>

  
</body>
</html>