<?php 
// Faça um programa que receba os dados de um usuario e valide da seguinte forma:
// Nome: deve ter no mínimo 5 caracteres
//cpf: deve ter 11 digitos e deve receber apenas numeros
//idade: deve ser entre 0 e 150 anos
// salario: deve ser maior que 0
// sexo: deve ser M ou F
//estado civil: deve ser Solteiro, Casado, Viuvo ou Divorciado

//obs: o programa so pode prosseguir quando todos os dados forem validados, caso contrario deve solicitar novamente o dado que nao foi validado.


$nome = "";

while (strlen($nome) < 5) {

    $nome = readline("Digite seu nome: ");

    if (strlen($nome) < 5) {
        echo "Nome inválido. O nome deve ter pelo menos 5 caracteres.\n";
    }

}

$cpf = "";

while (strlen($cpf) != 11 || !is_numeric($cpf)) {

    $cpf = readline("Digite seu CPF (apenas números): ");

    if (strlen($cpf) != 11 || !is_numeric($cpf)) {
        echo "CPF inválido. O CPF deve ter 11 dígitos e conter apenas números.\n";
    }

}

$idade = -1;

while ($idade < 0 || $idade > 150) {

    $idade = readline("Digite sua idade: ");

    if ($idade < 0 || $idade > 150) {
        echo "Idade inválida. A idade deve estar entre 0 e 150 anos.\n";
    }

}

$salario = -1;

while($salario <= 0) {
    $salario = readline ("Digite seu salario: ");
    $salario = floatval($salario);
    if ($salario <= 0) {
        echo "Salário inválido. O salário deve ser maior que 0.\n"; 
        
    }
}

$sexo = "";

while ($sexo != "m" && $sexo != "f") {
    $sexo = readline("Digite seu sexo (m/f): ");
    if ($sexo != "m" && $sexo != "f") {
        echo "Sexo inválido. O sexo deve ser 'm' ou 'f'.\n";
    }
}

$estadoCivil = ['solteiro', 'casado', 'viuvo', 'divorciado'];
while (true) {
    $estado = readline ("Digite o estado civil: ");
    if (in_array(strtolower($estado), $estadoCivil)) {
        break;
    } else {
        continue;  }
}











?>