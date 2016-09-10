<?php
// Lacos de repeticao
echo "+================CHERNOBYL================+";
$num = 0;

while($num <= 100){
	echo "\rApagando os arquivos do seu computador: $num\n";
	sleep(1);
	$num += 10;
}

echo ";D";