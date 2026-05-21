<?php
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function app_url(string $path = ''): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
    return 'http://' . $host . '/admin/php/' . ltrim($path, '/');
}
