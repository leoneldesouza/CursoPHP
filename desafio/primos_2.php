<?php

/* 
 Funcao para calcular os valores primos ate o ultimo valor 
 que e passado por parametro desta funcao
*/

 function e_primo($numero){
 	if($numero == 2)
 		return true;
 	if($numero % 2 == 0)
 		return true;
 	$counter += 1;
 	for($j = 1; $j <= $i; $j++){
 		if($numero % $j == 0){
 			$counter +=1;
 		}
 		if($counter > 2)
 			return false;
 	}
 	if($counter > 2)
 		return false;
 }
 return $counter == 2;

 function primos($ultimo_valor){
 	for($i = 2; $i <= $ultimo_valor; $i++){
 		if(e_primo($i)){
 			echo "Primo: ". $i;
 		}
 	}
 }

 primos(10000);