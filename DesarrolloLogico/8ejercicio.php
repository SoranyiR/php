<?php
$Inicial = readline("Ingrese el rango inicial: ");
$Final = readline("Ingrese el rango final: ");

if (!is_numeric($Inicial) || !is_numeric($Final) || $Inicial < 1 || $Final < 1 ||
    $Inicial != intval($Inicial) || $Final != intval($Final) || $Final <= $Inicial) {
    echo "Los rangos ingresados no son válidos.";
    exit;
}

for ($numero = $Inicial; $numero <= $Final; $numero++) {
    $sumaDivisores = 0;
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $sumaDivisores += $i;
        }
    }

    if ($sumaDivisores == $numero) {
        echo "El número $numero es un número perfecto." . PHP_EOL;
    }
}
?>
