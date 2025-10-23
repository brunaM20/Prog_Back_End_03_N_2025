<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Idade</title>
</head>
<body>
    <h2>Verifique se você pode criar uma conta</h2>

    <!-- Formulário -->
    <form method="post" action="">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $idade = intval($_POST["idade"]);

        if ($idade <= 0) {
            echo "<p>Idade inválida.</p>";
        } elseif ($idade < 13) {
            echo "<p>Você não pode criar uma conta. A idade mínima é 13 anos.</p>";
        } elseif ($idade <= 17) {
            echo "<p>Você pode criar uma conta com o consentimento dos pais.</p>";
        } elseif ($idade >= 18 && $idade <= 64) {
            echo "<p>Você pode criar uma conta. Bem-vindo à nossa rede social!</p>";
        } elseif ($idade >= 65 && $idade <= 120 ){ 
            echo "<p>Você pode criar uma conta. Lembre-se de verificar nossas configurações de privacidade.</p>";
        } else {
            echo "<p>Você não é Moises.</p>";
        }
    }

    ?>
</body>
</html>