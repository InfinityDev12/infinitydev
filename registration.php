<?php
include 'connection.php';
session_start();

if (isset($_SESSION["username"]) > 0) {
    echo "
    <script>
    alert('anda sudah login') ;
    document.location.href='../index.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">

</head>

<?php

include "connection.php";

if (isset($_POST['submit'])) {
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "SELECT username FROM users WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah terdaftar');
                document.location.href='registration.php';
            </script>
        ";
        exit;
    }

    if ($namadepan == "" || $namabelakang == "" || $username == "" || $email == "" || $password == "") {
        echo "
        <script>
        alert('You must filled all') ;
        document.location.href='registration.php';
        </script>
        ";
    } else {
        mysqli_query($mysqli, "INSERT INTO users(namadepan, namabelakang, username, email, password) VALUES('$namadepan', '$namabelakang', '$username', '$email', md5('$password')) ")
            or die('gagal');

        echo "<script>
            alert('Akun anda berhasil dibuat ') ;
            document.location.href='login.php';
            </script>";
    }
} else {


?>

    <body>
        <img class="ilustration" src="../img/play.png" id="ilustration">
        <div class="login-content" id="login-content">
            <form action="" method="post">
                <h2 class="title">Welcome</h2>
                <div class="input-div">
                    <div class="i">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div>
                        <h5>Nama Depan</h5>
                        <input type="text" name="namadepan" id="namadepan" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div>
                        <h5>Nama Belakang</h5>
                        <input type="text" name="namabelakang" id="namabelakang" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div>
                        <h5>E-Mail</h5>
                        <input type="email" name="email" id="email" class="input">
                    </div>
                </div>
                <div class="input-div">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input type="text" name="username" id="username" class="input">
                    </div>
                </div>
                <div class="input-div zero">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" id="password" class="input">
                    </div>
                </div>
                <a href="#" class="forgot">Forgot Password?</a>
                <input type="submit" name="submit" id="submit" class="btn" value="Login">
                <h5 class="register">Do You Have An Account? Login<a href="login.php"> In Here</a></h5>
            </form>
        </div>
        <script type="text/javascript" src="../assets/js/main.js"></script>
    <?php } ?>
    </body>

</html>