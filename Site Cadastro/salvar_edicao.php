<?php
include_once('dblogin.php');

if(isset($_POST['EDITAR']))
{
    $id = $_POST['id'];
    $tipo =$_POST['tipo'];
    $nome=$_POST['nome'];
    $valor=$_POST['valor'];
    $peso =$_POST['peso'];

    $atualizar = "UPDATE tabela_produtos SET id='$id', tipo='$tipo', nome='$nome', valor='$valor', peso='$peso'
WHERE id='$id'";

    $run_atualizar= $conectar->query($atualizar);

}
header('Location tabela_produtos.php');

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

<button><a href="tabela_produtos.php">
        VER TABELA
    </a> </button>
