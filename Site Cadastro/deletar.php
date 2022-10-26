<?php
include_once('dblogin.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $consultar = "SELECT * FROM tabela_produtos WHERE id='$id'";

    $retorno_db =$conectar->query($consultar);
    
    if($retorno_db->num_rows > 0){
        $deletar = "DELETE FROM tabela_produtos WHERE id='$id'";
        $ret =$conectar->query($deletar);


    }
}



?>

<style>
    button{
        background-color: #00ff15;
        padding: 15px;
        border: none;
        border-radius: 0px;


    }
    a{
        color: black;
    }
</style>

<button type="submit"><a href="tabela_produtos.php">
        VER TABELA
    </a> </button>
