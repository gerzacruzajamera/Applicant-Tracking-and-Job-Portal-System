<?php $appName = $config['app_name'] ?? 'CareerLink Starter'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($appName) ?></title>
    <link rel="stylesheet" href="<?= app_url('assets/css/style.css') ?>">
</head>
<body>
<div class="app-shell">
    <nav class="topbar">
        <div class="brand"><span class="brand-dot"></span><?= e($appName) ?></div>
        <div class="nav-note">Starter / incomplete</div>
    </nav>
    <main class="content">
