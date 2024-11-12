<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>

        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Basote+Regular&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
    </head>
<body class="background">

    <header>

        <div class="container">
            <div class="logo">
                <img src="Images/logo.png" alt="Logo" class="logo-img">
                <h1 class="title">VIRTU-LEARN</h1>
            </div>

            <nav class="navbar">
                <ul>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#Enroll">Enrollment</a></li>
                    <li><a href="aboutUs.php">Reviews</a></li>
                    <li><a href="ContactUs.html">Contact Us</a></li>
                    <li><a href="SignIn.html">Login</a></li>
                    <li class="search-container">

                        <input type="text" class="search-input" placeholder="Search...">
                        <button class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="carousel-container">

        <div class="carousel-left">
            <div class="slide active">
                <img src="Images/carousel1.png" alt="First Slide Image">
            </div>

            <div class="slide inactive">
                <img src="Images/carousel2.png" alt="Second Slide Image">
            </div>
        </div>

        <div class="carousel-right">

            <div class="slide active">
                <div class="titre">
                    <h1 class="title">VIRTU-LEARN</h1>
                </div>

                <div style="position:relative;top:50px;">
                <p>At Virtu-Learn, we believe that every individual has the right to a unique, engaging, and enriching educational experience. Our mission is to create personalized learning pathways that are thoughtfully designed to meet the needs of learners from all walks of life, regardless of age, background, or skill level.</p>
                <p> By focusing on flexibility, inclusivity, and continuous growth, we are committed to empowering learners to thrive at every step of their educational pursuits, equipping them with the tools and knowledge they need for success in an ever-evolving world.</p>
                </div>

          </div>
          </div>

            <div class="slide inactive">

                <div class="titre">
                    <h1 class="title">OUR PURPOSE</h1> <!-- Added for second slide -->
                </div>

                <div style="position:relative;top:50px;">
                    <p>At Virtu-Learn, we offer a wide variety of courses and learning materials aimed at making education exciting and accessible. Whether you're a high school student getting ready for important exams, a professional looking to learn new skills, or someone simply curious about the world, we've got something for you. </p>
                    <p> Our experienced educators are here to help you succeed, providing support and guidance every step of the way. Learning with us is not just about gaining knowledge—it's about enjoying the journey too.</p>
             
                </div>
            </div  >
 </div>
 
    <script>
        document.querySelector('.search-button').addEventListener('click', function() {
            var searchInput = document.querySelector('.search-input');
            searchInput.classList.toggle('expand');
            searchInput.focus();
        });

        let currentSlide = 0;
        const slidesLeft = document.querySelectorAll('.carousel-left .slide');
        const slidesRight = document.querySelectorAll('.carousel-right .slide');

        function showNextSlide() {
            slidesLeft[currentSlide].classList.remove('active');
            slidesLeft[currentSlide].classList.add('inactive');
            // slidesRight[currentSlide].classList.remove('active');
            // slidesRight[currentSlide].classList.add('inactive');

            currentSlide = (currentSlide + 1) % slidesLeft.length;

            // slidesLeft[currentSlide].classList.remove('inactive');
            // slidesLeft[currentSlide].classList.add('active');
            // slidesRight[currentSlide].classList.remove('inactive');
            // slidesRight[currentSlide].classList.add('active');
        }

        // setInterval(showNextSlide, 5000);
    </script>



</body>

</html>
