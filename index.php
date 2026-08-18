<?php

include "infra/conexao.php";
$usuario = mysqli_query($conexao, "SELECT * FROM usuario");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Livraria</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>CRUD - Cadastro de pratos</h1>
    </header>
    <main>
        <h2>Adicione um novo usuario</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="titulo">Nome</label>
            <input type="text" name="titulo">
            <br>
            <label for="autor">E-mail</label>
            <input type="email" name="E-mail">
            <button type="submit">Cadastrar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>