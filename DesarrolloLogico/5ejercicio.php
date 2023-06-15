
<?php
$numero= readline( "por favor ingrese un numero: ");
$contadorPrimo = 0;

for($contador = 1; $contador<=$numero; $contador++){
	if($numero % $contador == 0){
		$contadorPrimo = $contadorPrimo + 1;
	}
}

if($numero == 0 or $contadorPrimo == 2){
	echo "El numero ".$numero." SI es un numero primo";
}
else{
	echo "El numero ".$numero." NO es un numero primo";
}
?>