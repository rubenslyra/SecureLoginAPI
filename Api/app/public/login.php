<?php

// api/app/public/login.php

// Lógica para lidar com o processo de login
$response = [
    'status' => 'success',
    'message' => 'Login successful',
    'data' => [
        'token' => 'your_generated_token',
    ],
];

header('Content-Type: application/json');
echo json_encode($response);
