<?php 


$dbHost = 'localhost';
$dbUserame = 'root';
$dbpassword = '123456';
$dbName = 'caad1';

$conexao = new mysqli($dbHost,$dbUserame,$dbpassword,$dbName);


if($conexao->connect_errno)
{
    echo "deu errado";
}else
{
   echo "esta ok";
}






?>