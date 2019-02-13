<?php
require_once "funcoes.php";
include_once "configuracao.php";

$pacientes = listaPacientes();

var_dump($pacientes);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pacientes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

</head>
<body>

<div class="container">
	
<table class="table table-striped table-bordered " id="pacientes">
	<tr>
		<th>Nome</th>
		<th>Cpf</th>
		<th>Email</th>
		<th>Acoes</th>
	</tr>

	<tr>
		<td>sdfsf</td>
		<td>sdfsd</td>
		<td>sdfsd</td>
		<td>sdfsdf</td>

	</tr>

	
</table>

</div>

<script type="text/javascript">
	
	$(document).ready(function() {
    $('#pacientes').DataTable();
} );
</script>

</body>
</html>

