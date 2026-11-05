<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'YourName' && $password === 'YourStudentID') {
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit();
    }
}

// Wrong details, or the page was opened directly
header('Location: login.php?error=1');
exit();