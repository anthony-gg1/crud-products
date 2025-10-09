<?php

    // Local de armazenamento dos arquivos
    $diretorio = 'uploads/';
    $destino = $diretorio . $_FILES['arquivo']['name'];

    // Move o arquivo da pasta temporária para o destino
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino)) {
        echo "Arquivo enviado com sucesso!";
    }
    else
        echo "Problemas com o Upload!";

?>