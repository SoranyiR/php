<?php 

$numero = readline( "por favor ingrese un numero para sacarle el factorial ");

function Factorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
$resultado = Factorial($numero); 
echo "Factorial de $numero  = $resultado"; 
?>