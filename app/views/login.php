<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (!empty($error)) : ?>
        <p><?= html_escape($error) ?></p>
    <?php endif; ?>

    <form method="post" action="<?= site_url('login') ?>">
        <p>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" value="<?= html_escape($username ?? '') ?>" required>
        </p>
        <p>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" required>
        </p>
        <button type="submit">Login</button>
    </form>
</body>
</html>