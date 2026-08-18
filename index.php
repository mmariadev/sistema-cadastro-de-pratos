<?php

include "infra/conexao.php";
$usuario = mysqli_query($conexao, "SELECT * FROM usuario");
$pratos = mysqli_query($conexao, "SELECT * FROM pratos");
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

        <h2>Adicione um novo prato</h2>
        <form action="public/cadastrar.php" method="POST">
            <label for="titulo">Nome do prato</label>
            <input type="text" name="titulo">
            <br>
            <label for="autor">Descrição do prato</label>
            <input type="text" name="descricao">
            <br>
            <label for="autor">Preço</label>
            <input type="number" name="preco">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" required>
                <option value="">Selecione uma categoria</option>
                <option value="Entrada">Entrada</option>
                <option value="Prato Principal">Prato Principal</option>
                <option value="Sobremesa">Sobremesa</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        <div>
            <h2>Livros Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
                <?php while ($livro = mysqli_fetch_assoc($livros)) { ?>
                    <tr>
                        <td><?php echo $livro["id"] ?></td>
                        <td><?php echo $livro["titulo"] ?></td>
                        <td><?php echo $livro["autor"] ?></td>
                        <td><?php echo $livro["ano"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $livro["id"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $livro["id"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>