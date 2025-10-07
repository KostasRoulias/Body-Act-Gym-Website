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
    <title>Kangoo</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./kangoo.css">
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
                <img src="./images/kangooSection.png" alt="kangoo">
                <div class="text">
                    <p> <span style="color: #6aebbc; font-size: 20px;">Kangoo</span> is a form of exercise that involves
                        wearing special rebound shoes with springs attached to the sole. Participants perform a variety of
                        aerobic and fitness movements while wearing these shoes, including jumping, running, and dancing. <br><br><br><br><br><br><br>
                        Here are some benefits of Kangoo: <br><br>
                    <ul>
                        <li> <span class="bullets"> Low-Impact Cardio: </span>Kangoo exercise provides a high-intensity cardio workout with minimal impact on the joints. The springs in the shoes help absorb shock and reduce the stress placed on the knees, ankles, and hips, making it suitable for individuals with joint issues or those looking for a low-impact alternative to traditional cardio exercises like running or jumping.</li>
                        <li> <span class="bullets"> Improved Strength and Endurance:</span>Kangoo exercise engages multiple muscle groups, including the legs, core, and arms, as participants perform various movements such as jumping, squatting, and lunging. Over time, regular participation in Kangoo exercise can lead to improvements in strength, endurance, and muscle tone.</li>
                        <li> <span class="bullets">Enhanced Balance and Coordination:</span>Wearing Kangoo shoes requires participants to engage their core muscles and maintain balance while performing dynamic movements. This helps improve balance, coordination, and proprioception (awareness of body position), which are essential for overall physical performance and injury prevention.</li>
                        <li> <span class="bullets">Calorie Burn and Weight Management:</span>Kangoo exercise is a high-energy workout that can help burn a significant number of calories in a short amount of time. The combination of aerobic activity and resistance training increases metabolism and promotes fat loss, making it an effective option for weight management and body composition improvement.</li>
                        <li> <span class="bullets">Fun and Engaging:</span>The novelty of Kangoo shoes and the dynamic nature of the workouts make Kangoo exercise fun and enjoyable for many participants. The variety of movements and music used in Kangoo classes add an element of excitement and motivation, making it easier to stick to a regular exercise routine.</li>
                        <li> <span class="bullets">Stress Relief and Mood Enhancement:</span>Like other forms of exercise, Kangoo exercise releases endorphins, which are natural mood boosters that help reduce stress and promote feelings of happiness and well-being. The rhythmic bouncing and music used in Kangoo classes can also have a calming effect on the mind, providing mental relaxation and stress relief.</li>
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