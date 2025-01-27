<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require "connection.php";
    ?>
    <div class="container">
        <form action="" method="POST">
            <?php if (!empty($error_message)): ?>
                <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
            <?php endif; ?>

            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" placeholder="Enter Username" required>
            <br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>