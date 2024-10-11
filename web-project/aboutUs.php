<?php

include 'connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Virtu-Learn combines personalized tutoring with expert educators and flexible scheduling to support every learner. Our passionate tutors create engaging learning experiences, making education effective and enjoyable. Whether you need homework help or exam preparation, we provide a safe and supportive environment to help you achieve your academic goals. Unlock your potential with Virtu-Learn!</p>
         <a href="course.php" class="inline-btn">our courses</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>Virtu-Learn has been a game-changer for my studies! The tutors are knowledgeable and really take the time to understand my learning style.</p>
         <div class="user">
            <div>
               <h3>johnm</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I love the flexibility that Virtu-Learn offers. I can schedule sessions around my busy life and this helps me balance my studies with other commitments.</p>
         <div class="user">
            <div>
               <h3>sarahk</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Virtu-Learn has excellent resources and supportive tutors. The personalized approach helped me prepare for my exams effectively.</p>
         <div class="user">
            <div>
               <h3>emilyr</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The tutors are friendly and patient, and they really help me understand the material. I feel more prepared for my classes than ever before!</p>
         <div class="user">
            <div>
               <h3>michealt</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I had a great experience with Virtu-Learn! The personalized tutoring sessions helped me grasp complex concepts easily. I'm very satisfied with my progress!</p>
         <div class="user">
            <div>
               <h3>sophiad</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>