<?php
// reset_password.php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('UPDATE users SET password = ? WHERE username = ?');
    $stmt->execute([$new_password, $username]);

    echo "Senha redefinida com sucesso!";
}
?>

<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>
    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" required>
    <br>
    <button type="submit">Reset Password</button>
</form>
