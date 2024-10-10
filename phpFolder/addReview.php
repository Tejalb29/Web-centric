<?php
require_once 'connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $review = htmlspecialchars($_POST['review']);
    $rating = htmlspecialchars($_POST['rating']);

    // Optionally, save the data to a file or database
    $file = 'reviews.txt'; // Create a text file to store reviews
    $entry = "Name: $name\nReview: $review\nRating: $rating\n\n";
    file_put_contents($file, $entry, FILE_APPEND); // Append the review to the file

    // Optionally, redirect to a thank you page or show a success message
    echo "<script>alert('Thank you for your review!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-pUA-Compatible" content="ie=edge" />
  <title>Review Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <script src="script.js" defer></script>
</head>
<body>
  <div class="container">
    <!-- Title section -->
    <div class="title">Review</div>
    <div class="content">
      <!-- Registration form -->
      <form action="" method="POST">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>

          <div class="input-box">
            <span class="details">Review</span>
            <input type="text" name="review" placeholder="Enter your review" required>
          </div>
        </div>

        <div class="rating-box">
          <header>How was your experience?</header>
          <div class="stars">
            <input type="radio" name="rating" value="5" id="star5" required>
            <label for="star5"><i class="fa-solid fa-star"></i></label>
            <input type="radio" name="rating" value="4" id="star4" required>
            <label for="star4"><i class="fa-solid fa-star"></i></label>
            <input type="radio" name="rating" value="3" id="star3" required>
            <label for="star3"><i class="fa-solid fa-star"></i></label>
            <input type="radio" name="rating" value="2" id="star2" required>
            <label for="star2"><i class="fa-solid fa-star"></i></label>
            <input type="radio" name="rating" value="1" id="star1" required>
            <label for="star1"><i class="fa-solid fa-star"></i></label>
          </div>
        </div>

        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
  </script>
</body>
</html>
