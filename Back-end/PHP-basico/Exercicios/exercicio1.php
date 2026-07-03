<?php 
// faça um programa que leia uma letra e diga se é uma vogal ou consoante. Deve considerar letras maiusculas e minusculas.

 $letra = readline("Digite uma letra: ");
 $letraLower = strtolower($letra);

 $resultado = match ($letraLower) {
     'a', 'e', 'i', 'o', 'u' => 'Vogal',
     'A', 'E', 'I', 'O', 'U' => 'Vogal',
     default => 'Consoante',
 };

 echo $resultado;



?>