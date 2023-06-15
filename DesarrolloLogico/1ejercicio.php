<?php

//pedirle al usuario que ingrese una lista de numeros//

$listaNumeros = readline(prompt: "ingrese cuantos numeros va a trabajar");

$notas = [];
$sum=0;

for($i=0; $i<$listaNumeros; $i++){
   $notas[$i-1]= floatval(readline(prompt:"ingrese la nota $i \n"));
   $sum += $notas[$i-1];
}

$promedio =  $sum/$listaNumeros;

echo("el promedio de las notas ingresadas es: ".$promedio."\n");