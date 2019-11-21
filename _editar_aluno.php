<?php

include 'conexao.php';

$id =$_GET['id'];

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Escola Virtual</title>
	<link rel="stylesheet" href="css/bootstrap.css">

	<style type="text/css">

		#tamanhoContainer {
			width: 500px;
		}

	</style>

</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	
	<button type="button" class="btn btn-dark btn-lg btn-block"><h4>Formulário de Cadastro</h4></button>
	<form action="_atualizar_aluno.php" method="post" style="margin-top: 20px">
		<?php

		$consulta = "SELECT * FROM cadastro WHERE id_cadastro =$id";
		$buscar = $mysqli->query($consulta);

		while ($dado = $buscar->fetch_array()){

			$id_cadastro = $dado['id_cadastro'];
 			$mtaluno = $dado['mtaluno'];
 			$nomealuno = $dado['nomealuno'];
 			$curso = $dado['curso'];
 			$turno = $dado['turno'];
 			$nomeprof = $dado['nomeprof'];

		?>
		<div class="form-group">
	    	<label>Matricula</label>
	    	<input type="number" class="form-control" name="mtaluno" value="<?php echo $mtaluno ?>"disabled>

	 	 </div>
	 	 <div class="form-group">
	    	<label>Nome do Aluno</label>
	    	<input type="text" class="form-control" name="nomealuno" value="<?php echo $nomealuno ?>">
	 	 </div>
	 	 
		  <div class="form-group">
		    <label>Cursos</label>
		      <select class="form-control" name="curso">
		      <option>C++</option>
		      <option>C#</option>
		      <option>Java</option>
		      <option>Php</option>
		      <option>Mysql</option>		      
		    </select>
		  </div>

		  <div class="form-group">
		    <label>Turnos</label>
		    <select class="form-control" name="turno">
		      <option>Manhä</option>
		      <option>Tarde</option>
		      <option>Noite</option>  
		    </select>
		  </div>

	 	  <div class="form-group">
	    	<label>Professor</label>
	    	<input type="text" class="form-control" name="nomeprof" value="<?php echo $nomeprof ?>">
	 	  </div>

	 	  <div style="text-align: right;">
	 	  <button type="submit" class="btn btn-dark btn-sm">Atualizar</button>
	 	</div>
	 <?php } ?>
	</form>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>