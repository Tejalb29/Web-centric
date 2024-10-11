<?php
include 'connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

// Fetch user profile if user_id is set
$fetch_profile = null;
if ($user_id) {
    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE studentID = ?");
    $select_profile->bind_param("s", $user_id);
    $select_profile->execute();
    $result = $select_profile->get_result();

    if ($result->num_rows > 0) {
        $fetch_profile = $result->fetch_assoc();
    }
}
?>

<!-- Header Section -->
<header class="header">
   <section class="flex">
      <!-- Logo -->
      <a href="home.php" class="logo">Virtu-Learn</a>

      <!-- Search Form -->
      <form action="search_course.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="Search courses..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>

      <!-- Icon Links -->
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <!-- User Profile Section -->
      <div class="profile">
         <?php if ($fetch_profile): ?>
            <!-- Display user info if logged in -->
            <img src="uploaded_files/<?= htmlspecialchars($fetch_profile['image']); ?>" alt="">
            <h3><?= htmlspecialchars($fetch_profile['fName'] . ' ' . $fetch_profile['lName']); ?></h3>
            <span>Student</span>
            <a href="profile.php" class="btn">View Profile</a>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">Login</a>
               <a href="register.php" class="option-btn">Register</a>
            </div>
            <a href="components/user_logout.php" onclick="return confirm('Logout from this website?');" class="delete-btn">Logout</a>
         <?php else: ?>
            <!-- Prompt for login or registration if not logged in -->
            <h3>Please login or register</h3>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">Login</a>
               <a href="register.php" class="option-btn">Register</a>
            </div>
         <?php endif; ?>
      </div>
   </section>
</header>

<!-- Sidebar Section -->
<div class="side-bar">
   <!-- Close Sidebar Button -->
   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <!-- Profile Section inside Sidebar -->
   <div class="profile">
      <?php if ($fetch_profile): ?>
         <!-- Display user info -->
         <img src="uploaded_files/<?= htmlspecialchars($fetch_profile['image']); ?>" alt="">
         <h3><?= htmlspecialchars($fetch_profile['fName'] . ' ' . $fetch_profile['lName']); ?></h3>
         <span>Student</span>
         <a href="profile.php" class="btn">View Profile</a>
      <?php else: ?>
         <!-- If not logged in, prompt to login or register -->
         <h3>Please login or register</h3>
         <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
      <?php endif; ?>
   </div>

   <!-- Navigation Links -->
   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About Us</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>
</div>
