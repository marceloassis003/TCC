<?php 

    
    $DSN = "mysql:host=localhost;dbname=id15057980_bd_raingate;charset=utf8";
    $usuario = 'id15057980_adminraingate';
    $senha = 'nh?^+MG9D6!_8yg0';
    
    
    try{
        $dbcon = new PDO($DSN, $usuario, $senha);
       // echo "conexao_ok";
    } catch(PDOException $erro){
        echo $erro->getMessage();
        exit;
    }
    



?>
