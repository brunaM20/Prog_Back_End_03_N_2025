<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
<?php
require_once 'config.php'; // carrega o arquivo de configuração
require_once 'header.php'; // carrega o cabeçalho com o menu
?>

<h1>Cadastrar Novo Usuário</h1>

<p>Insira as informações do novo usuário. A senha será armazenada com <code>password_hash()</code>.</p>

<form method="post" action="insere.php" style="max-width:400px;margin:auto;">
  <label for="email">Email:</label><br>
  <input type="email" name="email" id="email" required><br><br>
  
  <label for="senha">Senha:</label><br>
  <input type="password" name="senha" id="senha" required><br><br>
  
  <label for="data">Data de Cadastro:</label><br>
  <input type="date" name="data" id="data" value="<?php echo date('Y-m-d'); ?>" required><br><br>
  
  <input type="submit" value="Cadastrar">
</form>

<?php require_once 'footer.php'; // carrega o rodapé ?>
</body>
</html>
