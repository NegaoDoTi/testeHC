<?php
include_once('dblogin.php');

if(isset($_POST['cadastrar_produto'])){

    $id = $_POST['id'];
    $tipo =$_POST['tipo'];
    $nome=$_POST['nome'];
    $valor=$_POST['valor'];
    $peso =$_POST['peso'];

    $enviar = mysqli_query($conectar, "INSERT INTO tabela_produtos(id, tipo, nome, valor, peso) VALUES 
                                                             ('$id', '$tipo', '$nome', '$valor', '$peso')");

}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE PRODUTOS</title>
    <style>

        body{

            font-family: "TT Supermolot Neue";

            background-image: linear-gradient(100deg, red, rgb(132, 0, 255));
            text-align: center;
        }
        .texto_cima{

            top: 2%;
            left: 9%;
            transform: translate(-50%, -50%);
            position: absolute;
            font-size: medium;
            font-style: inherit;
            inline-size: block;


        }

        .container{

            font-family: "TT Supermolot Neue";
            color:rgb(75, 75, 75);

            background-color: rgba(255, 255, 255, 0.65);
            width: 1200px;
            height: 500px;
            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);
            position: absolute;

        }
        .entrar{
            font-family: "TT Supermolot Neue";

            padding: 8px;
            top: 50%;
            left: 50%;

            transform: translate(-50px, 150px);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding-left: 10px;
            border-color: white;
            border-bottom-color: white;
            border: 3px solid white;
            text-align: center;


        }

        .labels{

            top: 50%;
            left: 50%;

            transform: translate(-60px, 150px);

            font-family: "TT Supermolot Neue";
            font-weight: bold;
            display: inline-block;
            width: 150px;
        }
        .btn_cadastrar{
            top: 50%;
            left: 50%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-family: "TT Supermolot Neue";
            font-size: 14px;
            font-weight: bold;

            transform: translate(-110px, 180px);
            background-color: #0080ff;
            cursor: pointer;
        }

        .ir_tabela{top: 50%;
            left: 50%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-family: "TT Supermolot Neue";
            font-size: 14px;
            font-weight: bold;

            transform: translate(-40px, 180px);
            background-color: #00ff15;
            cursor: pointer;

        }
        a{
            color: black;
        }



    </style>
</head>
<body>
    <div class="container">

        <h1 class="texto_cima">
            CADASTRO DE PRODUTOS:
        </h1>

        <div class="entrada">
        <form action="cadastro_produtos.php" method="post">

            <label class="labels" for="id"> ID do produto: </label>
            <input class="entrar" type="text" name="id" placeholder="DIGITE O ID: " id="id">
            <br><br>

            <label class="labels" for="tipo"> Tipo de produto: </label>
            <input class="entrar" type="text" name="tipo" placeholder="DIGITE O TIPO: " id="tipo">
            <br><br>

            <label class="labels" for="nome"> Nome do produto: </label>
            <input class="entrar" type="text" name="nome" placeholder="DIGITE O NOME: " id="nome">
            <br><br>

            <label class="labels" for="valor"> Valor do produto: </label>
            <input class="entrar" type="text" name="valor" placeholder="DIGITE O VALOR: " id="valor">
            <br><br>

            <label class="labels" for="peso"> Peso do produto: </label>
            <input class="entrar" type="text" name="peso" placeholder="DIGITE O PESO: " id="peso">
            <br><br>

            <button type="submit" class="btn_cadastrar" name="cadastrar_produto" value="cadastrar_produto">
                CADASTRAR PRODUTO
            </button>

            <button class="ir_tabela" name="ver_tabela">
                <a href="tabela_produtos.php">
                    VER TABELA

                </a>
            </button>




        </form>
        </div>
    </div>
    
</body>
</html>