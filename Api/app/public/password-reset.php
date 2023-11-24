<?php

// api/app/public/password-reset.php

use App\Database\DbConnection;

// Lógica para redefinição de senha
$headers = getallheaders();
$token = $headers['Authorization'] ?? '';

$dbConnection = new DbConnection();
$dbConnection->connect();

if ($token === 'your_reset_token') {
    // Lógica para redefinir a senha
    // (Substitua este exemplo pela lógica real de redefinição de senha)

    $response = [
        'status' => 'success',
        'message' => 'Password reset successful',
    ];
} else {
    $response = [
        'status' => 'error',
        'message' => 'Invalid reset token',
    ];
}

header('Content-Type: application/json');
echo json_encode($response);

// Fechar a conexão com o banco de dados no final da execução
$dbConnection->closeConnection();
