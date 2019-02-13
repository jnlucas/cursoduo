<?php
require_once "funcoes.php";
include_once "configuracao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Novo Paciente</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
 

</head>
<body>



<div class="container">
	<form action="pacientes.php" method="post">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required="true" value="" placeholder="digite o nome do paciente" /> 
		</div>
		<div class="form-group">
			<label>Cpf</label>
			<input type="text" name="cpf" class="form-control" required="true" value="" placeholder="digite o cpf" /> 
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" required="true" value="" placeholder="digite o email" /> 
		</div>
		<div class="form-group pull-right">
			
			<button type="submit"  class="btn btn-success " > Enviar</button>
		</div>
		
	</form>
</div>
</body>
</html>