<html>
<head>
	<title>
		Usuarios logados 
	</title>
	//<?php require "bootstrap.php" ?>
</head>
<body>
	<table class="table">
		<thead><th>Nome</th><th>Login</th></thead>
		<tbody>
			<?php require "array/usuarios.php" ?>
			<?php foreach($users as $u): ?>
		<tr>
			<td><?= $u['name'] ?></td>
			<td><?= $u['login'] ?></td>
			<td>
				<button> class="btn ntn-primary btn-sm">Editar</button>
				<button> class="btn ntn-danger btn-sm">Excluir</button>
		</td>
	</tr>
			<?php endforeach ?>
		</tbody>	
	</table>
</body>
</html>