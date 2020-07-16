<?php

session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assetts/fontawesome/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>
</head>

<body>
    <nav>
        <label class="brand"><img src="../img/dev.png" alt="" srcset="" width="200" height="auto"></label>
        <ul>
            <li><a href="jklmn.php">Data User</a></li>
            <li><a href="komen.php">Data Komentar</a></li>
            <li><a href="index.php" class="active">Komentar</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <label id="icon">
            <i class="fa fa-bars"></i>
        </label>
    </nav>
    <?php
    if (isset($_SESSION['valid'])) {
        include("connection.php");
        $result = mysqli_query($mysqli, "SELECT * FROM users");
    ?>

        Selamat Datang <?php echo $_SESSION['username'] ?> ! <a href='logout.php'>Logout</a><br />
        <br />

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_SESSION['username'];
            $komen = $_POST['komen'];

            mysqli_query($mysqli, "INSERT INTO komen(nama, komen) VALUES('$nama', '$komen')")
                or die('Gagal');

            echo "<script>alert('Komentar anda berhasil ditambahkan') ;
                document.location.href='index.php';
                </script>";
        } else {
        ?>

            <form>
                <textarea cols="70" rows="10" type="text" name="komen" placeholder="Masukkan Komentar Anda Disini"></textarea><br>
                <button type="submit" class="btn btn-light">kirim</button>
            </form>
        <?php }

        $result = mysqli_query($mysqli, "SELECT * FROM komen");

        while ($res = mysqli_fetch_assoc($result)) {
            echo "<b>" . $res['nama'] . "</b>" . "<br>";
            echo $res['time'] . "<br>";
            echo $res['komen'] . "<br>";
        }

        ?>
        <br /><br />
    <?php
    } else {
        echo "
        <script>
            alert('maaf anda harus login terlebih dahulu') ;
            document.location.href='../index.php';
        </script>";
    }
    ?>
</body>

</html>