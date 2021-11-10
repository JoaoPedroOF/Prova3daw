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

    <h1>Seja bem-vindo</h1>
    <h3>Faça abaixo seu cadastro:</h3>
    
    <?php
    $ehPost = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $matr = $_POST["matr"];
        $funcao = $_POST["função"];
        $nomeArquivo = "Cadastro de usuários.txt";
        $txt = "nome;matr;função\n";

        if (file_exists($nomeArquivo)) {
            echo"Usuário adicionado com sucesso!\n";
        } else {
            echo "Usuário adicionado com sucesso!\n";
            file_put_contents($nomeArquivo, $txt);
        }

       $txt = "$nome;$matr;$funcao;\n";
       file_put_contents($nomeArquivo, $txt, FILE_APPEND);
    } else {
        $ehPost = false;
    }
    ?>
        <form action="cadastro.php" method="POST">
            nome: <input type="text" name="nome"><br>
            matrícula: <input type="text" name="matr"><br>
            função: <input type="text" name="função"><br>
            <input type="submit" value="enviar">
    </form>
</body>
</html>