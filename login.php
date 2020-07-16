<?php

session_start();

if (isset($_SESSION["username"]) > 0) {
    echo "
    <script>
    alert('anda sudah login') ;
    document.location.href='../index.php';
    </script>";
}

include("connection.php");

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    if ($username == "" || $password == "") {
        echo "Username atau password tidak boleh kosong.";
        echo "<br/>";
        echo "<a href='LOGIN'>Kembali</a>";
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM users WHERE username='$username' AND password=md5('$password')")
            or die("Tidak dapat menjalankan QUERY SELECT.");

        $row = mysqli_fetch_assoc($result);

        if (is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "Username atau password salah.";
            echo "<br/>";
            echo "<a href='login'>Kembali</a>";
        }

        if (isset($_SESSION['valid'])) {
            header('Location:../index.php');
        }
    }
}

if (isset($_POST['register'])) {
    header("location:registration.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>

<body>
    <img class="ilustration" src="../img/login.png">
    <div class="login-content">
        <form action="" method="post">
            <h2 class="title">Welcome</h2>
            <div class="input-div">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Username</h5><br>
                    <input type="text" name="username" class="input" autofocus>
                </div>
            </div>
            <div class="input-div zero">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div>
                    <h5>Password</h5><br><br>
                    <input type="password" name="password" class="input">
                </div>
            </div>
            <a href="#" class="forgot">Forgot Password?</a>
            <input type="submit" name="login" class="btn" value="Login">
            <h5 class="register">Don't Have Any Account? Register<a href="registration.php"> In Here</a></h5>
        </form>
    </div>
    <script type="text/javascript" src="../assets/js/main.js"></script>
</body>

</html>