<?php
require_once __DIR__ . '/app/bootstrap.php';
include __DIR__ . '/views/header.php';
?>

<div class="card">
    <p class="eyebrow">Admin login placeholder</p>
    <h1>Login page</h1>

    <div class="notice">
        This starter does not authenticate yet. Commit 01 and Commit 02 add the working auth flow.
    </div>

    <form method="POST" action="#">
        <label>Email</label>
        <input class="input" value="admin@example.com" readonly>

        <label>Password</label>
        <input class="input" type="password" placeholder="password" readonly>

        <button class="primary" type="submit" disabled>
            Login disabled in starter
        </button>
    </form>
</div>

<?php include __DIR__ . '/views/footer.php'; ?>