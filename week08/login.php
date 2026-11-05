<?php include 'header.inc'; ?>

<main>
    <h2>Login</h2>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="hidden" name="token" value="M1234567">
        <input type="submit" value="Login">
    </form>
</main>

<?php include 'footer.inc'; ?>