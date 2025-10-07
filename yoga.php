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
    <title>Yoga</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./yoga.css">
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
                <img src="./images/yogaSection.jpg" alt="crossfit">
                <div class="text">
                    <p> <span style="color: #6aebbc; font-size: 20px;">Yoga</span> at the gym refers to the practice
                        of yoga within a gym setting, often led by certified yoga instructors. While yoga originated in
                        ancient India as a spiritual and philosophical practice, it has evolved into a popular form of
                        physical exercise that focuses on strength, flexibility, and mental well-being. <br><br><br>
                        Here are some benefits of Yoga: <br><br>
                    <ul>
                        <li> <span class="bullets">Improved Flexibility:</span>Yoga involves a series of poses (asanas) that stretch and lengthen the muscles, tendons, and ligaments throughout the body. Regular practice of yoga can lead to increased flexibility and range of motion in the joints, which can help prevent injuries and improve overall mobility.</li>
                        <li> <span class="bullets">Increased Strength: </span>Many yoga poses require the engagement of various muscle groups to support and stabilize the body. As a result, yoga can help build strength, particularly in the core, arms, legs, and back. Strengthening these muscle groups can improve posture, balance, and functional movement patterns.</li>
                        <li> <span class="bullets">Stress Reduction and Relaxation:</span>Yoga incorporates breathing techniques (pranayama) and meditation practices that promote relaxation and stress relief. Deep, mindful breathing during yoga can activate the parasympathetic nervous system, leading to a state of calmness and relaxation. This can be especially beneficial for reducing stress levels and improving mental well-being.</li>
                        <li> <span class="bullets">Mind-Body Connection: </span>Yoga encourages practitioners to cultivate awareness of their bodies, breath, and thoughts. By focusing on the present moment and tuning into physical sensations, yoga fosters a deeper connection between the mind and body. This heightened awareness can help reduce mental chatter, increase mindfulness, and improve overall self-awareness.</li>
                        <li> <span class="bullets">Balance and Stability: </span>Many yoga poses require balance and stability, challenging practitioners to find equilibrium both physically and mentally. Practicing balance poses can strengthen the muscles involved in stabilizing the body and improve proprioception (awareness of body position), which can help prevent falls and enhance athletic performance.</li>
                        <li> <span class="bullets">Injury Rehabilitation and Prevention: </span>Yoga can be a valuable tool for both rehabilitating and preventing injuries. The gentle, low-impact nature of yoga makes it accessible to individuals of all fitness levels and ages. Additionally, yoga's focus on alignment and mindful movement can help correct imbalances, alleviate muscular tension, and promote overall musculoskeletal health.</li>

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