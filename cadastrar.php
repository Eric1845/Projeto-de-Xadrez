<?php
include("conexao.php");

$matri = $_POST['matricula'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$sexo = $_POST['sexo'];
$curso = $_POST['curso'];
$email = $_POST['email'];

$sql = "INSERT INTO cadastro(matricula, nome, nascimento, sexo, curso, email) VALUES('$matri', '$nome', '$data', '$sexo', '$curso', '$email')";

if(mysqli_query($conexao, $sql)){
    echo "Cadastrado com sucesso!";
}
else{
    echo "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>
