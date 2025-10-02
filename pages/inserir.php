<?php
    $nome = $_POST['prodName'];
    $preco = $_POST['prodPreco'];
    $data = $_POST['prodData'];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeDB = "exercicios";
    $porta = 3306;

    $conn = mysqli_connect($servidor, $usuario, $senha, 
            $nomeDB, $porta);

    if(!$conn) {
        die ("Falha na conexão com o banco de dados!");
    }

    $sql = "INSERT INTO produtos (nome_produto, preco, data) VALUES ('$nome', $preco, '$data'); ";

    if(mysqli_query($conn, $sql)) {
        header('location:  index.php');
        exit();
    }

    echo "Problemas com a Inserção";
    
    mysqli_close($conn);