<?php

include " ../infra/conexao.php";

$id_pratos = $_GET["id_pratos"];

$sql = "DELETE FROM pratos WHERE id_pratos = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id_pratos);
$stmt->execute();

header("Location: cadastrar.php");