<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="pesquisa" action="pesquisa_nome.php"
    method="post">
        <label>Selecione o nome do Cliente:</label>
        <?php
        $mysqli = mysqli_connect("localhost", "root", "", "calc almoco");
        if (mysqli_errno($mysqli)) {
            echo "Falha conexão: " . mysqli_connect_error();
            exit;
        }
        $query = "Select nome From dados";
        $result = mysqli_query($mysqli, $query);
        echo "<select name = 'nome'>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            $opcao = $row['nome'];
                echo "<option value='$opcao'>$opcao</option>";
        }
        echo "</select>";
        ?>
    <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>