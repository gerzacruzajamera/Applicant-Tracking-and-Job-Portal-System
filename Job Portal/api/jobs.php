<?php

header('Content-Type: application/json');
http_response_code(501);

echo json_encode([
    'ok' => false,
    'response' => 'This API feature is still under development.',
    'instruction' => 'Complete the setup using COMMIT_GUIDE_STEP_BY_STEP.md'
], JSON_PRETTY_PRINT);

exit;