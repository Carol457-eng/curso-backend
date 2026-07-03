<?php 
// faça um programa que leia 3 notas, calcule a media do aluno e informe as seguuintes condiçoes: 
    //aprovado: nota maior ou igual a 6
    //reprovado: se a nota for for menor que 4
    //recuperação: se a nota for maior ou igual a 4 e menor que 6
    //aprovado com distinção: se a nota for igual ou maior que 9
    
$nota1 = readline("Digite a primeira nota: ");
$nota2 = readline("Digite a segunda nota: ");
$nota3 = readline("Digite a terceira nota: ");      

$nota1 = floatval($nota1);
$nota2 = floatval($nota2);
$nota3 = floatval($nota3);

$media = ($nota1 + $nota2 + $nota3) / 3;

$media = match (true) {
    $media >= 9 => 'Aprovado com distinção',
    $media >= 6 => 'Aprovado',
    $media >= 4 => 'Recuperação',
    default => 'Reprovado',
};
echo $media;

?>