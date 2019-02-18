<?php 

function somar($a,$b){

	 $resultado = $a + $b;

	return $resultado;
}

 function media($nota ){



 	if($nota > 5){
 		$nota = "aprovado";
 	}elseif($nota === 5){
 		$nota = "é exatamente a $nota";
 	}elseif($nota == 5){
 		$nota = "é somente $nota";
 	}else{
 		$nota = "nenhuma das anteriores";
 	}

 	return $nota;

 }

function definirPrimo($numero){
	$contador = 0;

	for ($i=1; $i <= $numero ; $i++) { 

		if($numero % $i == 0){
			$contador ++;
		}
	}

	if($contador <= 2 && $contador > 0){
		return "<br>".$numero;
	}
	return "";

}

 function numerosPrimos($inicial,$final){

 	for($i = $inicial; $i <= $final; $i++){

 		echo definirPrimo($i); 		
 	}

 }


function definirX($linha,$coluna){

	if($linha == $coluna){
		echo 'x';
	}
	elseif($linha == (10 - $coluna)){
		echo "x";
	}
	else{
		echo 0;
	}
	
}


function conexao($host,$usuario,$senha,$banco){


	mysql_connect($host,$usuario,$senha) or die("nao consegui conectar com o banco de dados");

	mysql_select_db($banco) or die("banco de dados nao encontrado");

}

function getAssoc($data){
	$retorno = [];
	while($a = mysql_fetch_assoc($data)){

		$retorno[] = $a;
	}
	return $retorno;
}


function listaPacientes(){

	 $sql = "SELECT * FROM pacientes ";

	$data =  mysql_query($sql);

	$retorno = getAssoc($data);
	
	return $retorno;

}


function cadastraPaciente($params){


	$nome = $params['nome'];
	$cpf = $params['cpf'];
	$email = $params['email'];


	 $sql = "INSERT INTO pacientes 
			(id,nome,cpf,email) 
	VALUES (NULL,'$nome','$cpf','$email')";

	
	if(mysql_query($sql)){
		header("location:pacientes.php?msg=cadastro realizado com sucesso");
	}else{
		header("location:pacientes.php?msgErro=Erro ao realizar cadastro");
	}


	
}


function getPaciente($idPaciente){

	$sql = "SELECT * FROM pacientes WHERE id = $idPaciente";

	$data = mysql_query($sql);

	return getAssoc($data);




}

function editarPaciente($params){

	$nome = $params['nome'];
	$cpf = $params['cpf'];
	$email = $params['email'];
	$id = $params['parametro'];

	 $sql = "UPDATE pacientes SET nome = '$nome', cpf = '$cpf', email = '$email' 
	WHERE id = $id";

	

	if(mysql_query($sql)){
		header("location:pacientes.php?msg=cadastro realizado com sucesso");
	}else{
		header("location:pacientes.php?msgErro=Erro ao realizar cadastro");
	}

}



function excluirPaciente($params){

	$id = $params['parametro'];

	 $sql = "DELETE FROM pacientes 
	WHERE id = $id";

	

	if(mysql_query($sql)){
		header("location:pacientes.php?msg=cadastro excluido com sucesso");
	}else{
		header("location:pacientes.php?msgErro=Erro ao excluir cadastro");
	}

}


?>