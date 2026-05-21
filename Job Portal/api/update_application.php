<?php

header('Content-Type: application/json');
http_response_code(501);

$response = [
    'success' => false,
    'status' => 501,
    'message' => 'API endpoint is not implemented yet.',
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($response, JSON_PRETTY_PRINT);

exit;