<?php

// Define os dados para conexão armazenando-os em variáveis.
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$nome_banco = 'exercicios';
$porta = 3306;

// Solicita a conexão ao Banco de Dados.
$conexao = mysqli_connect($servidor,$usuario,$senha,$nome_banco,$porta);

// Testa se NÃO conectou ao banco de dados.
if (!$conexao) {
	// Interrompe a execução da página e manda uma msg.
	die('Problemas com a conexão!');
}

?>