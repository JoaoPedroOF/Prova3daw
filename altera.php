<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="home.php">Página Inicial</a><br>
<a href="cadastro.php">Cadastro</a><br>
<a href="altera.php">Alteração</a><br>
<a href="listaTodos">Listar todos os Usuários</a><br>
<a href="lista.php">Listar um usuário</a><br>
<a href="exclui.php">Excluir</a><br>

<h1>Alterar Usuário</h1>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	$login = $_POST["login"];
	$senha = $_POST["senha"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];


        
}
?>

</form>


</body>
</html>