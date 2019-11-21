<?php

$servername = "localhost"; //padrao - server local
$username = "root"; //padrao - root
$password = "";//senha de conexao de baco de dados
$database = "escola"; //alterar conforme o nome do seu banco de dados
// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

if($mysqli->connect_errno)
	echo "Falha na conexao: (".$mysqli->connect_errno.") ".$mysqli->connect_error;


?> 