<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<?php include 'header.inc'; ?>

<main>
    <p><?php echo "Welcome, " . htmlspecialchars($_SESSION['user']); ?></p>
</main>

<?php include 'footer.inc'; ?>