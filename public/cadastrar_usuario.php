<?php

include "../infra/conexao.php";

$nome_usuario = $_POST["nome_usuario"];
$email_usuario = $_POST["email_usuario"];

$sql = "INSERT INTO usuario (nome_usuario, email_usuario) VALUES (?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ss", $nome_usuario, $email_usuario);
$stmt->execute();

header("location: ../index.php");
?>
