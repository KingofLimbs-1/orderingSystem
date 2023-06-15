<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="rowContainer">
        <div class="logoContainer">
            <a href="../index.php">
                <h1>Dropping Donuts</h1>
            </a>
        </div>
        <div class="navBarContainer">
            <ul class="navBarItems">
                <li>Username</li>
                <li>
                    <a href="login.php">
                        <img id="userImg" src="../images/user.png" alt="UserIcon" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Login -->
    <section class="loginSection">
        <div class="loginContainer">
            <div class="heading">
                <h1>Login</h1>
            </div>
            <form action="../include/loginProcess.php" method="post">
                <div class="name">
                    <input type="text" id="name" name="name" placeholder="Name...">
                </div>

                <div class="username">
                    <input type="text" id="username" name="username" placeholder="Username...">
                </div>

                <div class="submitBtn">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Login end -->
</body>

</html>