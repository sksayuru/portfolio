<?php
session_start();

// Database connection (same as above)
$dsn = 'mysql:host=localhost;dbname=portfolio';
$username = 'root';
$password = '';
$options = [];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_code = $_POST['login_code'] ?? '';
    $query = $pdo->query("SELECT login_code FROM config LIMIT 1");
    $correct_code = $query->fetchColumn();
    if ($login_code === $correct_code) {
        // Login successful, set a cookie
        setcookie('access_granted', '1', time() + (3 * 24 * 60 * 60), "/");
        $_SESSION['access_granted'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid login code.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Enter Login Code</h1>
    <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="POST">
        <label for="login_code">Login Code:</label>
        <input type="text" name="login_code" id="login_code" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
