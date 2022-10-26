<?php

include_once('dblogin.php');

$registro = "SELECT id, tipo, nome, valor, peso FROM tabela_produtos ";

$retorno = $conectar->query($registro);

?>



<!DOCTYPE html>
<html LANG="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>TABELA DE PRODUTOS</title>
    <style>
        body{
            font-family: "TT Supermolot Neue";

            background-image: linear-gradient(100deg, red, rgb(132, 0, 255));
            text-align: center;
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
        .m-5{
            font-family: "TT Supermolot Neue";
            font-size: 14px;
            font-weight: bold;
        }
        .tabela{
            border-collapse: collapse;
            width: 900px;
            color: white;
            transform: translate(150px, -10px);
            table-layout: auto;

        }
        th{
            height: 35px;
            background-color: rgba(56, 56, 56, 0.7);
            color: white;
        }
        td{
            height: 25px;
            background-color: rgba(56, 56, 56, 0.5);
            color: white;
        }

        .btn_voltar{

            border-radius: 0px;
            border: 2px;
            background-color: rgba(51, 51, 51, 0.815);
            padding: 10px;
            text-align: center;
            color: white;
            transform: translate(290px, 380px);
            position: absolute;
        }

        .botao{
            color: white;
        }
        .btn_editar{
            color: #00ff00;
        }
        .btn_excluir{
            color: red;
        }

    </style>
    <head>

<body>
    <div class="container">
        <div class="m-5">
            <h1>
                RIGISTRO DOS PRODUTOS:
            </h1>

            <button class="btn_voltar">
                <a class="botao" href="cadastro_produtos.php">
                    VOLTAR TELA DE CADASTRO
                </a>
            </button>
        </div>
        <div>
            <table class="tabela">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">PESO</th>
                    <th scope="col">AÇÕES</th>

                </tr>
                </thead>
                <tbody>
                    <?php
                        while($resultados = mysqli_fetch_assoc($retorno)){
                            echo "<tr>";
                            echo "<td>".$resultados['id']."</td>";
                            echo "<td>".$resultados['tipo']."</td>";
                            echo "<td>".$resultados['nome']."</td>";
                            echo "<td>".$resultados['valor']."</td>";
                            echo "<td>".$resultados['peso']."</td>";
                            echo "<td> 
                                    <a class='btn_editar' href='editar.php?id=$resultados[id]'>
                                    EDITAR
                                    </a>
                                    <a class='btn_excluir' href='deletar.php?id=$resultados[id]'>
                                    EXCLUIR
                                    
                                    </a>
                                </td>";
                            echo "</tr>";
                        }

                    ?>
                </tbody>

            </table>
            </table>
        </div>
    </div>



<body>
</html>
