<?php
require_once __DIR__ . '/app/bootstrap.php';
include __DIR__ . '/views/header.php';
?>
<div class="card">
    <p class="eyebrow">Admin login placeholder</p>
    <h1>Login page</h1>
    <div class="notice">This starter does not authenticate yet. Commit 01 and Commit 02 add the working auth flow.</div>
    <form>
        <label>Email</label>
        <input class="input" value="admin@example.com" readonly>
        <label>Password</label>
        <input class="input" type="password" value="password" readonly>
        <button class="primary" type="button">Login disabled in starter</button>
    </form>
</div>
<?php include __DIR__ . '/views/footer.php'; ?>
