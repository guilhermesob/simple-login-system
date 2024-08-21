<?php
// home.php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

echo "Bem-vindo! Você está logado.";
?>

<a href="logout.php">Logout</a>
