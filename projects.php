

<?php
// Include your database connection file
include 'database/db_connection.php';

// Fetch projects from the database
$query = "SELECT * FROM projects"; 
$result = $conn->query($query);
?>

<div class="showcase">
    <!-- Button which redirects to the page for adding a new project -->
    <?php if (isset($_SESSION['logged']) && $_SESSION['logged']) : ?>
        <div class="update-project">
            <a href="UpdateProject.php">Add New Project</a>
        </div>
    <?php endif; ?>


    <!-- List the Projects -->
    <div class="projects">
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="project">';
                    // Ensure the image URL is correctly formed
                    echo '<div class="project-pic"><img src="images/ORVBA.jpeg" alt="' . htmlspecialchars($row['title']) . '"/></div>'; // Project image
                    echo '<div class="project-content">';
                        echo '<h1>' . htmlspecialchars($row['title']) . '</h1>'; // Project title
                        echo '<p>' . htmlspecialchars($row['description']) . '</p>'; // Project description
                        echo '<a href="' . htmlspecialchars($row['github_url']) . '" target="_blank">Github Link</a>'; // Github link
                    echo '</div>'; // Close project-content
                echo '</div>'; // Close project
            }
        } else {
            echo '<p>No projects found.</p>';
        }
        ?>
    </div>
</div>
