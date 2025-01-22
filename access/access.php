<?php
session_start();

// Database connection
$dsn = 'mysql:host=localhost;dbname=portfolio';
$username = 'root';
$password = '';
$options = [];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

// Check if the website is live
$query = $pdo->query("SELECT is_live FROM config LIMIT 1");
$is_live = $query->fetchColumn();
if (!$is_live) {
    die("The website is currently offline.");
}

// Validate token or login code
$token = $_GET['token'] ?? null;
if ($token) {
    // Check if token is valid
    $stmt = $pdo->prepare("SELECT 1 FROM tokens WHERE token = :token");
    $stmt->execute([':token' => $token]);
    if ($stmt->fetch()) {
        // Token is valid, set a cookie
        setcookie('access_granted', '1', time() + (3 * 24 * 60 * 60), "/");
        $_SESSION['access_granted'] = true;
        header("Location: index.php");
        exit;
    } else {
        die("Invalid token.");
    }
}

// Check cookie/session
if (!isset($_COOKIE['access_granted']) && !isset($_SESSION['access_granted'])) {
    // No valid token or cookie, redirect to login
    header("Location: login.php");
    exit;
}
?>
