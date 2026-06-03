<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Detect environment
$is_local = (php_sapi_name() === 'cli') || (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === '::1'));

if ($is_local) {
    // LOCAL DEVELOPMENT
    $host = 'localhost';
    $db_name = 'beetle_system';
    $username = 'root';
    $password = '';
    define('BASE_URL', '/beetle_system/');
} else {
    // PRODUCTION SETTINGS
    $host = 'localhost'; // Usually remains localhost on most cPanel/VPS hosts
    $db_name = 'u339073634_beetle_system';
    $username = 'u339073634_beetle_system';
    $password = 'Admin@beetlesysteM@123#';
    define('BASE_URL', '/');
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Security Keys
define('SITE_KEY', 'beetle_secret_2026_xyz'); 
?>
