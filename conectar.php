<?php

// Estabelecendo a conexão
$conexao = mysqli_connect("localhost"
,
"root"
,
""
,
"calc almoco");

// Verificando a conexão
if (!$conexao) {
die("Falha na conexão: " . mysqli_connect_error());
} else{
echo "Conexão bem-sucedida";
}

?>