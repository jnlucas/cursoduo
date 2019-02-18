<?php
ini_set("display_errors",1);	
require_once "funcoes.php";
include_once "configuracao.php";

$paciente = getPaciente($_GET['parametro']);

$paciente = $paciente[0];

if($_POST){
	editarPaciente($_REQUEST);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Paciente</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
 

</head>
<body>



<div class="container">
	<form action="editar.php?parametro=<?php echo $_GET['parametro'] ?>" method="post">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required="true" value="<?php echo $paciente['nome']?>" placeholder="digite o nome do paciente" /> 
		</div>
		<div class="form-group">
			<label>Cpf</label>
			<input type="text" name="cpf" class="form-control" required="true" value="<?php echo $paciente['cpf']?>" placeholder="digite o cpf" /> 
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" required="true" value="<?php echo $paciente['email']?>" placeholder="digite o email" /> 
		</div>
		<div class="form-group pull-right">
			
			<button type="submit"  class="btn btn-success " > Enviar</button>
		</div>
		
	</form>
</div>
</body>
</html>