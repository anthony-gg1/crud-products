<?php
    $cod = isset($_POST['cod']) ? intval($_POST['cod']) : 0;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeDB = "exercicios";
    $porta = 3306;

    $conn = mysqli_connect($servidor, $usuario, $senha, $nomeDB, $porta);
    if(!$conn) {
        die ("Falha na conexão com o banco de dados!");
    }

    // Escapar e normalizar os dados
    $nome = mysqli_real_escape_string($conn, $_POST['produto_nome']);
    $preco = str_replace(',', '.', $_POST['produto_preco']);
    $preco = floatval($preco);
    $data = mysqli_real_escape_string($conn, $_POST['produto_data']);


    // Checagem básica de campos obrigatórios
    if (empty($nome) || empty($preco) || empty($data) || $cod === 0) {
        die("Dados inválidos para atualização.");
    }

    $sql = "UPDATE produtos SET nome_produto = '$nome', preco = $preco, data = '$data' WHERE cod = $cod";

    if(mysqli_query($conn, $sql)) {
        header('location:  index.php');
        exit();
    } else {
        echo "Erro ao atualizar o produto.<br>";
        echo "Query: $sql<br>";
        echo "Erro MySQL: " . mysqli_error($conn);
    }
    mysqli_close($conn);
