<?php
// Lacos de repeticao
echo "+================CHERNOBYL================+";
$num = 0;

while(($num += 10) <= 100){
	echo "\rApagando os arquivos do seu computador: $num%";
	sleep(1);
}

echo "\n;D";