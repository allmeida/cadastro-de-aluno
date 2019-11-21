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
	<form action="_inserir_aluno.php" method="post" style="margin-top: 20px">
		<div class="form-group">
	    	<label>Matricula</label>
	    	<input type="number" class="form-control" name="mtaluno" placeholder="Informe a matricula do aluno" autocomplete="off" required>

	 	 </div>
	 	 <div class="form-group">
	    	<label>Nome do Aluno</label>
	    	<input type="text" class="form-control" name="nomealuno" placeholder="Informe o nome do aluno" autocomplete="off" required>
	 	 </div>
	 	 
		  <div class="form-group">
		    <label>Cursos</label>
		      <select class="form-control" name="curso" required>
		      <option>C++</option>
		      <option>C#</option>
		      <option>Java</option>
		      <option>Php</option>
		      <option>Mysql</option>		      
		    </select>
		  </div>

		  <div class="form-group">
		    <label>Turnos</label>
		    <select class="form-control" name="turno" required>
		      <option>Manhä</option>
		      <option>Tarde</option>
		      <option>Noite</option>  
		    </select>
		  </div>

	 	  <div class="form-group">
	    	<label>Professor</label>
	    	<input type="text" class="form-control" name="nomeprof" placeholder="Informe o nome do professor" autocomplete="off" required>
	 	  </div>

	 	  <div style="text-align: right;">
	 	  <button type="submit" class="btn btn-dark btn-sm">Cadastrar</button>
	 	</div>
	</form>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>