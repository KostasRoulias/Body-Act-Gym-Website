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
    <title>Crossfit</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./crossfit.css">
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
                <img src="./images/crossSection.jpg" alt="crossfit">
                <div class="text">
                    <p> <span style="color: #6aebbc; font-size: 20px;">CrossFit</span> is a high-intensity fitness program that incorporates elements
                        from various disciplines, including weightlifting, gymnastics,
                        cardiovascular training, and more. It's known for its constantly
                        varied workouts, which typically involve functional movements performed
                        at high intensity. CrossFit workouts are usually performed in a group
                        setting, often in a CrossFit gym (also known as a "box"), and are led
                        by certified CrossFit trainers. <br><br><br><br><br><br><br>
                        Here are some benefits of CrossFit: <br><br>
                    <ul>
                        <li> <span class="bullets"> Overall Fitness: </span>CrossFit workouts are designed to improve multiple aspects of fitness, including strength, endurance, flexibility, coordination, and agility.</li>
                        <li><span class="bullets">Functional Movements:</span> The exercises in CrossFit mimic movements that are commonly used in everyday life, such as squatting, lifting, pushing, and pulling. This helps improve functional strength and makes daily activities easier.</li>
                        <li><span class="bullets">Intensity: </span>CrossFit workouts are typically short but intense. This high-intensity approach can lead to improved cardiovascular health, increased calorie burn, and efficient use of workout time.</li>
                        <li><span class="bullets">Community and Support:</span> CrossFit often fosters a strong sense of community among its participants. Working out in a group setting can provide motivation, accountability, and support from fellow members and coaches.</li>
                        <li><span class="bullets">Scalability: </span>CrossFit workouts can be scaled to suit individuals of all fitness levels, from beginners to elite athletes. Coaches can modify workouts to accommodate different abilities and fitness goals.</li>
                        <li><span class="bullets">Variety:</span> CrossFit incorporates a wide range of exercises and workout formats, ensuring that participants never get bored and continuously challenge their bodies in new ways.</li>
                        <li><span class="bullets">Measurable Progress:</span> CrossFit encourages tracking performance and progress over time. Many workouts are scored or timed, allowing participants to see improvements in strength, speed, and endurance.</li>
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