<?php

include "../infra/conexao.php";

$nome_pratos = $_POST["nome_pratos"];
$descricao_pratos = $_POST["descricao_pratos"];
$precos_pratos = $_POST["precos_pratos"];
$categoria_pratos = $_POST["categoria_pratos"];

$sql = "INSERT INTO pratos (nome_pratos, descricao_pratos, precos_pratos, categoria_pratos) VALUE (?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("ssis", $nome_pratos, $descricao_pratos, $precos_pratos, $categoria_pratos);
$stmt->execute();

header("Location: cadastrar.php");
?>