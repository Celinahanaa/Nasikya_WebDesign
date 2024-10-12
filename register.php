<?php
require 'koneksi.php';
if (isset($_POST["submit"])) {

    $email = mysqli_real_escape_string($koneksi, $_POST["email"]);
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
    $confirm = mysqli_real_escape_string($koneksi, $_POST["confirm"]);

    $duplicate = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or email already exists');</script>";
    } else {
        if ($password == $confirm) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            $query = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$hashed_password')";
            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Registration successful!');window.location.href = 'index.php'; </script>";
            } else {
                echo "<script>alert('Registration failed. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="logreg.css">
</head>
<body>
    <section>
        <!-- background start -->
        <div class="container">
            <div id="scene">
                <div class="layer" data-depth-x="-0.5"><img src="asset/box1.png"></div>
                <div class="layer" data-depth-x="-0.10" data-depth-y="-0.35"><img src="asset/love.png"></div>
                <div class="layer" data-depth-x="-0.15"><img src="asset/circle.png"></div>
                <div class="layer" data-depth-x="-0.25"><img src="asset/box2.png"></div>
                <div class="layer" data-depth-x="-0.25"><img src="asset/water.png"></div>
                <div class="layer" data-depth-x="-0.25"><img src="asset/holo.png"></div>
            </div>
        </div>
        <!-- background end -->

        <!-- register start -->
        <div class="register">
            <div class="form-box register">
                <h2>Register</h2>
                <form action="register.php" method="post" autocomplete="off">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input name="email" id="email" type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <input name="username" id="username" type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input name="password" id="password" type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input name="confirm" id="confirm" type="password" required>
                        <label>Confirm Password</label>
                    </div>
                    <button type="submit" name="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Have an account? <a href="index.php" class="register-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- register end -->

    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" integrity="sha512-/6TZODGjYL7M8qb7P6SflJB/nTGE79ed1RfJk3dfm/Ib6JwCT4+tOfrrseEHhxkIhwG8jCl+io6eaiWLS/UX1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let scene = document.getElementById('scene');
        let parallax = new Parallax(scene);
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- script -->
</body>
</html>
