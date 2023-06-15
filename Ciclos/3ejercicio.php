<?php
$usuario = 0;
$dia = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
// $numero = [0,1,2,3,4,5,6];

$usuario = readline("por favor ingrese un numero del 0 al 6 ");

if($usuario==0){
    echo " El dia seleccionado es el $dia[0]";
}
if($usuario==1){
    echo " El dia seleccionado es el $dia[1]";
}
if($usuario==2){
    echo " El dia seleccionado es el $dia[2]";
}
if($usuario==3){
    echo " El dia seleccionado es el $dia[3]";
}
if($usuario==4){
    echo " El dia seleccionado es el $dia[4]";
}
if($usuario==5){
    echo " El dia seleccionado es el $dia[5]";
}
if($usuario==6){
    echo " El dia seleccionado es el $dia[6]";
}
elseif($usuario > 6 or $usuario < 0){
    echo "Numero Invalido";
}

?>