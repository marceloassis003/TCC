<?php

    include_once "conexao.php";

    $sql_lista = "SELECT * FROM relatorios";
    $stmt_lista =  $dbcon->prepare($sql_lista);
    $stmt_lista->execute();
    
    $conteudo = array();
    
    while($dados = $stmt_lista->fetch(PDO::FETCH_OBJ)) {
        $conteudo[] = array("CODRELATORIOS"=>$dados->codRelatorios, "CNPJ"=>$dados->cnpj, 
        "CONTEUDO"=>$dados->conteudo);
    }
    
    echo json_encode($conteudo);






?>