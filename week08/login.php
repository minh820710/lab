<?php include 'header.inc'; ?>

<main>
    <h2>Login</h2>

    <?php if (isset($_GET['error'])): ?>
        <p>Invalid username or password. Please try again.</p>
    <?php endif; ?>

    <form action="process.php" method="post">
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </p>
        <input type="hidden" name="token" value="M1234567">
        <p><button type="submit">Log in</button></p>
    </form>
</main>

<?php include 'footer.inc'; ?>