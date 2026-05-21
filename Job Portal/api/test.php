<?php

header('Content-Type: application/json');

$response = [
    'success' => true,
    'message' => 'API is running successfully.',
    'stage' => 'starter'
];

echo json_encode($response, JSON_PRETTY_PRINT);