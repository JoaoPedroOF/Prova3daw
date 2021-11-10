<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="cadastro.php">Cadastro</a><br>
<a href="altera.php">Alteração</a><br>
<a href="listaTodos">lista_todos</a><br>
<a href="lista.php">Liste</a><br>
<a href="exclui.php">Excluir</a><br>

<h1>Seja be-vindo</h1>
<h3>Faça abaixo seu cadastro:</h3>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	$login = $_POST["login"];
	$senha = $_POST["senha"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $nomeArquivo = "CadastroUsuarios.txt";
    $txt = "login;senha;email;idade\n";
    if (file_exists($nomeArquivo)) {
        echo "Arquivo $nomeArquivo existe";
    } else {
        echo "Arquivo $nomeArquivo não existe";
        file_put_contents($nomeArquivo, $txt);
    }
    $txt = "$login;$senha;$email;$idade\n"; 
    file_put_contents($nomeArquivo, $txt, FILE_APPEND);
} else {
    $ehPost = false;
}
?>

<h3><?php if ($ehPost) {echo "Cadastro $login feito com sucesso!";} ?></h3>

    <form action="cadastro.php" method="POST">
    	login: <input type="text" name="login"><br>
	    senha: <input type="password" name="senha"><br>
    	email: <input type="text" name="email"><br>
    	idade: <input type="text" name="idade"><br>

    	<input type="submit" value="enviar">
</form>
</body>
</html>