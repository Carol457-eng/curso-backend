<?php 
// function apresentar(){
//     echo "Olá, seja bem-vinda!";
// }
// apresentar();

// funcao com parametros

// function apresentar ($nome, $idade){
//     echo "Olá, Meu nome é $nome e tenho $idade anos.\n";
// }
// $nome = readline("Digite seu nome: ");
// $idade = readline("Digite sua idade: ");
// apresentar($nome, $idade);

// funcao com valor padrao

// function saudacao($nome = "joao", $idade = 16){
//     echo "Olá, Meu nome é $nome e tenho $idade anos.\n";
// }
// saudacao ("sandy", 20);

// $usuario = function($nome, $idade){
//     return "Olá, Meu nome é $nome e tenho $idade anos.\n";
// };
// echo $usuario("sandy", 24);

// escopo da funcao

// $num1 = 15;
// function somar(int $num2){
//     global $num1;
//     $result = $num1 + $num2;
//     return $result;
// }

// echo somar(10);

// diferenca entre return e echo

// function comEcho(int $a, int $b){
//     return $a + $b.PHP_EOL;
// }

// //comEcho(5, 3);

// $result1 = (int )(comEcho(5, 3));
// var_dump($result1);


//Exercicio 1
//1.Crie uma calculadora utilizando funçoes para definir as operaçoes. Deve conter as 4 operaçoes basicas: Adiçao, Subtraçao, Divisao e Multiplicaçao

// function adicao($a, $b){
//     return $a + $b;
// }
// function subtracao($a, $b){
//     return $a - $b;
// }
// function divisao($a, $b){
//     return $a / $b;
// }
// function multiplicacao($a, $b){
//     return $a * $b;
// }
// $num1 = readline("Digite o primeiro numero: ");
// $num2 = readline("Digite o segundo numero: ");
// $operacao = readline("Digite 1 para adição, 2 para subtração, 3 para divisão e 4 para multiplicação: ");

// switch ($operacao) {
//     case 1:
//         echo adicao($num1, $num2);
//         break;
//     case 2:
//         echo subtracao($num1, $num2);
//         break;
//     case 3:
//         echo divisao($num1, $num2);
//         break;
//     case 4:
//         echo multiplicacao($num1, $num2);
//         break;
//     default:
//         echo "Operação inválida!";
// }

function calcularMedia(array $notas, float $nota_minima = 6): array{
    if (count($notas) == 0){
        return ['erro' => 'Nenhuma nota informada'];
    }
    $soma = array_sum($notas);
    $media = $soma / count($notas);
    $situacao = $media >= $nota_minima ? 'Aprovado' : 'Reprovado';
    return [
        'media' => round($media, 2),
        'situacao' => $situacao
    ];
}

echo "========= Calculo da media ===========\n";
echo "Digite as notas para calcular a media. Ou digite 'fim' para encerrar: \n";

$notas = [];

while (true) {
    $entrada = readline("Nota: ");

    if ($entrada === 'fim') {
        break;
    }

    if (!is_numeric($entrada)) {
        echo "Valor inválido. Tente novamente.\n";
        continue;
    }

    $nota = (float) $entrada;

    if ($nota < 0 || $nota > 10) {
        echo "Nota inválida. Digite um valor entre 0 e 10.\n";
        continue;
    }

    $notas[] = $nota;
}

$resultado = calcularMedia($notas);

echo "A media é".$resultado['media'].PHP_EOL;
echo "o aluno foi".$resultado['situacao'].PHP_EOL;
if(isset($resultado['erro'])){
    echo "Erro: ".$resultado['erro'].PHP_EOL;
}
else{
    echo "As notas foram: ".implode(", ", $notas).PHP_EOL;
}

?>