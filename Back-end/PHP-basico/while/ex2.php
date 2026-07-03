<?php 
$qtd_pares = 0;
$qtd_impares = 0;
$soma_pares = 0;
$soma_total = 0;
$qtd_total = 0;

while (true) {
    $numero = (int)readline("Digite um número (0 para sair): ");
    
    if ($numero == 0) {
        break;
    }
    
    if ($numero < 0) {
        echo "Apenas números positivos são permitidos.\n";
        continue;
    }
    
    $soma_total += $numero;
    $qtd_total++;
    
    
    if ($numero % 2 == 0) {
        $qtd_pares++;
        $soma_pares += $numero;
    } else {
        $qtd_impares++;
    }
}

$media_geral = $qtd_total > 0 ? $soma_total / $qtd_total : 0;
$media_pares = $qtd_pares > 0 ? $soma_pares / $qtd_pares : 0;

echo "Quantidade de números pares: $qtd_pares\n";
echo "Quantidade de números ímpares: $qtd_impares\n";
echo "Média dos números pares: $media_pares\n";
echo "Média dos números ímpares: $media_geral\n";
echo "Média geral: $media_geral\n";

?>