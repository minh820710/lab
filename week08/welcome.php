<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<?php include 'header.inc'; ?>

<main>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <p>You have successfully logged in.</p>
    <p>Your token: <?php echo htmlspecialchars($_SESSION['token'] ?? ''); ?></p>
</main>
