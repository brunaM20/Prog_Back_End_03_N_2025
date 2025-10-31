<?php
require_once 'config.php';
require_once 'conecta.php';

// Exemplo: atualiza o agendamento com ID 1
$id_alvo = 1;

$novo_nome_dono = 'Maria Silva';
$novo_telefone = '(11) 99999-1234';
$novo_nome_pet = 'Thor';
$novo_procedimento = 'Tosa completa';
$nova_data_agendada = '2025-11-10';

// Query de atualização
$query = "UPDATE agendamentos 
          SET nome_dono = :nome_dono, 
              telefone = :telefone, 
              nome_pet = :nome_pet, 
              procedimento = :procedimento, 
              data_agendada = :data_agendada 
          WHERE id_agendamento = :id_agendamento";

$stmt = $pdo->prepare($query);

// Bind de parâmetros
$stmt->bindValue(':nome_dono', $novo_nome_dono);
$stmt->bindValue(':telefone', $novo_telefone);
$stmt->bindValue(':nome_pet', $novo_nome_pet);
$stmt->bindValue(':procedimento', $novo_procedimento);
$stmt->bindValue(':data_agendada', $nova_data_agendada);
$stmt->bindValue(':id_agendamento', $id_alvo, PDO::PARAM_INT);

try {
    $stmt->execute();
    $linhas_afetadas = $stmt->rowCount();

    if ($linhas_afetadas > 0) {
        $msg = urlencode("✅ Agendamento ID {$id_alvo} atualizado com sucesso para o pet {$novo_nome_pet}!");
        header("Location: seleciona.php?status=success&msg={$msg}");
    } else {
        $msg = urlencode("⚠️ Nenhuma linha foi atualizada. O ID {$id_alvo} pode não existir ou os dados já estavam iguais.");
        header("Location: index.php?status=error&msg={$msg}");
    }
} catch (PDOException $e) {
    $msg = urlencode("Erro ao atualizar: " . $e->getMessage());
    header("Location: index.php?status=error&msg={$msg}");
}

// Fecha conexões
$stmt = null;
$pdo = null;
exit;
?>
