<?php

	include 'gerencia-web-login.php';

	$login = $_POST['CPFUsuario'];
	$senha = $_POST['senha'];
	$opcao = $_POST['opcao'];

	if($opcao == 'Aluno(a)')
	{
	
		if ( $usuario = Login::logarAluno($login, $senha))
		{
	 	
	 		session_start();
	 		$_SESSION['usuario'] = $usuario;
	 		header('location:Escolha-Sistema-Web/gerencia-web-escolha-de-sistema.php');	 
	 	}
	
	} 

	else if ($opcao == 'Professor(a)')
	{
	
		if ( $usuario = Login::logarProfessor($login, $senha))
		{
	 	
	 		session_start();
	 		$_SESSION['usuario'] = $usuario;
	 		//header('location:');	
	 	
	 	} 
	
	}
	
	else if ($opcao == 'Bibliotecario(a)')
	{
	
		if ( $usuario = Login::logarBibliotecario($login, $senha))
		{
	 	
	 		session_start();
	 		$_SESSION['usuario'] = $usuario;
	 		//header('location:');	
	 	
	 	} 
	
	} 
	
	else if ($opcao == 'Coordenador(a)')
	{
		
		if ( $usuario = Login::logarCoordenador($login, $senha))
		{
	 		
	 		session_start();
	 		$_SESSION['usuario'] = $usuario;
	 		//header('location:');
	 	
	 	} 
	
	}

?>
