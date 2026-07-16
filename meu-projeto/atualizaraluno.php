<?php 
include "conexao.php";
$id = $_POST["id_aluno"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "UPDATE alunos SET nome = ?, email = ? WHERE id_aluno = ?";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "ssi", $nome, $email, $id);


if(mysqli_stmt_execute($stmt)){
 mysqli_stmt_close($stmt);
 mysqli_close($conexao);
 header("Location: index.php");
 exit();
}else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);


?>