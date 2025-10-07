<?php

//registration

session_start(); // Start the session

require_once "db.php";

function setup_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$emailregister = $passwordregister = "";
$emailregister_err = $passwordregister_err = "";
$registration_success_msg = $registration_error_msg = "";

// //Registration method
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {

    //   validate email
    if (empty(trim($_POST["emailRegister"])) || !filter_var($_POST["emailRegister"], FILTER_VALIDATE_EMAIL)) {
        $emailregister_err = "*";
    } else {
        $sql = "SELECT id FROM user WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_emailregister);

            $param_emailregister = setup_data($_POST["emailRegister"]);

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $emailregister_err = "This email already exists.";
                } else {
                    $emailregister = setup_data($_POST["emailRegister"]);
                }
            } else {
                echo "Something went wrong. Try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }

    //validate password
    if (empty(trim($_POST["passwordRegister"]))) {
        $passwordregister_err = "*";
    } elseif (strlen(trim($_POST["passwordRegister"])) < 6) {
        $passwordregister_err = "Password must have at least 6 characters.";
    } else {
        $passwordregister = setup_data($_POST["passwordRegister"]);
    }

    if (empty($emailregister_err) && empty($passwordregister_err)) {
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_emailregister, $param_passwordregister);

            $param_emailregister = $emailregister;
            $param_passwordregister = password_hash($passwordregister, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['registration_success'] = true;
                $registration_success_msg = "Registration successful!";
            } else {
                $_SESSION['registration_error_msg'] = "Something went wrong. Try again later.";
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            }
            mysqli_stmt_close($stmt);
        }
    } else {
        $_SESSION['registration_error_msg'] = "Registration failed. Password must contain at least 6 digits.Please try again.";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    mysqli_close($link);
}
if (isset($_SESSION['registration_error_msg'])) {
    echo "<script>alert('" . $_SESSION['registration_error_msg'] . "');</script>";
    unset($_SESSION['registration_error_msg']);
}

//end of registration
?>

<?php

require_once "db.php";

//login method

$email = $password = "";
$email_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Login"])) {

    if (empty(trim($_POST["emailLogin"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST['emailLogin']);
    }

    if (empty(trim($_POST["passwordLogin"]))) {
        $password_err = "Please enter password.";
    } else {
        $password = trim($_POST['passwordLogin']);
    }

    if (empty($email_err) && empty($password_err)) {

        $sql = "SELECT id, email, password FROM user WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {

            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if (mysqli_stmt_execute($stmt)) {

                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {

                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["emailLogin"] = $email;

                            // Check if email and password match the admin credentials
                            // if ($email === "admin@gmail.com" && $password === "123456") {
                            //     // If admin credentials match, set session variables and redirect to admin.php
                            //     header("location: home.php");
                            //     exit();
                            // } else {
                            //     header("Location: " . $_SERVER['PHP_SELF']);
                            //     exit();
                            // }
                        }
                    } else {
                        $login_err = "Invalid email or password.";
                    }
                } else {
                    header("Location: " . $_SERVER['PHP_SELF']);
                    exit();
                    echo "Something went wrong. Please try again.";
                }
                mysqli_stmt_close($stmt);
            }
        }
    }
    mysqli_close($link);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <div class="content">
            <div class="logo"><a href="./home.php"> <img src="./images/bodyact.png" alt="logo"></a> </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times" style="color: #ffff;"></i>
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
                <!-- Appear-dissappear Register btn -->
                <?php if (!isset($_SESSION['loggedin'])) : ?>
                    <li><button type="submit" id="registBtn">Register</button></li>
                <?php else : ?>
                    <li><button type="submit" class="registBtn">Register</button></li>
                <?php endif; ?>

                <!-- Appear-dissappear Login btn -->
                <?php if (!isset($_SESSION['loggedin'])) : ?>
                    <li><button type="submit" id="loginBtn">Login</button></li>
                <?php else : ?>
                    <li><button type="submit" class="loginBtn">Login</button></li>
                <?php endif; ?>

                <!-- Appear-dissappear logout btn -->
                <?php if (!isset($_SESSION['loggedin'])) : ?>
                    <li><button type="submit" id="logout">Logout</button></li>
                <?php else : ?>
                    <li>
                    <select id="actionDropdown" onchange="handleAction()">
                        <option value="" selected disabled>Action</option>
                        <option value="./delete.php">Logout</option>
                        <option value="./resetPassword.php">Reset Password</option>
                    </select>
                    </li>
                <?php endif; ?>
            </ul>
            <div id="popupForm" class="popup">
                <!-- <form action="home.php" method="POST"> -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="cancel-btn2">
                        <i class="fas fa-times"></i>
                    </div>

                    <h2 id="login-title">Login</h2>

                    <div class="credentials">
                        <input type="email" name="emailLogin" placeholder="Email" value="<?php echo $email; ?>"><br>
                        <span class="invalid"><?php echo $email_err; ?></span>
                        <input type="password" name="passwordLogin" placeholder="Password" value="<?php echo $password; ?>">
                        <span class="invalid"><?php echo $password_err; ?></span><br>
                        <span class="invalid"><?php echo $login_err; ?></span>
                    </div><br>

                    <button type="submit" name="Login" id="login">Login</button>
                </form>
            </div>
            <div class="register">
                <!-- <form action="./login/home.php" method="POST"> -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="cancel-btn3">
                        <i class="fas fa-times"></i>
                    </div>
                    <h2>Register</h2>
                    <div class="credentialsRegister">
                        <input type="text" name="emailRegister" placeholder="Email" value="<?php echo htmlspecialchars($emailregister); ?>">
                        <span class="invalid"><?php echo isset($emailregister_err) ? $emailregister_err : ''; ?></span><br>
                        <input type="password" name="passwordRegister" placeholder="Password" value="<?php echo htmlspecialchars($passwordregister); ?>">
                        <span class="invalid"><?php echo isset($passwordregister_err) ? $passwordregister_err : ''; ?></span>

                        <script>
                            <?php if (!empty($registration_success_msg)) : ?>
                                alert('<?php echo $registration_success_msg; ?>');
                            <?php endif; ?>
                        </script>
                    </div>
                    <button type="submit" name="register" id="registerButton">Register</button>
                </form>
            </div>

            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="banner">
        <video autoplay muted loop>
            <source src="./images/6390166-uhd_3840_2160_25fps.mov" type="video/mp4">
        </video>
    </div>

   <div class="services">
        <div class="servicesTitle">
            <p>Services</p>
        </div>
        <div class="imageGrid">
            <div class="imageContainer">
                <p>Crossfit</p>
                <a href="./crossfit.php"><img src="./images/crossfit.jpg" alt="crossfit"></a>
            </div>
            <div class="imageContainer">
                <p>Pilates</p>
                <a href="./pilates.php"><img src="./images/pilates.jpg" alt="pilates"></a>
            </div>
            <div class="imageContainer">
                <p>Kangoo</p>
                <a href="./kangoo.php"><img src="./images/kangoo.png" alt="kangoo"></a>
            </div>
            <div class="imageContainer">
                <p>Yoga</p>
                <a href="./yoga.php"><img src="./images/yoga-7140566_1920.jpg" alt="yoga"></a>
            </div>
            <div class="imageContainer">
                <p>Personal Training</p>
                 <a href="./personal.php"><img src="./images/personal.jpg" alt="personalTraining"></a>
            </div>
            <div class="imageContainer">
                <p>Small Group Training</p>
                <a href="./group.php"><img src="./images/smallgroup.jpg" alt="smallGroup"></a>
            </div>     
        </div>            
   </div>
   <div class="containerTrial">
        <div class="trialWorkout">
            <p>Book a <span style="text-decoration: underline;"> Free </span>Trial Workout</p>
            <i class="fa-regular fa-paper-plane"></i>
            <div class="here">
                <p><a href="./contact.php">Here</a></p>
            </div>
        </div>
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
            <p>&copy; 2024 BodyAct. All rights reserved.</p>
        </div>
    </footer>

    <script src="home1.js" charset="utf-8"></script>
</body>

</html>
