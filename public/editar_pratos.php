<?php

include " ../infra/conexao.php";

$id_pratos = $_GET["id_pratos"];

$sql = "DELETE FROM pratos WHERE id_pratos = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id_pratos);
$stmt->execute();

$result = $stmt->get_result();
$pratos = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pratos</title>
    <link rel="stylesheet" href="../css/editar_pratos.css">
</head>

<body>
    <header>
        <h1>Editar Pratos</h1>
    </header>

    <main>
         <h2>Editando o prato <?php echo $prato["nome_pratos"] ?>!</h2>

        <form action="atualizar.php" method="POST">
        
        <input type="hidden" name="id_pratos" value="<?php echo $prato["id_pratos"] ?>">

          <label for="nome_pratos">Nome do prato:</label>
            <input type="text" name="nome_pratos" value="<?php echo $prato["nome_pratos"] ?>">
            <br>

            <label for="descricao_pratos">Descrição:</label>
            <input type="text" name="descricao_pratos" value="<?php echo $prato["descricao_pratos"] ?>">
            <br>

            <label for="preco_pratos">Preço:</label>
            <input type="number" step="0.01" name="preco_pratos" value="<?php echo $prato["preco_pratos"] ?>">
            <br>

            <button type="submit">Atualizar</button>