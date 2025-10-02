<?php
    $cod = isset($_GET['cod']) ? intval($_GET['cod']) : 0;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeDB = "exercicios";
    $porta = 3306;

    $conn = mysqli_connect($servidor, $usuario, $senha, $nomeDB, $porta);
    if(!$conn) {
        die ("Falha na conexão com o banco de dados!");
    }

    $sql = "SELECT * FROM produtos WHERE cod = $cod";
    $resultado = mysqli_query($conn, $sql);
    $produto = mysqli_fetch_assoc($resultado);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/form-style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Formulário de Atualização de Produtos</title>
</head>
<body>
    <main>
        <form action="update.php" method="POST">
            <h2>Atualizar Produto</h2> <br> <br>
            <input type="hidden" name="cod" value="<?php echo htmlspecialchars($produto['cod']); ?>">
            <label>Nome do Produto: </label> <input type="text" name="produto_nome" size="15" value="<?php echo htmlspecialchars($produto['nome_produto']); ?>"> <br>
            <label>Preço: </label> <input type="text" name="produto_preco" size="15" value="<?php echo htmlspecialchars($produto['preco']); ?>"> <br>
            <label>Data de Validade: </label> <input type="date" name="produto_data" value="<?php echo htmlspecialchars($produto['data']); ?>"> <br> <br>
            <button>Atualizar Produto</button>
        </form>
    </main>
</body>
<!-- Formulário duplicado removido. O formulário correto já está acima, preenchendo os campos com os valores do produto. -->