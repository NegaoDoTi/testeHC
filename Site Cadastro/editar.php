<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EDITAR PRODUTO</title>
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
        .btn_EDITAR{
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
<?php

if(!empty($_GET['id']))
{
    include_once('dblogin.php');

    $id = $_GET['id'];

    $consultar = "SELECT * FROM tabela_produtos WHERE id=$id";

    $retorno_db =$conectar->query($consultar);

    if($retorno_db->num_rows > 0)
    {
        while($resultado = mysqli_fetch_assoc($retorno_db))
        {
            $id = $resultado['id'];
            $tipo = $resultado['tipo'];
            $nome = $resultado['nome'];
            $valor = $resultado['valor'];
            $peso = $resultado['peso'];

        }
    }
    else
    {
        header('Location: tabela_produtos.php');
    }
}
?>
    <div class="container">

        <h1 class="texto_cima">
            EDITAR PRODUTO:
        </h1>

        <div class="entrada">
        <form action="salvar_edicao.php" method="post">

            <label class="labels" for="id"> ID do produto: </label>
            <input class="entrar" type="text" name="id" id="id" value="<?php echo $id ?>">
            <br><br>

            <label class="labels" for="tipo"> Tipo de produto: </label>
            <input class="entrar" type="text" name="tipo" id="tipo" value="<?php echo $tipo ?>">
            <br><br>

            <label class="labels" for="nome"> Nome do produto: </label>
            <input class="entrar" type="text" name="nome" id="nome" value="<?php echo $nome ?>">
            <br><br>

            <label class="labels" for="valor"> Valor do produto: </label>
            <input class="entrar" type="text" name="valor" id="valor" value="<?php echo $valor ?>">
            <br><br>

            <label class="labels" for="peso"> Peso do produto: </label>
            <input class="entrar" type="text" name="peso" id="peso" value="<?php echo $peso ?>">
            <br><br>

            <button type="submit" class="btn_EDITAR" name="EDITAR" value="EDITAR" id="EDITAR">
                    EDITAR
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