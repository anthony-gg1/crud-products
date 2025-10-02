<?php

    $cod = intval($_GET['cod']);

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

    $sql = "DELETE FROM produtos WHERE cod = $cod";
    
    if(mysqli_query($conn, $sql)) {
        header('location:  index.php');
        exit();
    }
    
    mysqli_close($conn);
