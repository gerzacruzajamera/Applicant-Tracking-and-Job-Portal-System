<?php
header('Content-Type: application/json');
http_response_code(501);
echo json_encode([
    'success' => false,
    'message' => 'Not implemented in starter. Follow COMMIT_GUIDE_STEP_BY_STEP.md to add this API.'
]);
