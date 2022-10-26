
<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'login';

    $conectar = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conectar->connect_errno){
        echo "Erro ao execurar conexão com o db.";
    }
?>
