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
    <title>Personal Training</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./personal.css">
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
                <img src="./images/personalSection.jpg" alt="personal">
                <div class="text">
                    <p> <span style="color: #6aebbc; font-size: 20px;">Pesonal training</span> involves working one-on-one
                        with a certified fitness professional to develop a tailored exercise program designed to help you achieve
                        your specific fitness goals. These goals can vary widely, including weight loss, muscle building, improved
                        cardiovascular health, flexibility, sports performance enhancement, injury rehabilitation, and overall
                        wellness. <br><br><br><br><br><br><br>
                        Here are some benefits of Personal Training: <br><br>
                    <ul>
                        <li> <span class="bullets">Personalized Approach:</span>Personal training programs are customized to meet your individual needs, preferences, and fitness level. A personal trainer will assess your current fitness level, discuss your goals, and design a program specifically tailored to help you achieve those goals safely and effectively.</li>
                        <li> <span class="bullets">Accountability and Motivation:</span>Having a dedicated personal trainer provides a level of accountability and motivation that can be difficult to achieve on your own. Your trainer will help keep you accountable to your workouts, track your progress, and provide encouragement and support along the way, helping you stay motivated to reach your goals.</li>
                        <li> <span class="bullets">Education and Guidance: </span>Personal trainers are highly knowledgeable about exercise science, anatomy, physiology, and nutrition. They can teach you proper exercise techniques, help you understand how different exercises affect your body, and provide guidance on healthy nutrition habits, empowering you to make informed choices about your health and fitness.</li>
                        <li> <span class="bullets">Efficiency and Effectiveness:</span>Personal training sessions are designed to be efficient and effective, maximizing your workout time and ensuring you get the most out of each session. Your trainer will create a structured program that targets your specific goals, focusing on exercises and techniques that deliver results in the most efficient manner possible.</li>
                        <li> <span class="bullets">Safety and Injury Prevention: </span>Working with a personal trainer reduces the risk of injury by ensuring that you perform exercises with proper form and technique. Your trainer will monitor your movements, provide feedback on your technique, and make adjustments as needed to help prevent injuries and ensure your safety during workouts.</li>
                        <li> <span class="bullets">Progress Tracking and Goal Setting: </span>Personal trainers use various methods to track your progress over time, such as measurements, body composition analysis, strength assessments, and performance evaluations. They will regularly review your progress with you, set new goals, and adjust your program as needed to keep you on track and continually challenge you.</li>
                        <li> <span class="bullets">Adaptability and Flexibility: </span>Personal training programs are adaptable and can be modified to accommodate changes in your schedule, fitness level, or goals. Your trainer will work with you to adjust your program as needed to ensure that it remains effective and aligned with your evolving needs and preferences.</li>

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