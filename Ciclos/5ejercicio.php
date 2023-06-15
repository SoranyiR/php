<?php
    $variable1 = readline("por favor ingrese el 1er numero");
    $variable2 = readline("por favor ingrese el 2do numero");
        
    if($variable1==10 and $variable2==10){
        echo "ambos numeros son iguales a 10";
    }
    if($variable1!=10 and $variable2!=10){
        echo "ambos numeros son diferentes a 10";
    }
    if($variable1>10 and $variable2>10){
        echo "ambos numeros son mayores a 10";
    }
    if($variable1!=10 and $variable2==10){
        echo "solo uno es distinto a 10";
     }
    
    ?>