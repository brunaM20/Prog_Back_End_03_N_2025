<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07-02</title>
</head>
     <!-- Criar um formulario para o usuario digitar um numero
     imprimir o numero digitado e dizer se é par ou impar, utilizando operador ternario -->
<body>
    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = $_POST['numero'];

        // Usando operador ternário
        $resultado = ($numero % 2 === 0) ? "Par" : "Ímpar";

        echo "<p>O número digitado foi <strong>$numero</strong> e ele é <strong>$resultado</strong>.</p>";
    }
    ?>
</body>
</html>