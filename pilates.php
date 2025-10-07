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
    <title>Pilates</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./pilates.css">
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
                <img src="./images/pilatesSection.jpg" alt="crossfit">
                <div class="text">
                    <p> <span style="color: #6aebbc; font-size: 20px;">Pilates</span> s a form of exercise developed
                        by Joseph Pilates in the early 20th century. It focuses on improving flexibility, strength, and
                        body awareness without building bulk. Pilates exercises emphasize proper postural alignment, core
                        strength, and muscle balance. <br><br><br><br><br><br><br>
                        Here are some benefits of Pilates: <br><br>
                    <ul>
                        <li> <span class="bullets"> Improved Core Strength: </span>Pilates targets the deep muscles of the core, including the abdominals, lower back, hips, and buttocks. By strengthening these muscles, Pilates helps to stabilize the spine and improve overall core strength.</li>
                        <li><span class="bullets">Increased Flexibility:</span>Pilates exercises often involve stretching and lengthening the muscles, which helps to improve flexibility and range of motion in the joints. Increased flexibility can lead to improved posture and reduced risk of injury. </li>
                        <li><span class="bullets">Better Posture: </span> Pilates emphasizes proper alignment and body awareness, which can help correct poor posture habits. By strengthening the muscles that support the spine and promoting proper alignment, Pilates can help improve posture and reduce back pain.</li>
                        <li><span class="bullets">Enhanced Body Awareness: </span> Pilates exercises require concentration and focus on proper technique and alignment. This heightened body awareness can help individuals develop a better understanding of their bodies and how to move more efficiently.</li>
                        <li><span class="bullets">Low-Impact Exercise:</span>Pilates is gentle on the joints and can be suitable for people of all fitness levels, including those with joint pain or injuries. Many Pilates exercises are performed in a controlled manner with minimal impact, making it a safe and effective form of exercise for rehabilitation and injury prevention. </li>
                        <li><span class="bullets">Mind-Body Connection:</span>Pilates emphasizes the connection between the mind and body, promoting mindfulness and relaxation. The focus on breathing and controlled movement can help reduce stress and promote mental well-being. </li>
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