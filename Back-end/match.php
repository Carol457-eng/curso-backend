<?php 
//$valor = readline("digite o valor: ");

//$resultado = match(true){
    //$valor > 100 => 'O numero é maior que 100',
    //$valor < 100 => 'Onumero é menor que 100',
    //default => 'O numero é igual a 100'
//};

//echo $resultado;

//$dia = readline("Digite um dia da semana: ");

//$msg = match($dia){
  //  'segunda','terça',
    //'quarta'=> 'Hote tem aula',
    //'quinta','sexta'=> 'Hoje nao tem aula',
    //defaut => 'é final de semana'
//};

// faça um programa que leia uma letra e diga se é uma vogal ou consoante. Deve considerar letras maiusculas e minusculas.

// $letra = readline("Digite uma letra: ");
// $letraLower = strtolower($letra);

// $resultado = match ($letraLower) {
//     'a', 'e', 'i', 'o', 'u' => 'Vogal',
//     'A', 'E', 'I', 'O', 'U' => 'Vogal',
//     default => 'Consoante',
// };

// echo $resultado;

//FAÇA UM PROGRAMA QUE RECEBA O HORARIO E IMPRIMA UMA MENSAGEM DE BOM DIA, BOA TARDE, BOA NOITE.

// $hora = readline("Digite uma hora: ");

// $resultado = match ($hora) {
//     '1','2','3','4','5','6','7','8','9','10','11' => 'Bom dia',
//     '12','13','14','15','16','17' => 'Boa tarde',
//     '18','19','20','21','22','23' => 'Boa noite',
//     default => 'Hora inválida',
// };

// echo $resultado;

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