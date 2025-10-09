<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Produtos</title>
        <link rel="stylesheet" href="../style/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Lista de Produtos</h1>
        <?php
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
            
            $sql = "SELECT * FROM produtos;";
            
            $resultado = mysqli_query($conn, $sql);
            $quant = mysqli_num_rows($resultado);
            
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
            
        ?>
        <br> <br>
        <a href="../pages/form.html">Adicionar Produto a Tabela</a>
        <a href="../pages/pesquisa_prod.php">Pesquisar Produtos</a>
    </body>
</html>
