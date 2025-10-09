
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style/form-style.css">
	<title>Pesquisa de Produtos</title>
</head>
<body>
	<form action="pesquisa_prod.php" method="post">
		<fieldset>
			<legend>Listagem de Produtos</legend>
			<label for="nome">Produtos:</label>
			<input type="text" name="nome"><br>
			<label for="campo">Ordenado:</label>
			<select name="campo">
				<option value="nome">Nome do Produto</option>
				<option value="preco">Preço Produto</option>
			</select>
			<label for="ordenacao">Crescente:</label>
			<input type="radio" class="radio-label" name="ordenacao" value="ASC" checked>
			<label for="ordenacao"> Decrescente:</label>
			<input type="radio" class="radio-label" name="ordenacao" value="DESC"><br>
			<button name="consultar">Consultar</button>
		</fieldset>
	</form>

	<fieldset>
		<legend>Resultados</legend>
		<?php
			echo "<link rel='stylesheet' href='../style/style.css'>";
			if (isset($_POST['consultar'])) {
				// Recuperando dados do formulário
				$nome = $_POST['nome'];
				$campo = $_POST['campo'];
				$ordem = $_POST['ordenacao'];
			
				include '../pages/conecta.php';
			
				// Lista de colunas válidas para ordenação
				$campos_validos = ['nome_produto', 'preco', 'categoria']; // ajuste conforme sua tabela
				$ordens_validas = ['ASC', 'DESC'];
			
				// Validação
				if (!in_array($campo, $campos_validos)) {
					$campo = 'nome_produto'; // padrão seguro
				}
			
				if (!in_array(strtoupper($ordem), $ordens_validas)) {
					$ordem = 'ASC'; // padrão seguro
				}
			
				$sql = "SELECT * FROM produtos WHERE nome_produto LIKE '%$nome%' ORDER BY $campo $ordem;";
				$resultado = mysqli_query($conexao, $sql);
				$quant = mysqli_num_rows($resultado);
			
				// Aqui você pode continuar com o processamento dos resultados...
			}
			

				if(mysqli_num_rows($resultado) > 0) {
					echo "
					<table>
						<tr>
							<th>Código</th>
							<th>Nome de Produto</th>
							<th>Preço de Produto</th>
							<th>Data de Validade</th>
							<th>Excluir</th>
							<th>Atualizar</th>
						</tr>";
					if($quant > 0) {
						echo '<tr>';
						$i = 0;
						while($linha = mysqli_fetch_assoc($resultado)) {
							$i++;
							echo '<td>' . $linha['cod'] . '</td>' . '<td>' . 
									$linha ['nome_produto'] . '</td>' .
									'<td>' . $linha ['preco'] . " R$" . '</td>' . 
									'<td>' . $linha ['data'] . '</td>' .
									'<td> <a href="delete.php?cod=' . $linha['cod'] . '"><img src="../imgs/lixo.png" widht="20" height="20"></a> </td>' .
									'<td> <a href="edit.php?cod=' . $linha['cod'] . '">Atualizar</a> </td>';
							echo '</tr>';
						}
						echo "</table>";
					}
				}
				else
					echo "Não há registros";
		?>
	</fieldset>
</body>
</html>