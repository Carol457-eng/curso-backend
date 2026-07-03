<?php 
$nomes = ['joao','maria','francisco'];
print_r($nomes);
unset($nomes[2]);

// Array multidimensional

$carros = array(
    array("Fiat", "Uno",2012),
    array("volvo", "xc60",2022),
    array("peugeout", "207",2008),

);

echo $carros[0][0]." Modelo: ".$carros[0][1]." Ano: ".$carros[0][2];

?>