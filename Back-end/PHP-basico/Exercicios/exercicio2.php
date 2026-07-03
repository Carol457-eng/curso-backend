<?php 
//FAÇA UM PROGRAMA QUE RECEBA O HORARIO E IMPRIMA UMA MENSAGEM DE BOM DIA, BOA TARDE, BOA NOITE.

$hora = readline("Digite uma hora: ");

$resultado = match ($hora) {
    '1','2','3','4','5','6','7','8','9','10','11' => 'Bom dia',
    '12','13','14','15','16','17' => 'Boa tarde',
    '18','19','20','21','22','23' => 'Boa noite',
    default => 'Hora inválida',
};

echo $resultado;

?>