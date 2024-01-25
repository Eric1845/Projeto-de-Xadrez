<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdd = "xadrez";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bdd);

if(!$conexao){
    die("Erro".mysqli_connect_error());
}
?>