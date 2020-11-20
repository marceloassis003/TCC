<?php

    include_once 'conexao.php';

    $cnpj = $_POST['cnpj'];
    $conteudo = $_POST['conteudo'];
    
   
        $sql2 = $dbcon->query("INSERT INTO relatorios(cnpj, conteudo) VALUES('$cnpj','$conteudo')");

       if($sql2 > 0)  {
            echo "registro_ok";
                   
         } else {
             echo "registro_erro";
         }

   





?>