<?php
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

// Handle form submissions
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update_code'])) {
        // Update login code
        $new_code = $_POST['login_code'] ?? '';
        if (!empty($new_code)) {
            $stmt = $pdo->prepare("UPDATE config SET login_code = :login_code LIMIT 1");
            $stmt->execute([':login_code' => $new_code]);
            $message = "Login code updated successfully.";
        } else {
            $message = "Login code cannot be empty.";
        }
    } elseif (isset($_POST['generate_token'])) {
        // Generate and save token
        $token = bin2hex(random_bytes(16)); // Generate a secure random token (32 characters)
        $stmt = $pdo->prepare("INSERT INTO tokens (token) VALUES (:token)");
        $stmt->execute([':token' => $token]);

        // Generate the URL
        $base_url = "https://yourdomain.com"; // Replace with your site's base URL
        $token_url = $base_url . "/access.php?token=" . $token;
        $message = "Token URL: <a href='$token_url'>$token_url</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Access</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Manage Access</h1>

    <!-- Section to update login code -->
    <form method="POST">
        <h2>Update Login Code</h2>
        <label for="login_code">New Login Code:</label>
        <input type="text" id="login_code" name="login_code" required>
        <button type="submit" name="update_code">Update Login Code</button>
    </form>

    <!-- Section to generate token -->
    <form method="POST">
        <h2>Generate Token URL</h2>
        <button type="submit" name="generate_token">Generate Token</button>
    </form>

    <!-- Display messages -->
    <?php if (!empty($message)): ?>
        <div class="message">
            <?= $message ?>
        </div>
    <?php endif; ?>
</body>
</html>
