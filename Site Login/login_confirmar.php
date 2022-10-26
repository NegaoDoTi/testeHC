<?php

include_once('acessonegado.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>CONFIRMAÇÃO E LOGIN</title>
    <style>
        body{
            font-family: "TT Supermolot Neue";
            background-image: linear-gradient(100deg, red, blueviolet);
        }

        div{
            font-family: "TT Supermolot Neue";
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 90px;
            color: #000000;
            font-size: 20px;

        }
        button{
            background-color: rgba(0, 0, 0, 0.9);
            border: none;
            font-family: "TT Supermolot Neue";
            font-size: 14px;
            outline: none;
            color: #ffffff;
            padding: 12px;
            width: 100%;
            cursor: pointer;
        }
    </style>

    <head>
<body>

<div>

    <h1>
        LOGIN EFETUDO COM SUCESSO!
        ESTE É O SEU ID DE USER: <?php echo $_SESSION['id']; ?>
    </h1>

    <button>
        <a href="sair.php">

            SAIR

        </a>
    </button>

</div>

<body>
</html>
