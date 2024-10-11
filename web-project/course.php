<?php
// Include database connection
include 'connect.php';

// Get user ID from cookies
$user_id = $_COOKIE['user_id'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<!-- Courses section starts -->
<section class="courses">
    <h1 class="heading">All Courses</h1>
    <div class="box-container">
        <?php
        // Fetch all courses
        $select_courses = $conn->prepare("SELECT * FROM `course` ORDER BY courseID ASC");
        $select_courses->execute();
        $courses = $select_courses->get_result();

        // Check if there are courses available
        if ($courses->num_rows > 0) {
            while ($fetch_course = $courses->fetch_assoc()) {
                // Fetch tutor details
                $select_tutor = $conn->prepare("SELECT * FROM `tutor` WHERE tutorID = ?");
                $select_tutor->bind_param("s", $fetch_course['tutorID']);
                $select_tutor->execute();
                $fetch_tutor = $select_tutor->get_result()->fetch_assoc();
                ?>
            
                <div class="box">
                    <!-- Image section -->
                    <div class="image-container">
                        <img src="<?= htmlspecialchars($fetch_course['image_link']); ?>" alt="<?= htmlspecialchars($fetch_course['courseName']); ?>" style="max-width: 100%; height: auto;">
                    </div>
                    <h3 class="title"><?= htmlspecialchars($fetch_course['courseName']); ?></h3>
                    <p class="description"><?= htmlspecialchars($fetch_course['description']); ?></p>
                    <a href="playlist.php?get_id=<?= htmlspecialchars($fetch_course['courseID']); ?>" class="inline-btn">View Playlist</a>
                </div>
                <?php
            }
        } else {
            echo '<p class="empty">No courses added yet!</p>';
        }
        ?>
    </div>
</section>
<!-- Courses section ends -->


</body>
</html>
