<?php
require_once __DIR__ . '/app/bootstrap.php';

include_once __DIR__ . '/views/header.php';
?>

<div class="card">
    <p class="eyebrow">Admin Login</p>
    <h1>Login Page</h1>

    <div class="notice">
        Please enter your admin credentials.
    </div>

    <form method="POST" action="dashboard.php">

        <label for="email">Email</label>
        <input 
            class="input"
            type="email"
            id="email"
            name="email"
            placeholder="Enter email"
            required
        >

        <label for="password">Password</label>
        <input 
            class="input"
            type="password"
            id="password"
            name="password"
            placeholder="Enter password"
            required
        >

        <button class="primary" type="submit">
            Login
        </button>

    </form>
</div>

<?php include_once __DIR__ . '/views/footer.php'; ?>