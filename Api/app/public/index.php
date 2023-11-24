<?php

// api/app/public/index.php

require __DIR__ . '/../../vendor/autoload.php';

use App\Database\DbConnection;

// Inicializar a conexão com o banco de dados
$dbConnection = new DbConnection();
$dbConnection->connect();

// Lógica da API
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/login':
        require 'login.php';
        break;
    case '/auth':
        require 'auth.php';
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        echo '404 Not Found';
        break;
}

// Fechar a conexão com o banco de dados no final da execução
$dbConnection->closeConnection();
