<?php
    $cod = $_POST['cod'];
    $nome = $_POST['produto_nome'];
    $preco = $_POST['produto_preco'];
    $data = $_POST['produto_data'];

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

    $sql = "UPDATE produtos 
        SET nome_produto = '$nome', preco = $preco, data = '$data' 
        WHERE cod = $cod";

    if(mysqli_query($conn, $sql)) {
        header('location:  index.php');
        exit();
    }
    
    mysqli_close($conn);
