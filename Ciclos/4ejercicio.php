<?php

$edad = readline ("ingrese su edad");

    if ($edad > 17){
    echo "tienes licencia de conducir? <br> ingrese 1 si tienes  <br> ingrese 2 si no tienes";
$licencia = readline();
    if($licencia==1){
    echo "tienes licencia de conduccion y puedes conducir";}  
    else {
    echo "no tienes licencia de conducir";
        }
        }
    else{
    echo "no puedes conducir";
}

?>
