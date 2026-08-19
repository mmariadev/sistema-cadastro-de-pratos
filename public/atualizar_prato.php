<?php

include " ../infra/conexao.php";

$id_pratos = $_POST["id_pratos"];
$nome_pratos = $_POST["nome_pratos"];
$descricao_pratos = $_POST["descricao_pratos"];
$preco_pratos = $_POST["preco_pratos"];

$sql = "UPDATE pratos SET nome_pratos = ?, descricao_pratos = ?, preco_pratos = ? WHERE id_pratos = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ssdi", $nome_pratos, $descricao_pratos, $preco_pratos, $id_pratos);
$stmt->execute();


header("Location: cadastrar_pratos.php")