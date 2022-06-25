<?php
include 'conexaoBD.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
    $senha = $_POST['senha'];

    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];

    $cartao = $_POST['cartao'];
    $seccartao = $_POST['seccartao'];

	$sql = mysqli_query($conectar, "INSERT INTO  fun_ousadia_tb(nome, email, senha, telefone, cpf, cep, cidade, cartao, seccartao) VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$cep', '$cidade', '$cartao', '$seccartao' )");
	
	if ($sql) {
		header('location: index.php');
	}
?>