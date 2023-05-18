<?php
include_once("conectar.php");
print_r ($_POST);
$nome = $_POST['nome'];
$almoco = $_POST['almoco'];
$refrigerante = $_POST['refrigerante'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO dados(nome, almoco, refrigerante, quantidade)
VALUES ('$nome', '$almoco', '$refrigerante', '$quantidade')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
?>