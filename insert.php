<?php 
	
	// Recebendo o arquivo
	$arquivo = $_FILES['arquivo']['tmp_name'];

	// Lendo o arquivo, aqui ele já se encontra em um array
	$dados = file($arquivo);

	// Dando explode em cada linha do arquivo, isso separa o array em strings
	for ($i=0; $i < count($dados); $i++) { 
		$date = $dados[$i];
		$values = explode(",", $date);

		$nome = $values[0];
		$senha = $values[1];
		$email = $values[2];
		$tel = $values[3];

		// Conexao com o banco de dados
		$dsn = "mysql:dbname = NomeDoBanco;host= EnderecoDoHost";
		$usuario = '';
		$senha = '';

		$pdo = new PDO($dsn,$usuario,$senha);

		//Sql de inserção
		$sql = "INSERT into tb_tal (nome,senha,email,telefone) values ('$nome','$senha'.'$email','$tel') ";
		//inserindo os dados
		$insert = $pdo->query($sql);
	}

 ?>

