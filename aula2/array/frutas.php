<?php
function _merge($chaves, $valores){
	for($i=0; $i< count($chaves); $i++){
		$chave = $chaves[$i];
		$valor = $valores[$i];
		$resultado[$chave] = $valor;
	}
	return $resultado;
}

$c = array('Leonel','Lucas','Joana','Viviane');
$v = array('Abacaxi','Banana','Pera','Morango');

$resultado = _merge($c, $v);