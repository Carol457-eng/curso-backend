<?php
session_start();
require "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO alunos (nome, email) VALUES (?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "ss", $nome, $email);

if (mysqli_stmt_execute($stmt)) {

    $_SESSION["mensagem"] = "✅ Aluno cadastrado com sucesso!";

    header("Location: index.php");
    exit;

} else {

    $_SESSION["mensagem"] = "❌ Erro ao cadastrar aluno.";

    header("Location: index.php");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);