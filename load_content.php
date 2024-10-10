<?php
session_start();

// Determine the greeting based on visitor or admin
if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
    $greeting = "NISHOK KUMAR";
    session_destroy();
} else {
    $greeting = "to My Portfolio";
}

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'projects':
        include 'projects.php';
        break;
    case 'blogs':
        include 'blogs.php';
        break;
    case 'home':
    default:
        include 'home.php'; // Default to home
}
?>
