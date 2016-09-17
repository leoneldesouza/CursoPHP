<?php
// Exibicao de numeros primos

function prime(){
	$resultado = 0;

	for($i = 0; $i < $max; $i++){
		$resultado = $i + 1;
	}

	return $resultado;
}
$entrada_do = readline();
$a = prime($entrada_do);