<?php
require_once __DIR__ . '/app/bootstrap.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'admin@example.com' && $password === 'password') {
        $_SESSION['user'] = $email;
        header('Location: admin/dashboard.php');
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>

<form method="POST">
    <input name="email" placeholder="Email">
    <input name="password" type="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<?php if (isset($error)) echo $error; ?>