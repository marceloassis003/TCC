<?php 

	include_once 'conexao.php';

	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	
	$sql_valida = "SELECT * FROM login WHERE usuario= :USUARIO AND senha= :SENHA";
	$stmt_valida = $dbcon->prepare($sql_valida);
	
	$stmt_valida->bindParam(':USUARIO', $usuario);
	$stmt_valida->bindParam(':SENHA', $senha);
	$stmt_valida->execute();
	
	if($stmt_valida->rowCount() > 0){
	    echo "login_ok";
	} else {
	    echo "login_erro";
	}

	
	
	
	
	
	
	

?>