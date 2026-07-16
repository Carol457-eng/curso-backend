<?php
session_start();
require "conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM alunos WHERE id_aluno = ?";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);

if(mysqli_stmt_execute($stmt)){
    $_SESSION["mensagem"] = "✅ Aluno excluído com sucesso!";
}else{
    $_SESSION["mensagem"] = "❌ Erro ao excluir aluno!";
}

header("Location: index.php");
exit;