<?php

/* 
 Funcao para calcular os valores primos ate o ultimo valor 
 que e passado por parametro desta funcao
*/

 function primos($ultimo_valor){

 	for ($i=2; $i < $ultimo_valor; $i++) {
 	//echo "valor: $i\n"; 
 		$counter = 0;
 	//	echo "Validando: ";
 		for($j = 1; $j <= $i; $j++){
 	//		echo "$j ";
 			if($i % $j == 0){
 				$counter += 1;
 			}
 		}
 	//	echo "\n";
 		//if($counter == 2)
 		//echo "Primo: " .$i ."\n";

 	}
 }

 primos(10000); // time php primos.php