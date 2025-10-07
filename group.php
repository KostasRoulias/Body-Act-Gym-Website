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
    <title>Small Group Training</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./group.css">
    <link rel="stylesheet" href="./contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
                    <div class="buttons">
                        <li><a href="./delete.php"><button type="submit" id="logoutBtn">Logout</button></a></li>
                    </div>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <div class="crossfitContainer">
            <div class="cross">
                <img src="./images/groupSection.jpg" alt="crossfit">
                <div class="text">
                    <p> <span style="color: #6aebbc; font-size: 20px;">Small group training</span> involves working with
                        a certified fitness professional in a small group setting, typically consisting of 2 to 10 participants.
                        Similar to personal training, small group training offers personalized instruction and guidance tailored
                        to the needs and goals of each individual within the group.<br><br><br>
                        Here are some benefits of Small Group Training: <br><br>
                    <ul>
                        <li> <span class="bullets">Cost-Effective:</span>Small group training is often more affordable than one-on-one personal training sessions, making it a cost-effective option for individuals who still want personalized attention and instruction but are looking for a more budget-friendly option.</li>
                        <li> <span class="bullets">Personalized Attention: </span>Despite being in a group setting, small group training still provides a high level of personalized attention from the fitness professional leading the session. Participants receive individualized instruction, form correction, and guidance tailored to their specific fitness goals and needs.</li>
                        <li> <span class="bullets">Social Support and Motivation: </span>Working out in a small group provides a supportive and motivating environment. Participants can encourage and motivate each other, share experiences, and celebrate achievements together, fostering a sense of camaraderie and accountability that can help keep everyone motivated and committed to their fitness goals.</li>
                        <li> <span class="bullets">Variety and Fun: </span>Small group training sessions often incorporate a variety of exercises, equipment, and workout formats to keep things interesting and engaging. Participants may engage in circuit training, HIIT (high-intensity interval training), strength training, functional training, and more, ensuring a diverse and dynamic workout experience.</li>
                        <li> <span class="bullets">Competition and Challenge: </span>The group dynamic in small group training can naturally create a sense of friendly competition, inspiring participants to push themselves harder and challenge their limits. Competition can be a powerful motivator for improving performance and achieving fitness goals.</li>
                        <li> <span class="bullets">Accountability and Commitment: </span>Small group training provides a level of accountability that can help participants stay committed to their fitness routine. Knowing that others are counting on them to show up for workouts can help individuals stay on track and prioritize their health and fitness goals.</li>
                        <li> <span class="bullets">Expert Guidance and Instruction: </span>Small group training sessions are led by certified fitness professionals who provide expert guidance, instruction, and support throughout the workout. Trainers can modify exercises, provide feedback on form and technique, and offer individualized coaching to ensure that each participant gets the most out of their workout.</li>

                    </ul>
                    </p>
                </div>
            </div>
        </div>




        <button id="scrollToTopBtn" onclick="scrollToTop()"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
    </div>
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

</body>

</html>