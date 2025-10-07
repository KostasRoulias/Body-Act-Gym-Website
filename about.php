<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./about.css">
    <link rel="stylesheet" href="./contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">
    <div class="wrapper">
        <nav class="navbar">
            <div class="content">
                <div class="logo"><a href="./home.php"> <img src="./images/bodyact.png" alt="logo"></a> </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li id="exercises" class="exercises"><a href="./exercises.php">Exercises</a></li>
                    <li id="calories" class="calories"><a href="./displayNutrition.php">Calories</a></li>
                    <div class="buttons">
                        <li><a href="./delete.php"><button type="submit" class="logoutBtn" id="logoutBtn">Logout</button></a></li>
                    </div>
                    <script>
                        const loggedIn = <?php echo isset($_SESSION['loggedin']) ? 'true' : 'false'; ?>;
                        console.log(loggedIn);
                    </script>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </div>
    <!-- Carousel Section -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/gym1.jpeg" class="d-block w-100" alt="1">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/gym2.jpg" class="d-block w-100" alt="2">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/gym3.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/gym4.jpg" class="d-block w-100" alt="4">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/gym5.jpg" class="d-block w-100" alt="5">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/gym6.jpg" class="d-block w-100" alt="6">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="./images/gym7.jpg" class="d-block w-100" alt="7">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container1">
        <div class="description">
            <p>
                Welcome to <span style="color: #2ed9a0; font-size:20px">BodyAct</span> , located in the vibrant community of Melissia! For the past three years, we've been
                proudly serving our members with a diverse range of fitness options tailored to meet their individual goals and
                preferences.
            </p>
            <p>
                At BodyAct, we offer a comprehensive selection of fitness programs, including CrossFit, Pilates, Yoga, Kangoo,
                and personalized training sessions for both individuals and small groups. Whether you're seeking high-intensity
                workouts or mindful practices, our dedicated team of experienced coaches is here to guide and support you every
                step of the way.
            </p>
            <hr>
            <p>
                What sets us apart is our commitment to providing a holistic approach to fitness. In addition to our state-of-the-art
                indoor facilities, we also offer outdoor training options, allowing you to experience the benefits of exercise in
                the fresh air and natural surroundings.
            </p>
            <p>
                Our gym is more than just a place to work out; it's a community where individuals come together to pursue their
                fitness journey, connect with like-minded peers, and achieve their health and wellness goals. We believe in fostering
                a supportive and inclusive environment where everyone feels empowered to challenge themselves and reach new heights.
            </p>
        </div>

    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3141.791912342532!2d23.829959510799714!3d38.05193469603013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a19f361bbdda25%3A0x9b96f4609086e3a8!2sBody%20Act%20Studio%20Melissia!5e0!3m2!1sel!2sgr!4v1715113861771!5m2!1sel!2sgr" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>



    <button id="scrollToTopBtn" onclick="scrollToTop()"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>

    <footer>
        <div class="footer1-container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p> <span style="text-decoration: underline;">Email: </span>bodyactstudio@gmail.com</p>
                <p> <span style="text-decoration: underline;">Phone: </span><br>211-735 6915</p>
                <p> <span style="text-decoration: underline;">Address: </span><br>Kallergi 27, Melissia</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="list1">
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./about.php">About Us</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/p/body_act_studio-100076294230506/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/body_act_studio/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 2024 BodyAct. All rights reserved.</p>
        </div>
    </footer>

    <script src="./home1.js" charset="utf-8"></script>
    <script src="./contact.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>