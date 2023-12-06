<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'site-miguel';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno) {
    //    echo "Erro";
    //}else {
    //    echo "Conexao bem sucedida";
    //}
    

?>