<?php
include "../infra/conexao.php";
$pratos = mysqli_query($conexao, "
    SELECT pratos.*, usuario.nome_usuario
    FROM pratos
    JOIN usuario ON pratos.usuario_id = usuario.id_usuario
");
$usuarios = mysqli_query($conexao, "SELECT * FROM usuario");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastro de pratos</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body class="cadastro_pratos">
    <header class="header_pratos">
        <h1>CRUD - Cadastro de pratos</h1>
    </header>
    <main class="main_pratos">
<h2>Adicione um novo prato</h2>
        <form class="form_pratos" action="public/cadastrar.php" method="POST">
            <label for="titulo">Nome do prato</label>
            <input type="text" name="titulo">
            <br>
            <label for="autor">Descrição do prato</label>
            <input type="text" name="descricao">
            <br>
            <label for="autor">Preço</label>
            <input type="number" name="preco">
            <br>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" required>
                <option value="">Selecione uma categoria</option>
                <option value="Entrada">Entrada</option>
                <option value="Prato principal">Prato principal</option>
                <option value="Sobremesa">Sobremesa</option>
            </select>
            <br>
            <label for="usuario_id">Cadastrado por:</label>
            <select name="usuario_id" id="usuario_id" required>
                <option value="">Selecione um usuário</option>
          <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
                <option value="<?php echo $usuario["id_usuario"] ?>">
         <?php echo $usuario["nome_usuario"] ?>
                 </option>
         <?php } ?>
            </select>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <div class="lista_pratos">
        <h2>Pratos Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Cadastrado por</th>
                </tr>
                <?php while ($prato = mysqli_fetch_assoc($pratos)) { ?>
                    <tr>
                        <td><?php echo $prato["id_pratos"] ?></td>
                        <td><?php echo $prato["nome_pratos"] ?></td>
                        <td><?php echo $prato["descricao_prato"] ?></td>
                        <td><?php echo $prato["preco_pratos"] ?></td>
                        <td><?php echo $prato["categoria_pratos"] ?></td>
                        <td><?php echo $prato["nome_usuario"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $prato["id_pratos"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $prato["id_pratos"] ?>">Excluir</a>
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