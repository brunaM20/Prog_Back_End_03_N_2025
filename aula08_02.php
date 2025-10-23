<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Dia</title>
</head>
<body>
    <h1>Dia da Semana</h1>
    <?php
    $diaSemana = date('w');  // Retorna o dia da semana em número (0-6)
    echo "<h2>".date("d/m/Y h:m:s") . "</h2>";
    echo "Dia da Semana: $diaSemana<p>";

    switch ($diaSemana) {
        case 0:
            echo "Domingo";
            break;
        case 1:
            echo "Segunda-feira";
            break;
        case 2:
            echo "Terça-feira";
            break;
        case 3:
            echo "Quarta-feira";
            break;
        case 4:
            echo "Quinta-feira";
            break;
        case 5:
            echo "Sexta-feira";
            break;
        case 6:
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
}
?>

</body>
</html>