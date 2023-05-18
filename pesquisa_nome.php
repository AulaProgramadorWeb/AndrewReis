<html>
<body>

<!-- Criando tabela e cabeçalho de dados: -->
<table border="1" style="width:50%">
<tr>
<th>Nome</th>
<th>Valor Almoco</th>
<th>Valor refri</th>
<th> Quantidade refri </th>
<th> Valor total </th>
</tr>

<?php
include_once("conectar.php");
$pesquisa = $_POST['nome'];
//echo $pesquisa;

$sql = "SELECT * FROM dados WHERE nome = '$pesquisa'" ;

$resultado = mysqli_query($conexao, $sql);

$registro = mysqli_fetch_array($resultado);
//print_r($registro);

$nome = $registro['nome'];
$almoco = $registro['almoco'];
$refrigerante = $registro['refrigerante'];
$quantidade = $registro['quantidade'];
$valor_final = ($refrigerante * $quantidade) + $almoco;

echo "<tr>";
echo "<td>".$nome."</td>";
echo "<td>".$almoco."</td>";
echo "<td>".$refrigerante."</td>";
echo "<td>".$quantidade."</td>";
echo "<td>".$valor_final."</td>";

echo "</table>";
?>