<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: cadastro.php");
    exit;
}

$nome_dono = trim($_POST["nome_dono"] ?? '');
$telefone = trim($_POST["telefone"] ?? '');
$nome_pet = trim($_POST["nome_pet"] ?? '');
$procedimento = trim($_POST["procedimento"] ?? '');
$data_agendada = trim($_POST["data_agendada"] ?? '');

// Validação de campos
if (empty($nome_dono) || empty($telefone) || empty($nome_pet) || empty($procedimento) || empty($data_agendada)) {
    $msg = urlencode("Por favor, preencha todos os campos do formulário.");
    header("Location: cadastro.php?status=error&msg={$msg}");
    exit;
}

require_once 'conecta.php';

$query = "INSERT INTO agendamentos (nome_dono, telefone, nome_pet, procedimento, data_agendada)
          VALUES (:nome_dono, :telefone, :nome_pet, :procedimento, :data_agendada)";

try {
    $stmt = $pdo->prepare($query);

    $stmt->bindValue(':nome_dono', $nome_dono);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':nome_pet', $nome_pet);
    $stmt->bindValue(':procedimento', $procedimento);
    $stmt->bindValue(':data_agendada', $data_agendada);

    $stmt->execute();

    $id = $pdo->lastInsertId();
    $msg = urlencode("Agendamento de <b>" . htmlspecialchars($nome_pet) . "</b> cadastrado com sucesso! ID: {$id}");
    header("Location: seleciona.php?status=success&msg={$msg}");
    exit;

} catch (PDOException $e) {
    $msg = urlencode("Erro ao inserir no banco de dados: " . $e->getMessage());
    header("Location: index.php?status=error&msg={$msg}");
    exit;
}
?>
