<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_02</title>
</head>
<body>
    <h1>AULA05_02</h1>
    <?php
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $av1 = $_POST["av1"];
    $av2 = $_POST["av2"];
    echo "Nome: $nome <br>";
    echo "Data: $data <br>";
    echo "Av1: $av1 <br>";
    echo "Av2: $av2 <br>";
    $media = ($av1 + $av2) / 2;
    echo "Média: $media <br>";
    ?>

</body>
</html>