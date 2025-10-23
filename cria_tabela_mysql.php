<!DOCTYPE html>
<html lang=pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once 'config.php';
require_once 'conecta.php';

if (DB_TYPE !== 'mysql') { die("Este script é apenas para MySQL. Altere DB_TYPE em config.php."); }

$query = "CREATE TABLE IF NOT EXISTS USER(
id_user INT not null primary key auto_increment, 
email VARCHAR(100) not null UNIQUE, 
senha VARCHAR(255) not null, 
data DATE)";
$pdo->exec($query);
echo "Tabela USER (MySQL) criada/verificada com sucesso (campo **email UNIQUE**)!";

$pdo = null;
?>
</body>
</html>