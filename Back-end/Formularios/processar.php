<?php 
// capturar os dados com post
// $nome = $_POST['nome'];
// echo "Olá, $nome!";
// $conteudos = $_POST['conteudos'];
// echo "Os conteudos do meu interesse são: ".implode(", ", $conteudos);


$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$sexo = $_POST["sexo"];
$escolaridade = $_POST["escolaridade"];

$data_nascimento = date("d/m/Y", strtotime($data_nascimento));

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Escolaridade</th>
    </tr>

    <tr>
        <td><?php echo $nome; ?></td>
        <td><?php echo $data_nascimento; ?></td>
        <td><?php echo $sexo; ?></td>
        <td><?php echo $escolaridade; ?></td>
    </tr>
</table>