<?php
session_start();
$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Must be filled!";
    } elseif (strlen($password) < 5) {
        $error = "Password is at least 5 characters!";
    } elseif (!ctype_alnum($password)) {
        $error = "Password must consist of letters and numbers.";
    } else {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hotel - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden; /* To ensure no scrolling issues */
            font-family: 'Poppins', sans-serif;

        }

        .navbar {
            margin-bottom: 0; /* Ensure no margin below the navbar */
        }

        /* Header styles */
        .navbar {
            background-color: #ffafcc;
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: white;
            text-transform: uppercase;
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            text-transform: uppercase;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .login-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Ensure it fills the full viewport height */
            width: 100vw; /* Full viewport width */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: background-image 1s ease-in-out;
            position: relative;
            margin: 0; /* Remove any possible margin */
            padding: 0; /* Remove any possible padding */
        }

        .login-box {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            z-index: 2;
            margin-bottom: 0; /* Ensure no extra space below the box */
        }

        #slider {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

    <!-- Header with navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">BAIHAQI OYO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Background slider -->
    <div id="slider" class="login-container">
        <!-- This div will have the background images dynamically applied -->
    </div>

    <!-- Login form -->
    <div class="login-container">
        <div class="login-box">
            <h3 class="text-center">BAIHAQI OYO</h3>
            <form action="" method="POST">
                <?php if ($error): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>

            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Array of background images
            const images = ['slider1.jpg', 'slider2.jpg', 'slider3.jpg'];
            let currentIndex = 0;

            // Function to change the background image
            function changeBackground() {
                $('#slider').css('background-image', `url(${images[currentIndex]})`);
                currentIndex = (currentIndex + 1) % images.length; // Increment and loop back to the start
            }

            // Change background every 3 seconds
            setInterval(changeBackground, 4000); // Adjust for smoother transitions

            // Set initial background image
            changeBackground();
        });
    </script>
</body>
</html>
