<?php 
include "conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM alunos WHERE id_aluno = ?";

$smt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($smt, "s", $id);
mysqli_stmt_execute($smt);
$result = mysqli_stmt_get_result($smt);
$aluno = mysqli_fetch_assoc($result);

mysqli_stmt_close($smt);
mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ediçao de aluno</title>
</head>
<body>
    <h2>Editar aluno</h2>

<form action="atualizaraluno.php" method="post">
    <input type="hidden" name="id_aluno" value="<?php echo $aluno['id_aluno']; ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" required>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $aluno['email']; ?>" required>

    <input type="submit" value="Cadastrar">

</form>
</body>
</html>