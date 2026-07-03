<?php 
//crie uma estrutura e repetiçao que receba 10 numeros digitados pelo usuario e mostre ao final a soma de todos eles.




$resultado = 0;

for ($i = 1; $i <= 10; $i++) {

    $numero = readline("Digite o {$i}º número: ");

    $resultado = $resultado + $numero;

}

echo "A soma é: {$resultado}";



?>