<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $token = $_POST['token'] ?? '';

    if ($username === 'Minh Tat' && $password === 'SWC00073') {
        $_SESSION['user'] = $username;
        $_SESSION['token'] = $token;
        header('Location: welcome.php');
        exit();
    }
}

// Wrong details, or the page was opened directly
header('Location: login.php?error=1');
exit();