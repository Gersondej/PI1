<?php
    $dbHost = 'Localhost';
    $dbusarname = 'root';
    $password = '9486';
    $dbName = 'cadastro'

    $conexao = new mysqli($dbHost,$dbusarname,$password,$dbName)

    if($conexao -> connect_errno)
    {
        echo "Erro"
    }
    else
    {
        echo "conexao efetuada com sucesso"
    }


 ?>