<?php
require_once 'config.php';
require_once 'conecta.php';
require_once 'header.php';

// A mensagem de feedback (GET) será exibida automaticamente pelo header.php

$query = "SELECT id_agendamento, nome_dono, telefone, nome_pet, procedimento, data_agendada 
          FROM agendamentos 
          ORDER BY id_agendamento DESC";
$stmt = $pdo->prepare($query);
$stmt->execute();

$registros = $stmt->fetchAll();

echo "<h1>📋 Lista de Agendamentos</h1>";

if (count($registros) > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0' style='width:100%; background:#fff;'>";
    echo "<thead>
            <tr style='background:#f2f2f2;'>
                <th>ID</th>
                <th>Nome do Dono</th>
                <th>Telefone</th>
                <th>Nome do Pet</th>
                <th>Procedimento</th>
                <th>Data Agendada</th>
            </tr>
          </thead>";
    echo "<tbody>";

    foreach($registros as $agendamento) {
        echo "<tr>";
        echo "<td style='text-align:center'>" . htmlspecialchars($agendamento['id_agendamento']) . "</td>";
        echo "<td>" . htmlspecialchars($agendamento['nome_dono']) . "</td>";
        echo "<td>" . htmlspecialchars($agendamento['telefone']) . "</td>";
        echo "<td>" . htmlspecialchars($agendamento['nome_pet']) . "</td>";
        echo "<td>" . htmlspecialchars($agendamento['procedimento']) . "</td>";
        echo "<td style='text-align:center'>" . htmlspecialchars($agendamento['data_agendada']) . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>Nenhum agendamento encontrado. Que tal <a href='cadastro.php'>cadastrar um novo?</a></p>";
}

$stmt = null;
$pdo = null;

require_once 'footer.php';
?>
