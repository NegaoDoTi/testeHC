<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>NOVO CADASTRO</title>
    <style>
        body{
            font-family: "TT Supermolot Neue";
            background-image: linear-gradient(100deg, red, blueviolet);
        }
        .quadrado-cadastro{
            background-color: rgba(255, 255, 255, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 90px;
        }
        input{
            padding: 12px;
            border: none;
            outline: none;
            font-size: 14px;
            background-color: rgba(0, 0, 0, 0.9);
            color: #ffffff;
            font-family: "TT Supermolot Neue";

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
        button:hover{
            background-color: rgba(51, 49, 49, 0.9);
        }
    </style>
    <head>
<body>
<div class="quadrado-cadastro">
    <h1><fieldset>
            NOVO CADASTRO
        </fieldset></h1>
<form method="post" acttion="tela_cadastro.php">
    <input type="text" placeholder="NOVO USERNAME" name="usernovo"/>
    <br/>
    <br/>
    UTILIZE APRENAS NUMEROS NA SENHA!
    <br>
    MAXIMO 20 CARACTERES!
    <br>
    <input type="password" placeholder="NOVA SENHA " name="senhanova"/>.
    <br/>
    <br/>
    <button type="submit" name="cadastrado" id="cadastrado" value="CADASTRAR">
        CADASTRAR
    </button>
</form>
<?php

    if (isset($_POST['cadastrado'])){

        include_once('dblogin.php');

        $username1 = $_POST["usernovo"];
        $senha1 = $_POST["senhanova"];

        $enviar = mysqli_query($conectar, "INSERT INTO username(usernames, senhas) VALUES 
                                            ('$username1','$senha1' )");


    }
?>

<br/>
<br/>
<button>

    <a href="login.php">
    VOLTAR TELA DE LOGIN
    </a>

</button>
</div>
<body>
</html>
