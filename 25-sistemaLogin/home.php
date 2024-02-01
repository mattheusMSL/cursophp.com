<?php 
require_once('db_connect.php');

session_start();

if(!isset($_SESSION['logado'])):
   header("Location: index.php");
endif;

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result) {
    $dados = mysqli_fetch_array($result);

    if ($dados) {
        // Data found, do something with it
        echo "Data found: " . $dados['nome'];
    } else {
        // No data found
        echo "No data found for the specified user ID.";
    }
} else {
    // Error in executing the prepared statement
    echo "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($connect);

if (!$result) {
  die("Error in SQL query: " . mysqli_error($connect));
}

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página restrita</title>
</head>
<body> 
  <h1>Página do usuário</h1>
  <?php 
    if ($dados) {
        echo "<p>Olá, " . $dados['nome'] . "</p>";
    } else {
        echo "<p>Erro ao obter dados do usuário.</p>";
    }
  ?>
  <a href="logout.php">sair</a>
</body>
</html>
