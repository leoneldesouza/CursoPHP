<html>
<head>
	<title> Meus Carros</title>
</head>
<body>
<h1>
	
	<table border="2">
		<thead>
				<th>Coluna 1</th>
				<th>Coluna 2</th>
		</thead>
		
			<?php
			require "array/donos_carros.php";
			require "array/carros_db.php";
			//foreach ($array as $chave) {
		//		echo $$chave . "<br />";
		//	}
			foreach ($array as $chave => $valor) {
				echo "$chave ===> $valor<br />";
			}
			echo "<hr>";

			foreach ($carros as $carro) {
				echo "$carro<br />";
			}
			?>
		</tbody>	
	</table>
</h1>
<body>
</html>