<?php
session_start();

include("conexao.php");

$sql = "SELECT id_aluno, nome, email FROM alunos";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 30px;
            background-color: #f4f4f4;
        }

        h1, h2{
            color: #333;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-bottom: 30px;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th{
            background: #007BFF;
            color: white;
        }

        tr:nth-child(even){
            background: #f2f2f2;
        }

        a{
            color: red;
            text-decoration: none;
            font-weight: bold;
        }

        .mensagem{
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        form input{
            padding:8px;
            margin:5px;
        }

        input[type=submit]{
            background:#007BFF;
            color:white;
            border:none;
            cursor:pointer;
        }

        input[type=submit]:hover{
            background:#0056b3;
        }
    </style>

</head>
<body>

<h1>Lista de Alunos</h1>

<?php
if(isset($result) && $result->num_rows > 0){

    echo "<table>";

    echo "<tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
          </tr>";

    while($row = $result->fetch_assoc()){

        echo "<tr>";

        echo "<td>".htmlspecialchars($row["id_aluno"])."</td>";

        echo "<td>".htmlspecialchars($row["nome"])."</td>";

        echo "<td>".htmlspecialchars($row["email"])."</td>";

        echo "<td>";
        echo "<a href='exclui.php?id=" . htmlspecialchars($row["id_aluno"]) . "'>EXCLUIR</a>";
        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";

}else{

    echo "<p>Nenhum aluno encontrado!</p>";

}
?>

<?php
if(isset($_SESSION["mensagem"])){
    echo "<div class='mensagem'>";
    echo $_SESSION["mensagem"];
    echo "</div>";

    unset($_SESSION["mensagem"]);
}
?>

<h2>Cadastro de alunos</h2>

<form action="salvaraluno.php" method="post">

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <input type="submit" value="Cadastrar">

</form>

</body>
</html>