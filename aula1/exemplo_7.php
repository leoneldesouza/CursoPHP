<?php
// Percorrendo um array

$times = ["Palmeiras","Santos","Sao Paulo","Corintians"];

for($i=0; $i < count($times); $i++){

//echo "" .($i+1). " | ". $times[$i] . "\n";
$string = sprintf("%d | %s", ($i+1), $times[$i]);
echo "$string\n";
}
echo "\n+=============FOR-1==============+\n";

/* For para encontrar todos os caracteres de uma string
Separados por linhas.
*/

$nome = "Leonel";

for ($i= 0, $n= strlen($nome); $i < $n
	; $i++){
	echo $nome[$i] . "\n";
}

// Continue

for($i = 0; $i < 20; $i++){
	if($i == 3){
		continue;
	}
	echo "Contador: $i\n";
}

// Break

for($i = 0; $i < 20; $i++){
	if($i == 3){
		break;
	}
	echo "Contador: $i\n";
}

echo "\n+==============FOR-1================+\n";

// FOR PARA MOSTRAR OS NUMEROS IMPARES

for($i =1; $i <= 100; $i++){
	if(($i %2)==0){
		continue;
	}
	echo "$i\n";
}
http://github.com/leoneldesouza/CursoPHP.git