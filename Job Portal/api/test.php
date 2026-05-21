<?php
header('Content-Type: application/json');
echo json_encode([
    'success' => true,
    'message' => 'Starter API is reachable. Later commits add database-backed endpoints.',
    'stage' => 'incomplete'
]);
