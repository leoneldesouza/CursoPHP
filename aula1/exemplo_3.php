<?php

echo "Opcao: ";
$opt = readline();

switch($opt){
	case 1:
	echo "Cadastrar usurios.....\n\n";
	break;
	case 2:
	echo "Listar usurios.....\n\n";
	break;
	case 3:
	echo "Atualizar usurios.....\n\n";
	break;
	case 4:
	echo "Deletar usurios.....\n\n";
	break;
	default:
	echo "Opcao invalida\n";
}