<?php

include 'conexao.php';

$mtaluno = $_POST['mtaluno'];
$nomealuno = $_POST['nomealuno'];
$curso = $_POST['curso'];
$turno = $_POST['turno'];
$nomeprof = $_POST['nomeprof'];


$sql = "INSERT INTO `cadastro`( `mtaluno`, `nomealuno`, `curso`, `turno`, `nomeprof`) 
		VALUES ($mtaluno, '$nomealuno', '$curso', '$turno', '$nomeprof')";
	
$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px;margin-top: 20px">
	
	<center><h4>Aluno cadastrado co sucesso!</h4></center>

	<div style="padding-top: 20px">
		<center>
		<a href="index.php" role="button" class="btn btn-dark btn-sm">Cadastrar novo Ítem</a>
		</center>
	</div>

</div>