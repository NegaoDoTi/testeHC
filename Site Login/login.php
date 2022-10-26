<?php

include_once('dblogin.php');

if(isset($_POST['login']) or isset($_POST['senha']) ){

    if(strlen($_POST['login'] == 0 ) ){
        echo "Campo username vazio ou incorreto!";

        if(strlen($_POST['senha'] == 0 ) ){
            echo "<br><br>Campo senha vazio ou incorreto!";
        } else{
            $login = $conectar->real_escape_string($_POST['login']);
            $senha = $conectar->real_escape_string($_POST['senha']);

            $sql_consulta = "SELECT * FROM username WHERE usernames = '$login' AND senhas = '$senha'";
            $sql_rodar = $conectar->query($sql_consulta) or die("Falha na consulta do bando de dados" .$conectar->connect_errno);

            $registro = $sql_rodar->num_rows;


            if($registro == 1 ){
                $usuario_logado = $sql_rodar->fetch_assoc();

                if(!isset($_SESSION)){

                    session_start();
                }

                $_SESSION['id'] = $usuario_logado['id'];

                header('Location: login_confirmar.php');


            } else{
                echo "Erro ao logar, um campos estão incorretos!";
            }


        }
    }
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>LOGIN!</title>
    <style>
        body{
            font-family: "TT Supermolot Neue";
            background-image: linear-gradient(100deg, red, blueviolet);
        }
        .quadrado-login{
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
<div class="quadrado-login">
    <h1><fieldset>
            LOGIN
        </fieldset></h1>

<form method="POST" action="">
    <input type="text" value="" placeholder="DIGITE O USERNAME: " name="login"/>

    <br/>
    <br/> <input type="password" value="" placeholder="DIGITE A SENHA: " name="senha"/>
    <br/>
    <br/>
    <button type="submit">
        ENTRAR
    </button>
</form>
<br>
<button>
    <a href="tela_cadastro.php">
        CRIAR UM CADASTRO

    </a>
</button>
</div>
<body>
</html>
