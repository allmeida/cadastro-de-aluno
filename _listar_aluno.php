<?php

include ('conexao.php');

$consulta = "SELECT * FROM cadastro";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>
<html>
<head>
	<title>Listagem de Alunos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/f8c2e11059.js"></script>

</head>
<body>

<div class="container" style="margin-top: 40px">
	<center><h3>Lista de Alunos</h3></center>
	<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matricula</th>
      <th scope="col">Aluno</th>
      <th scope="col">Curso</th>
      <th scope="col">Turno</th>
      <th scope="col">Professor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead> 
    
    		<?php while($dado = $con->fetch_array()){ 

    			$id_cadastro = $dado['id_cadastro'];
 				$mtaluno = $dado['mtaluno'];
 				$nomealuno = $dado['nomealuno'];
 				$curso = $dado['curso'];
 				$turno = $dado['turno'];
 				$nomeprof = $dado['nomeprof'];
 				?>
			<tr>
			    <td><?php echo $dado["mtaluno"] ?></td>

			    <td><?php echo $dado["nomealuno"] ?></td>

			    <td><?php echo $dado["curso"] ?></td>

			    <td><?php echo $dado["turno"] ?></td>

			    <td><?php echo $dado["nomeprof"] ?></td>

			    <td> <a class="btn btn-primary btn-sm" style="color:#fff" href="_editar_aluno.php?id=<?php echo $id_cadastro?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</button></a></td>

		    </tr>
			<?php } ?>
    	 
 </table>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>