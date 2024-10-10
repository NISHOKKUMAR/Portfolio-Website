<?php session_start(); 

if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
    $greeting = "NISHOK KUMAR";
    session_destroy();
} else {
    $greeting = "to My Portfolio";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/projects.css">
    <title>Your Portfolio</title>
</head>
<body>
    <div class="container">
        <aside>
            <div class="role-card">
                <img src="images/ORVBA.jpeg" alt="profile pic" />
                <h3>NISHOK KUMAR</h3>
                <p class="role">Web Developer | Web Pentester</p>
                <hr>
                <!-- Personal Contact -->
                <div class="contact-info">
                    <div class="email">
                        <img src="images/email-icon.png" alt="Email Icon" />
                        <a href="mailto:nishokkumarsrm@gmail.com">nishokkumarsrm@gmail.com</a>
                    </div>
                    <div class="phone">
                        <img src="images/phone-icon.png" alt="Phone Icon" />
                        <a href="tel:+916382422061">6382422061</a>
                    </div>
                </div>

                <!-- Social Contact -->
                <div class="social-links">
                    <div class="github-info">
                        <img src="images/github-icon.png" alt="GitHub Icon" />
                        <a href="https://github.com/NISHOKKUMAR" target="_blank">Github</a>
                    </div>
                    <div class="linkedin-info">
                        <img src="images/linkedin-icon.png" alt="LinkedIn Icon" />
                        <a href="https://linkedin.com/in/nishok" target="_blank">LinkedIn</a>
                    </div>
                </div>

            </div>
        </aside>
        <div class="main-area">
            <!-- Navigation Bar -->
            <nav>
                <ul class="nav-left">
                    <li><a href="#" class="nav-link" data-page="home">Home</a></li>
                    <li><a href="#" class="nav-link" data-page="projects">Projects</a></li>
                    <li><a href="#" class="nav-link" data-page="blogs">Blogs</a></li>
                    <li>
                        <div class="login-button">
                            <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]) : ?>
                                <a href="logout.php">Log out</a>
                            <?php else : ?>
                                <a href="login.php">Login</a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
                
            </nav>
            <!-- This section dynamically changes as per the navigation bar clicks using AJAX Requests -->
            <div id="content">
                <?php include 'home.php'; ?>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>