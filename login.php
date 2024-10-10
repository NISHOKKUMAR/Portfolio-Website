<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize user input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if ($username === 'admin' && $password === 'password') {
        $_SESSION['user_role'] = 'admin'; // Set the user role to admin
        $_SESSION['logged'] = true; // track wether logged in or not 
        header('Location: index.php'); // Redirect to your main page
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <!-- Login Card -->
    <div class="container">
        <!-- Post method process the credential in same file{login.php} and redirect to index.php if credential match -->
        <form method="post" action="">
            <h2>Login</h2>
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <input type="text" name="username" placeholder="Username" required>              <!-- Provide Username -->
            <input type="password" name="password" placeholder="Password" required>          <!-- Provide Password -->
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
