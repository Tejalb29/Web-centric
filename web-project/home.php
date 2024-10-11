<?php
include 'connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?> <!-- Include header only once here -->

<!-- Description Section -->
<section class="description">
    <h2>Welcome to Virtu-Learn</h2>
    <p>At Virtu-Learn, we are dedicated to providing innovative and personalized learning experiences for all. Our platform offers a diverse range of courses tailored to meet the needs of every learner. Join us on this educational journey and unlock your potential today!</p>
</section>

<!-- Courses Section Starts -->
<section class="courses">
    <h1 class="heading">Available Courses</h1>

    <div class="box-container">
        <?php
        // Prepare the SQL statement to fetch courses
        $select_courses = $conn->prepare("SELECT * FROM `course` ORDER BY courseID ASC LIMIT 6");
        $select_courses->execute();
        $result = $select_courses->get_result();

        if ($result->num_rows > 0) {
            while ($fetch_course = $result->fetch_assoc()) {
                // Fetch tutor details
                $select_tutor = $conn->prepare("SELECT * FROM `tutor` WHERE tutorID = ?");
                $select_tutor->bind_param("i", $fetch_course['tutorID']);
                $select_tutor->execute();
                $tutor_result = $select_tutor->get_result();
                $fetch_tutor = $tutor_result->fetch_assoc();
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

    <div class="more-btn">
        <a href="course.php" class="inline-option-btn">View More</a>
    </div>
</section>
<!-- Courses Section Ends -->

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
