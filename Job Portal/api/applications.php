<?php
require_once __DIR__ . '/../app/bootstrap.php';

header('Content-Type: application/json');

try {
    $db = new PDO('sqlite:' . __DIR__ . '/../database/database.sqlite');

    $stmt = $db->query("SELECT * FROM applications");
    $applications = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        'success' => true,
        'data' => $applications
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
