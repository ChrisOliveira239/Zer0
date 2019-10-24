<?php
$link = new mysqli("localhost", "root", "", "crud");
if ($link->connect_errno){
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
?>
