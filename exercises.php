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
    <title>Exercises</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./exercises.css">
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

        <div id="exercise-library"></div>

        <script>
            // Call the loadXml function when the page loads
            window.onload = function() {
                loadXml();
            };
        </script>

        <div id="pagination">
            <button onclick="goToPage(currentPage - 1)" disabled><</button>
            <button onclick="goToPage(currentPage + 1)">></button>
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
    <script src="./exercises.js" charset="utf-8"></script>
    <script src="./contact.js" charset="utf-8"></script>

</body>

</html>