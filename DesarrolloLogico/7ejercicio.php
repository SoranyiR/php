<?php

$lista = readline("Ingrese una lista de elementos separados por espacios: ");

$buscar = readline("Ingrese el elemento a buscar: ");

$elementos = explode(" ", $lista);

$posicion = array_search($buscar, $elementos);

if ($posicion !== false) {
    echo "El elemento '$buscar' se encuentra en la posición $posicion.";
} else {
    echo "El elemento '$buscar' no se encuentra en la lista.";
}
?>
