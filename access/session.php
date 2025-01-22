<?php
session_start();
if (!isset($_COOKIE['access_granted']) && !isset($_SESSION['access_granted'])) {
    header("Location: login.php");
    exit;
}
?>
